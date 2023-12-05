<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AvailabilityController extends Controller
{
    public function index(){
        $availability = DB::table('availability')->get();
        return view('admin.availability.index',compact('availability'));
    }
    public function create()
    {
      return view('admin.availability.create');

    }
    public function edit($id)
    {
    
      $availability = DB::table('availability')->where('id', $id)->first();
    //  dd($slider);
      return view('admin.availability.edit',compact('availability'));
    }
    public function store(Request $request){

        $request->validate([
            'room_title'=>'required',
            'price'=>'required'
  
          ]);

          $values['room_title'] = $request->room_title;
          $values['room_no'] = $request->room_no;
          $values['price'] = $request->price;
          $values['offer_price'] = $request->offer_price;
          $values['bedroom_details'] = $request->bedroom_details;

        

        //   dd($values);

          DB::table('availability')->insert($values);

          return redirect()->route('availability.index')->with('added', 'Availability is created !');
    }
    public function update(Request $request, $id){
        $request->validate([
            'room_title'=>'required',
            'price'=>'required'
  
          ]);
          $values['room_title'] = $request->room_title;
          $values['room_no'] = $request->room_no;
          $values['price'] = $request->price;
          $values['offer_price'] = $request->offer_price;
          $values['bedroom_details'] = $request->bedroom_details;
        // dd($values);
       $availability = DB::table('availability')->where('id', $id)->update($values);
       return redirect()->route('availability.index')->with('update', 'availability is Updated !');
    }
    public function destroy($id){
        $availability = DB::table('availability')->where('id', $id)->first();
      DB::table('availability')->where('id', $id)->delete();
        // $slider->delete();
        return redirect()->route('availability.index')->with('deleted','Availability has been deleted');
  
      }


}
