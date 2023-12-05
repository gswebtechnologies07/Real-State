<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(){
        $slider = DB::table('slider')->get();
        // dd($slider);
        return view('admin.slider.index',compact('slider'));
    }

    public function create()
    {
      return view('admin.slider.create');

    }

    public function edit($id)
    {
    
      $slider = DB::table('slider')->where('id', $id)->first();
    //  dd($slider);
      return view('admin.slider.edit',compact('slider'));
    }

    public function store(Request $request){

        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
            'title'=>'required',
            'sub_title'=>'required'
  
          ]);

          $values['title'] = $request->title;
          $values['sub_title'] = $request->sub_title;

          if($request->hasFile('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/slider/',$filename);
            $values['img'] = $filename;
        }

        //   dd($values);

          DB::table('slider')->insert($values);

          return redirect()->route('slider.index')->with('added', 'Slider is created !');
    }

    public function update(Request $request, $id){
        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg',
            'title'=>'required',
            'sub_title'=>'required'
  
          ]);

          $values['title'] = $request->title;
          $values['sub_title'] = $request->sub_title;

        //   dd($values);

          if($request->hasFile('img')){
            $destination = 'public/images/slider/'.$request->old_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/slider/',$filename);
            $values['img'] = $filename;
         }
        // dd($values);
       $slider = DB::table('slider')->where('id', $id)->update($values);
       return redirect()->route('slider.index')->with('update', 'Slider is Updated !');



    }

    public function destroy($id){
      $slider = DB::table('slider')->where('id', $id)->first();
    
      $destination = 'public/images/slider/'. $slider->img;
      if(File::exists($destination))
      {
          File::delete($destination);
      }
    //   dd($slider);
    DB::table('slider')->where('id', $id)->delete();
      // $slider->delete();
      return redirect()->route('slider.index')->with('deleted','Slider has been deleted');

    }
    
}
