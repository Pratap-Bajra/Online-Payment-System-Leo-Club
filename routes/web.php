<?php

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
    return view('welcome');
});

Route::get('home','App\Http\Controllers\HomeController@index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ----------------------------------------------------FrontEnd Routes Strats Here---------------------------------------------------------


    Route::group(['namespace'=>'App\Http\Controllers\Frontend'],function()
    {
        Route::get('/','FrontEndController@home')->name('home');
        Route::get('/join-lions','FrontEndController@joinLions')->name('join.lions');

        Route::put('/register/member','FrontEndController@registerMember')->name('join.store');

        Route::get('/about us','FrontEndController@aboutUs')->name('aboutus');

        Route::get('/services','FrontEndController@services')->name('services');

        Route::get('/news','FrontEndController@news')->name('news');

        Route::get('/contact','FrontEndController@contact')->name('contact');

        Route::get('/member-teams','FrontEndController@teams')->name('teams');

        Route::get('/member-teams/{slug}','FrontEndController@newsDetails')->name('news-detail');

        Route::get('/work-detail/{slug}','FrontEndController@workdetail')->name('work-detail');

        Route::put('/contact-message','FrontEndController@saveMessage')->name('contact.message');

        

    });



// ----------------------------------------------------FrontEnd Routes Ends Here---------------------------------------------------------






// ----------------------------------------------------BackEnd Routes Starts Here--------------------------------------------------

    Route::group(['namespace'=>'App\Http\Controllers','middleware'=>'auth'],function()
    {

        // ------------------------------------------Super Admin Routes Starts Here-----------------------------------

        Route::group(['prefix'=>'admin','middleware'=>'admin'],function()
        {
            Route::get('','HomeController@admin')->name('admin');

            Route::resource('/banner','Admin\Banner\BannerController');

            Route::resource('/news','Admin\News\NewsController');

            Route::resource('/testimonial','Admin\Testimonial\TestimonialController');

            Route::resource('/member','Admin\Member\MemberController');

            Route::resource('/aboutus','Admin\AboutUs\AboutUsController');

            Route::resource('/project','Admin\Project\ProjectController');

            Route::put('/user/update-profile/{id}','UserController@updateProfile')->name('user.updateProfile');
            Route::put('/user/update-password/{id}','UserController@updatePassword')->name('user.update-password');

            Route::get('/all-Member-List','Admin\Member\MemberController@allMember')->name('member.getAllMemberList');
            Route::delete('/delete/{id}','Admin\Member\MemberController@deleteMember')->name('user-member.destroy');
        });
        // ------------------------------------------Super Admin Routes Ends Here-----------------------------------


        // ------------------------------------------Member  Routes Starts Here-----------------------------------

            Route::group(['prefix'=>'member','middleware'=>'member'],function()
                {
                    Route::get('','HomeController@member')->name('member');
                    Route::put('/user/update-profile/{id}','UserController@updateProfile')->name('user.updateProfile');
                    Route::put('/user/update-password/{id}','UserController@updatePassword')->name('user.update-password');
                });
        // ------------------------------------------Member  Routes Ends Here-----------------------------------


        // ------------------------------------------Viewer Routes Starts Here-----------------------------------

            Route::group(['prefix'=>'viewer','middleware'=>'viewer'],function()
                {
                    Route::get('','HomeController@viewer')->name('viewer');
                });
        // ------------------------------------------Viewer Routes Ends Here-----------------------------------

        Route::post('ckeditor', 'CkeditorFileUploadController@store')->name('ckeditor.upload');

    });


            


// ----------------------------------------------------BackEnd Routes Ends Here--------------------------------------------------
