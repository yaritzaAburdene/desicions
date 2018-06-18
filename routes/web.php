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

Route::get('/', function () {
    return view('login');
});

Route::get('/hello', function () {
    return 'hello world!';
});
//    nom de la ruta  nomcontrolador     nom de funció
//				|			|				|
//Route::get('/hello', 'HelloController@showHello');

//AUTH ROUTES
Route::get('/register', 'AuthController@showRegistre');
Route::get('/login', 'AuthController@showLogin');
Route::post('/login', 'AuthController@postLogin');
Route::post('/register', 'AuthController@postRegistre');

//INDEX ROUTE
Route::get('/index', 'HomeController@showIndex');