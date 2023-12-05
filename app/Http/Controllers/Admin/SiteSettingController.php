<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SiteSettingController extends Controller
{
    public function index()
    {
        $setting = DB::table('site_setting')->get();
        return view('admin.sitesetting.index', compact('setting'));
    }
    public function create()
    {
        return view('admin.sitesetting.create');
    }
    public function edit($id)
    {

        $setting = DB::table('site_setting')->where('id', $id)->first();
        //  dd($slider);
        return view('admin.sitesetting.edit', compact('setting'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg',
            'email' => 'required',
            'phone' => 'required'

        ]);

        $values['email'] = $request->email;
        $values['phone'] = $request->phone;
        $values['desc'] = $request->desc;
        $values['address'] = $request->address;
        $values['copy_write'] = $request->copy_write;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/setting/', $filename);
            $values['logo'] = $filename;
        }
        if ($request->hasFile('favicon')) {
            $file = $request->file('favicon');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/setting/', $filename);
            $values['favicon'] = $filename;
        }

        //   dd($values);

        DB::table('site_setting')->insert($values);

        return redirect()->route('setting.index')->with('added', 'site setting is created !');
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg',
            'email' => 'required',
            'phone' => 'required'

        ]);

        $values['email'] = $request->email;
        $values['phone'] = $request->phone;
        $values['desc'] = $request->desc;
        $values['address'] = $request->address;
        $values['copy_write'] = $request->copy_write;

       
        if($request->hasFile('logo')){
            $destination = 'public/images/setting/'.$request->old_logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/setting/',$filename);
            $values['logo'] = $filename;
         }
         if($request->hasFile('favicon')){
            $destination = 'public/images/setting/'.$request->old_favicon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('favicon');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/setting/',$filename);
            $values['favicon'] = $filename;
         }
        // dd($values);
        DB::table('site_setting')->where('id', $id)->update($values);
        return redirect()->route('setting.index')->with('update', 'Site Setting is Updated !');
    }
    public function destroy($id){
        $setting = DB::table('site_setting')->where('id', $id)->first();
      
        $destination = 'public/images/setting/'. $setting->logo;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $destination = 'public/images/setting/'. $setting->favicon;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
      //   dd($slider);
      DB::table('site_setting')->where('id', $id)->delete();
        // $slider->delete();
        return redirect()->route('setting.index')->with('deleted','site setting has been deleted');
  
      }
}
