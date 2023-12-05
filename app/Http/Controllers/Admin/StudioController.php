<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudioController extends Controller
{
    public function index(){
        $studio = DB::table('studio')->get();
        return view('admin.studio.index',compact('studio'));
    }
    public function create()
    {
      return view('admin.studio.create');

    }

    public function edit($id)
    {
    
      $studio = DB::table('studio')->where('id', $id)->first();
      return view('admin.studio.edit',compact('studio'));
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
            $file->move('public/images/studio/',$filename);
            $values['image'] = $filename;
        }
      

          DB::table('studio')->insert($values);

          return redirect()->route('studio.index')->with('added', 'Studio is created !');
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
          ]);
         $values['title'] = $request->title;
          $values['desc'] = $request->desc;


          if($request->hasFile('image')){
            $destination = 'public/images/studio/'.$request->old_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/studio/',$filename);
            $values['image'] = $filename;
         }
       $studio = DB::table('studio')->where('id', $id)->update($values);
       return redirect()->route('studio.index')->with('update', 'Studio is Updated !');



    }

    public function destroy($id){
      $studio = DB::table('studio')->where('id', $id)->first();
    
      $destination = 'public/images/studio/'. $studio->image;
      if(File::exists($destination))
      {
          File::delete($destination);
      }
      DB::table('studio')->where('id', $id)->delete();
      return redirect()->route('studio.index')->with('deleted','Studio has been deleted');

    }
}
