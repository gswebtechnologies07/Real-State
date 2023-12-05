<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Hash;
use App\models\Admin;
use Intervention\Image\Facades\Image as Image;


class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<>pro";print_r($data);die;

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30'
            ];

            $customMessages = [
                'email.required' => "Email is Required",
                'email.email' => 'valid Email is Required',
                'password.required' => 'Password is Required',
            ];

            $this->validate($request, $rules, $customMessages);

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect("admin/dashboard");
            } else {
                return redirect()->back()->with("error_message", "Invalid Email or password");
            }
        }

        return view('admin.login');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function updatePassword(Request $request)
    {
        // Session::put('page', 'update-password');
        if ($request->isMethod('post')) {
            $data = $request->all();
            //check if current password is correct
            if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
                //check if new password and corfirm password are matching 
                if ($data['new_pwd'] == $data['confirm_pwd']) {
                    //Upade new Password
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt($data['new_pwd'])]);
                    return redirect()->back()->with('success_message', 'Password has been updated Successfully');
                } else {
                    return redirect()->back()->with('error_message', 'New Password and Retype Password not match');
                }
            } else {
                return redirect()->back()->with('error_message', 'Your current password is Incorrect!');
            }
        }
        return view('admin.update_password');
    }

    public function checkCurrentPassword(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
    }

    public function updateDetails(Request $request)
    {
        // Session::put('page', 'update-details');
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;

            $rules = [
                // 'admin_name' => 'required|alpha|max:255',
                // 'admin_name' => 'required|max:255',
                'admin_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
                'admin_mobile' => 'required|numeric|digits:10|min:10',
                'admin_image' => 'image'
            ];

            $customMessages = [
                'admin_name.required' => "Name is Required",
                'admin_name.regex' => "Valid Name is required",
                'admin_name.max' => "Valid Name is required",

                // 'admin_name.alpha' => 'valid Name is Required',
                'admin_mobile.required' => 'Mobile is Required',
                'admin_mobile.numeric' => 'vallid Mobile is Required',
                'admin_mobile.digits' => 'vallid Mobile is Required',
                'admin_image.image' => 'vallid Image is Required',


            ];

            $this->validate($request, $rules, $customMessages);

            // Upload Admin Image using intervension package
            if ($request->hasfile('admin_image')) {
                $image_tmp = $request->file('admin_image');
                if ($image_tmp->isValid()) {
                    //get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //generate new image name
                    //    echo  $imageName = rand(111,99999).'.'.$extension; die;
                    $imageName = rand(111, 99999) . '.' . $extension;
                    $image_path = 'public/admin/images/photos/' . $imageName;
                    Image::make($image_tmp)->save($image_path);
                }
            } else if (!empty($data['current_image'])) {
                $imageName = $data['current_image'];
            } else {
                $imageName = "";
            }

            //Update Admin Details
            Admin::where('email', Auth::guard('admin')->user()->email)->update(['name' => $data['admin_name'], 'mobile' => $data['admin_mobile'], 'image' => $imageName]);
            return redirect()->back()->with('success_message', 'Admin Details has been updated Successfully');
        }
        return view('admin.update_details');
    }



}
