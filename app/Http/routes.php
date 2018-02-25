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




Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'welcome', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('re', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);


//Route::get('/', function(){return view('principal');});
Route::get('/','AdminController@index');
//Route::get('home', 'HomeController@index');
Route::get('admin','AdminController@index');


Route::get('nuevapublicacion','AdminController@vistaformulario');
Route::get('listapublicacion','AdminController@vistalista');

Route::post('createpublicacion', 'AdminController@create');



Route::get('frmeditarpublicacion/{id}', 'AdminController@edit');

route::resource('editarpublicacion','AdminController');

Route::resource('eliminarpublicacion', 'AdminController');


Route::resource('vistapublicacion','AdminController');

Route::get('descargar_publicacion/{id}', 'PdfController@descargar_publicacion');




Route::get('publicacionsuspendido','PublicacionSuspendido@index');
Route::get('listapublicacionsuspendido','PublicacionSuspendido@lista');
Route::post('createpublicacionobservado','PublicacionSuspendido@create');
Route::get('frmeditobservado/{id}','PublicacionSuspendido@edit');
Route::resource('editarobservado','PublicacionSuspendido');
Route::resource('eliminarobservado','PublicacionSuspendido');
Route::post('verificaobservado','PublicacionSuspendido@verificaobservado');

























