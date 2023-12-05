<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BuildingController extends Controller
{
    public function index(){
        $building = DB::table('building')->get();
        return view('admin.building.index',compact('building'));
    }
    public function create()
    {
      return view('admin.building.create');

    }

    public function edit($id)
    {
    
      $building = DB::table('building')->where('id', $id)->first();
      return view('admin.building.edit',compact('building'));
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
            $file->move('public/images/building/',$filename);
            $values['image'] = $filename;
        }
      

          DB::table('building')->insert($values);

          return redirect()->route('building.index')->with('added', 'Building is created !');
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
          ]);
         $values['title'] = $request->title;
          $values['desc'] = $request->desc;


          if($request->hasFile('image')){
            $destination = 'public/images/building/'.$request->old_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/building/',$filename);
            $values['image'] = $filename;
         }
       $building = DB::table('building')->where('id', $id)->update($values);
       return redirect()->route('building.index')->with('update', 'Building is Updated !');



    }

    public function destroy($id){
      $building = DB::table('building')->where('id', $id)->first();
    
      $destination = 'public/images/building/'. $building->image;
      if(File::exists($destination))
      {
          File::delete($destination);
      }
    DB::table('building')->where('id', $id)->delete();
      return redirect()->route('building.index')->with('deleted','Building has been deleted');

    }
}
