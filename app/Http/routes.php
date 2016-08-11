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
Route::resource('alumno','AlumnoController');
Route::resource('decano','DirectorController');
Route::resource('docente','ProfesorController');

Route::group(['middleware'=>['auth','alumnos'],'prefix'=>'alumnos'],function(){

        Route::get('/',function (){

            return view('alumno.index');
    });

});

Route::group(['middleware'=>['auth','director'],'prefix'=>'director'],function(){
    Route::get('/',function (){

        return view('director.index');
    });
});

Route::group(['middleware'=>['auth','profesor'],'prefix'=>'profesor'],function(){
    Route::get('/',function (){

        return view('profesor.index');
    });
});