<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ResidenceImagesController extends Controller
{
    public function index(){
        $residence = DB::table('residences')->get();
        return view('admin.residences.index',compact('residence'));
    }
    public function create()
    {
      return view('admin.residences.create');

    }

    public function edit($id)
    {
    
      $residence = DB::table('residences')->where('id', $id)->first();
    //  dd($slider);
      return view('admin.residences.edit',compact('residence'));
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
            $file->move('public/images/residences/',$filename);
            $values['image'] = $filename;
        }
      

          DB::table('residences')->insert($values);

          return redirect()->route('residences.index')->with('added', 'residences is created !');
    }

    public function update(Request $request, $id){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
          ]);
         $values['title'] = $request->title;
          $values['desc'] = $request->desc;


          if($request->hasFile('image')){
            $destination = 'public/images/residences/'.$request->old_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/residences/',$filename);
            $values['image'] = $filename;
         }
       $residence = DB::table('residences')->where('id', $id)->update($values);
       return redirect()->route('residences.index')->with('update', 'residences is Updated !');



    }

    public function destroy($id){
      $residence = DB::table('residences')->where('id', $id)->first();
    
      $destination = 'public/images/residences/'. $residence->image;
      if(File::exists($destination))
      {
          File::delete($destination);
      }
    DB::table('residences')->where('id', $id)->delete();
      return redirect()->route('residences.index')->with('deleted','residences has been deleted');

    }
}
