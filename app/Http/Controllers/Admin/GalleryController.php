<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index(){
        $gallery = DB::table('gallery')->get();
        return view('admin.gallery.index',compact('gallery'));
    }
    
    public function create()
    {
        return view('admin.gallery.create');
    }
    public function edit($id)
    {
         $gallery = DB::table('gallery')->where('id', $id)->first();
         return view('admin.gallery.edit',compact('gallery'));
    }
    public function store(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg'
          ]);
          
          if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/gallery/',$filename);
            $values['image'] = $filename;
        }
        
        DB::table('gallery')->insert($values);
        return redirect()->route('gallery.index')->with('added','Gallery is created');
    }
    public function update(Request $request,$id){
         $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg'
          ]);
          
          if($request->hasFile('image')){
            $destination = 'public/images/gallery/'.$request->old_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/gallery/',$filename);
            $values['image'] = $filename;
         }
         
         $gallery = DB::table('gallery')->where('id',$id)->update($values);
         return redirect()->route('gallery.index')->with('update','Gallery Is Updated');
    }
    public function destroy($id){
      $gallery = DB::table('gallery')->where('id', $id)->first();
      $destination = 'public/images/gallery/'. $gallery->image;
      if(File::exists($destination))
      {
          File::delete($destination);
      }
    DB::table('gallery')->where('id', $id)->delete();
      return redirect()->route('gallery.index')->with('deleted','gallery has been deleted');

    }
    
}























