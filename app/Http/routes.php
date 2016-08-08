<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('terceros','TerceroController');

Route::group(['middleware'=>['auth','alumnos'],'prefix'=>'alumnos'],function(){

        Route::get('/',function (){

            return view('terceros.inndex');
    });

});

Route::group(['middleware'=>['auth','director'],'prefix'=>'director'],function(){
    Route::get('/',function (){

        return view('terceros.create');
    });
});