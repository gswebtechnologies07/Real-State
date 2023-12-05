<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CmsPage;

class FrontendController extends Controller
{
    //
    public function index(){
        $slider = DB::table('slider')->get();
        $residence = DB::table('residences')->get();
        $cmspages = CmsPage::where('slug','home')->first();
        $setting = DB::table('site_setting')->first();
        $availability = DB::table('availability')->get();
        // $gallery = DB::table('gallery')->get();
        $bedroom = DB::table('br')->get();
        $building = DB::table('building')->get();
        $studio = DB::table('studio')->get();
        return view('front.index',compact('slider','cmspages','setting','residence','availability','bedroom','building','studio'));
    }

    public function about(){
        $setting = DB::table('site_setting')->first();
        $residence = DB::table('residences')->get();
         $availability = DB::table('availability')->get();
          $cmspages = CmsPage::where('slug','about')->first();
        return view('front.about',compact('setting','residence','availability','cmspages'));
    }

    public function residences(){
        $setting = DB::table('site_setting')->first();
        $cmspages = CmsPage::where('slug','residences')->first();
        $residence = DB::table('residences')->get();
         $gallery = DB::table('gallery')->get();
         $availability = DB::table('availability')->get();
         $bedroom = DB::table('br')->get();
        $building = DB::table('building')->get();
        $studio = DB::table('studio')->get();
        return view('front.residences',compact('setting','cmspages','residence','availability','gallery','bedroom','building','studio'));
    }

    public function amenities(){
        $setting = DB::table('site_setting')->first();
        $cmspages = CmsPage::where('slug','amenities')->first();
         $availability = DB::table('availability')->get();
          $residence = DB::table('residences')->get();
        return view('front.amenities',compact('setting','cmspages','availability','residence'));
    }

    public function jerseycity(){
        $setting = DB::table('site_setting')->first();
        $cmspages = CmsPage::where('slug','jerseycity')->first();
         $residence = DB::table('residences')->get();
         $availability = DB::table('availability')->get();
         $gallery = DB::table('gallery')->get();
        return view('front.jersey-city',compact('setting','cmspages','availability','residence','gallery'));
    }
    
    public function project()
    {
         $setting = DB::table('site_setting')->first();
         $residence = DB::table('residences')->get();
          $gallery = DB::table('gallery')->get();
           $cmspages = CmsPage::where('slug','project')->first();
        return view('front.project',compact('setting','residence','gallery','cmspages'));
    }

    public function contact(){
        $setting = DB::table('site_setting')->first();
        $cmspages = CmsPage::where('slug','contact')->first();
        return view('front.contact',compact('setting','cmspages'));
    }
}
