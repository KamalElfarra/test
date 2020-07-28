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

 Route::get('/wel', function () {
     return view('welcome');
 });


// Route::prefix('contact')->group(function () {

//     Route::get('/view_data','sitecontroller@view');


// });


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get("/logout" , 'Auth\LoginController@logout');



Route::prefix('')->group(function () {

    Route::get('/panel_d','panelcontroller@index');

});



Route::prefix('blog')->group(function () {

    Route::get('/create','BlogController@create');
    Route::get('/view','BlogController@view');
    Route::get('/site','BlogController@index');
    Route::post('/store','BlogController@store');
    Route::get('/{slug}', 'BlogController@showPost');
    Route::get('/edit/{id}', 'BlogController@edit');
    Route::post('/update/{id}', 'BlogController@update');
    Route::get('/delete/{id}', 'BlogController@destroy');

});



Route::prefix('user')->group(function () {

    Route::get('/view','panelcontroller@view');
    Route::get('/delete/{id}','panelcontroller@destroy');
    Route::get('/edit/{id}','panelcontroller@edit');
    Route::post('/update/{id}','panelcontroller@update');

});



Route::group(['prefix' => ''], function () {

    Route::get('/','sitecontroller@index');
    Route::any('/search','sitecontroller@search');
    Route::get('/download', 'sitecontroller@index');

});






Route::prefix('post')->group(function () {

    Route::any('/search','PostController@search');
    Route::get('/index','PostController@index');
    Route::get('/view_data','PostController@view');
    Route::any('/store','PostController@store');
    Route::get('/delete/{id}','PostController@destroy');
    Route::get('/edit/{id}','PostController@edit');
    Route::post('/update/{id}','PostController@update');

});

Route::prefix('contact')->group(function () {

    Route::get('/view','sitecontroller@view');
    Route::get('/delete/{id}','sitecontroller@destroy');
    Route::any('/store', 'sitecontroller@store');

});

Route::prefix('contactpersonal')->group(function () {

    Route::get('/index','Contact_personal_c@index');
    Route::get('/create','Contact_personal_c@create');
    Route::any('/store', 'Contact_personal_c@store');

});


Route::prefix('setting')->group(function () {

    Route::get('/create','settingcontroller@view');
    Route::any('/store','settingcontroller@store');

});


Route::prefix('download')->group(function () {

    Route::get('/index','FileController@index');
    Route::get('/view_data','FileController@view');
    Route::any('/store','FileController@store');
    Route::get('/delete','FileController@destroy');
    Route::get('/edit/{id}','FileController@edit');
    Route::post('/update/{id}','FileController@update');


});


// Route::get('/download', 'FileController@file');


Route::prefix('category')->group(function () {

    Route::get('/create','CategoryController@create');
    Route::get('/index','CategoryController@index');
    Route::Post('/store','CategoryController@store');
    Route::get('/delete/{id}','CategoryController@destroy');
    Route::get('/edit/{id}','CategoryController@edit');
    Route::post('/update/{id}','CategoryController@update');


});
