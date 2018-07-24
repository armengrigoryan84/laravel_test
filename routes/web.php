<?php

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
//

 Route::get('', '\App\Http\Controllers\Auth\AuthController@getLogin');
Route::group(array(
    'prefix' => 'auth'
    ), function(){
   
    Route::get('login', '\App\Http\Controllers\Auth\AuthController@getLogin');
    Route::get('logout', '\App\Http\Controllers\Auth\AuthController@getLogout');
    Route::post('login', '\App\Http\Controllers\Auth\AuthController@postLogin');

    Route::get('registration', '\App\Http\Controllers\Auth\AuthController@getRegistration');
    Route::post('registration', '\App\Http\Controllers\Auth\AuthController@postRegistration');

});




Route::group(array(
    'middleware' => 'account'
    ), function(){
    Route::resource('account', '\App\Http\Controllers\AccountController');
    Route::post('account/file', '\App\Http\Controllers\AccountController@postFile');
    
});


