<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CmsPageController extends Controller
{
    //
    public function index(){

        $cmspages = CmsPage::all();
        // dd($cmspages);
        // return response()->json($cmspages);
        return view('admin.cmspages.index',compact('cmspages'));
    }

    public function create(){
        return view('admin.cmspages.create');
    }

    public function edit($id){
        $cmspages = CmsPage::find($id);
        return view('admin.cmspages.edit',compact('cmspages'));
    }
    public function store(Request $request){
        $cmspages = new CmsPage;
        $cmspages->slug = Str::slug($request->title);


        $request->validate([
            'title' => 'required',
        ]);

        $cmspages->title = $request->title;
        $cmspages->banner_title = $request->banner_title;
        $cmspages->banner_tag_line = $request->banner_tag_line;
        $cmspages->desc = $request->desc;
        $cmspages->meta_title = $request->meta_title;
        $cmspages->meta_desc = $request->meta_desc;
        $cmspages->meta_keyword =$request->meta_keyword;
        $cmspages->status = $request->status;

        if($request->hasFile('banner_img')){
            $file = $request->file('banner_img');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/cmspage/',$filename);
            $cmspages->banner_img = $filename;
        }

        // dd($cmspages);
        $cmspages->save();
        return redirect()->route('cmspage.index')->with('create','cms page created !');
    }

    public function update(Request $request ,$id){
        $cmspages = CmsPage::find($id);
        $cmspages->slug = Str::slug($request->title);


        $request->validate([
            'title' => 'required',
        ]);

        $cmspages->title = $request->title;
        $cmspages->banner_title = $request->banner_title;
        $cmspages->banner_tag_line = $request->banner_tag_line;
        $cmspages->desc = $request->desc;
        $cmspages->meta_title = $request->meta_title;
        $cmspages->meta_desc = $request->meta_desc;
        $cmspages->meta_keyword =$request->meta_keyword;
        $cmspages->status = $request->status;
        
             
        if($request->hasFile('banner_img')){
            $destination = 'public/images/cmspage/'.$cmspages->banner_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner_img');
            $filename = $file->getClientOriginalName();
            $file->move('public/images/cmspage/',$filename);
            $cmspages->banner_img = $filename;

        }
        //dd($cmspages);
        $cmspages->update();
        return redirect()->route('cmspage.index')->with('update','cms page updated !');


    }
    
    public function destroy($id){
        $cmspages = CmsPage::findOrFail($id);
        $destination = 'public/images/cmspage/'. $cmspages->banner_img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $cmspages->delete();

        return redirect()->route('cmspage.index')->with('deleted','cmspage has been deleted!');
    }
}
