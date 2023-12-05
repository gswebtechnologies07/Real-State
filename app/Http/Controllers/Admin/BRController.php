<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BRController extends Controller
{
    public function index(){
        $bedroom = DB::table('br')->get();
        return view('admin.bedroom.index',compact('bedroom'));
    }
    public function create()
    {
      return view('admin.bedroom.create');

    }
    public function edit($id)
    {
      $bedroom = DB::table('br')->where('id', $id)->first();
      return view('admin.bedroom.edit',compact('bedroom'));
    }
    public function store(Request $request){
        $request->validate([
             'title'=>'required'
          ]);
          $values['title'] = $request->title;
          $values['desc'] = $request->desc;

          if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/bedroom/',$filename);
            $values['image'] = $filename;
        }
      

          DB::table('br')->insert($values);

          return redirect()->route('bedroom.index')->with('added', 'bedroom is created !');
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
          ]);
         $values['title'] = $request->title;
         $values['desc'] = $request->desc;
          if($request->hasFile('image')){
            $destination = 'public/images/bedroom/'.$request->old_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/bedroom/',$filename);
            $values['image'] = $filename;
         }
       $slider = DB::table('br')->where('id', $id)->update($values);
       return redirect()->route('bedroom.index')->with('update', 'Bedroom is Updated !');
    }

    public function destroy($id){
      $bedroom = DB::table('br')->where('id', $id)->first();
    
      $destination = 'public/images/bedroom/'. $bedroom->image;
      if(File::exists($destination))
      {
          File::delete($destination);
      }
    DB::table('br')->where('id', $id)->delete();
      return redirect()->route('bedroom.index')->with('deleted','Bedroom has been deleted');

    }
}
