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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index');
Route::get('/create', 'ProductController@create')->middleware('auth')->middleware('CheckRole');
Route::post('/create', 'ProductController@store')->middleware('auth')->middleware('CheckRole');
Route::get('/productshow/{product}', 'ProductController@show');
Route::get('/search', 'ProductController@search');

// Route::get('/user', 'UserController@show');
// Route::post('/user', 'UserController@update');

Route::get('/user/{id}', 'UserController@edit');
Route::post('/user/{id}', 'UserController@update');

Route::get('/diet/{diet}', 'DietController@show');
Route::get('/diets', 'DietController@showdiets');

Route::get('/attribute/{attribute}', 'AttributeController@show');
Route::get('/attributes', 'AttributeController@showattributes');

Route::get('/category/{category}', 'CategoryController@show');
Route::get('/categories', 'CategoryController@showcategories');

Route::get('/createAt', 'AttributeController@create')->middleware('auth')->middleware('CheckRole');
Route::post('/createAt', 'AttributeController@store')->middleware('auth')->middleware('CheckRole');

Route::get('/createDiet', 'DietController@create')->middleware('auth')->middleware('CheckRole');
Route::post('/createDiet', 'DietController@store')->middleware('auth')->middleware('CheckRole');

Route::get('/createCat', 'CategoryController@create')->middleware('auth')->middleware('CheckRole');
Route::post('/createCat', 'CategoryController@store')->middleware('auth')->middleware('CheckRole');

Route::get('/cart', 'CartController@show')->middleware('auth');
Route::get('/product/buycart/{id}', 'CartController@store2')->middleware('auth');
Route::post('/cart/{id}', 'CartController@update')->middleware('auth');;
Route::delete('/cart/{id}', 'CartController@destroy')->middleware('auth');;
Route::get('/product/addtocart/{id}', 'CartController@store')->middleware('auth');
Route::get('/purchase', 'CartController@showforpurchase')->middleware('auth');
Route::get('/cartfinish', 'CartController@destroycart')->middleware('auth');
