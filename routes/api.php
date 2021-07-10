<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
Route::group(['middleware'=>['api'],'namespace'=>'user'],function (){

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh',function (){
        return \Auth::user();
    });


});

Route::group(['middleware'=>'api' , "namespace"=>"API"],function (){

    Route::post('store', 'BlogController@store');
    Route::post('update/{id}', 'BlogController@update');
    Route::get('view', 'BlogController@view');
    Route::get('index', 'BlogController@index');

});
