<?php
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin/login');
});
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function() {
    Route::match(['get','post'],'login','AdminController@login');

    Route::group(['middleware'=>['admin']],function(){
    Route::get('dashboard','AdminController@dashboard');
    Route::match(['get','post'],'update-password', 'AdminController@updatePassword');
    Route::post('check-current-password', 'AdminController@checkCurrentPassword');
    Route::match(['get','post'],'update-details', 'AdminController@updateDetails');

    Route::get('logout', 'AdminController@logout');


    // CmsPages Route

    Route::get('index','CmsPageController@index')->name('cmspage.index');
    Route::get('cmspage-create','CmsPageController@create')->name('cmspage.create');
    Route::post('cmspage-create','CmsPageController@store')->name('cmspage.store');
    Route::get('cmspage-edit/{id}','CmsPageController@edit')->name('cmspage.edit');
    Route::put('cmspage-update/{id}','CmsPageController@update')->name('cmspage.update');
    Route::delete('cmspage-delete/{id}','CmsPageController@destroy')->name('cmspage.delete');

      // slider route

    Route::get('slider', 'SliderController@index')->name('slider.index');
    Route::get('slider-create','SliderController@create')->name('slider.create');
    Route::post('slider-create','SliderController@store')->name('slider.store');
    Route::get('slider-edit/{id}','SliderController@edit')->name('slider.edit');
    Route::put('slider-update/{id}','SliderController@update')->name('slider.update');
    Route::delete('slider-delete/{id}','SliderController@destroy')->name('slider.delete');

          // Site Setting route

          Route::get('setting', 'SiteSettingController@index')->name('setting.index');
          Route::get('setting-create','SiteSettingController@create')->name('setting.create');
          Route::post('setting-create','SiteSettingController@store')->name('setting.store');
          Route::get('setting-edit/{id}','SiteSettingController@edit')->name('setting.edit');
          Route::put('setting-update/{id}','SiteSettingController@update')->name('setting.update');
          Route::delete('setting-delete/{id}','SiteSettingController@destroy')->name('setting.delete');

            // Availability route
        

            Route::get('availability', 'AvailabilityController@index')->name('availability.index');
            Route::get('availability-create','AvailabilityController@create')->name('availability.create');
            Route::post('availability-create','AvailabilityController@store')->name('availability.store');
            Route::get('availability-edit/{id}','AvailabilityController@edit')->name('availability.edit');
            Route::put('availability-update/{id}','AvailabilityController@update')->name('availability.update');
            Route::delete('availability-delete/{id}','AvailabilityController@destroy')->name('availability.delete');

             // Residences route
        

             Route::get('residences', 'ResidenceImagesController@index')->name('residences.index');
             Route::get('residences-create','ResidenceImagesController@create')->name('residences.create');
             Route::post('residences-create','ResidenceImagesController@store')->name('residences.store');
             Route::get('residences-edit/{id}','ResidenceImagesController@edit')->name('residences.edit');
             Route::put('residences-update/{id}','ResidenceImagesController@update')->name('residences.update');
             Route::delete('residences-delete/{id}','ResidenceImagesController@destroy')->name('residences.delete');
             
             //Gallery Route
             
             Route::get('gallery','GalleryController@index')->name('gallery.index');
             Route::get('gallery-create','GalleryController@create')->name('gallery.create');
             Route::post('gallery-create','GalleryController@store')->name('gallery.store');
             Route::get('gallery-edit/{id}','GalleryController@edit')->name('gallery.edit');
             Route::put('gallery-update/{id}','GalleryController@update')->name('gallery.update');
             Route::delete('gallery-delete/{id}','GalleryController@destroy')->name('gallery.delete');
             
              //Bedroom Route
             
             Route::get('bedroom','BRController@index')->name('bedroom.index');
             Route::get('bedroom-create','BRController@create')->name('bedroom.create');
             Route::post('bedroom-create','BRController@store')->name('bedroom.store');
             Route::get('bedroom-edit/{id}','BRController@edit')->name('bedroom.edit');
             Route::put('bedroom-update/{id}','BRController@update')->name('bedroom.update');
             Route::delete('bedroom-delete/{id}','BRController@destroy')->name('bedroom.delete');
             
               //Building Route
             
             Route::get('building','BuildingController@index')->name('building.index');
             Route::get('building-create','BuildingController@create')->name('building.create');
             Route::post('building-create','BuildingController@store')->name('building.store');
             Route::get('building-edit/{id}','BuildingController@edit')->name('building.edit');
             Route::put('building-update/{id}','BuildingController@update')->name('building.update');
             Route::delete('building-delete/{id}','BuildingController@destroy')->name('building.delete');
             
               //Studio Route
             
             Route::get('studio','StudioController@index')->name('studio.index');
             Route::get('studio-create','StudioController@create')->name('studio.create');
             Route::post('studio-create','StudioController@store')->name('studio.store');
             Route::get('studio-edit/{id}','StudioController@edit')->name('studio.edit');
             Route::put('studio-update/{id}','StudioController@update')->name('studio.update');
             Route::delete('studio-delete/{id}','StudioController@destroy')->name('studio.delete');
             
             
 

    });
});

// Frontend Route

Route::get('/', 'App\Http\Controllers\Front\FrontendController@index');
Route::get('about', 'App\Http\Controllers\Front\FrontendController@about');
Route::get('residences', 'App\Http\Controllers\Front\FrontendController@residences');
Route::get('amenities', 'App\Http\Controllers\Front\FrontendController@amenities');
Route::get('jersey-city', 'App\Http\Controllers\Front\FrontendController@jerseycity');
Route::get('project', 'App\Http\Controllers\Front\FrontendController@project');
Route::get('contact', 'App\Http\Controllers\Front\FrontendController@contact');


Route::post('contact-us', 'App\Http\Controllers\ContactController@store')->name('contact.us.store');
