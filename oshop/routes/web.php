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


Route::get('/login', function (){
   return view('login');
});

Route::post('/login', 'UserController@login');

Route::get('/register', [
    'as'=>'getregister',
    'uses'=>'UserController@getregister'
]);

Route::post('/register', [
    'as'=>'postregister',
    'uses'=>'UserController@postregister'
]);

Route::get('/addproduct', 'ProductController@addproduct');

Route::post('/addproduct', [
    'as'=>'addproduct',
    'uses'=>'ProductController@addproduct'
]);

Route::get('/allproduct', [
    'as'=>'getallproduct',
    'uses'=>'ProductController@getproduct'
]);

Route::get('/edit/{proid}', [
    'as'=>'edit',
    'uses'=>'ProductController@editproduct'
]);

Route::post('/edit/{proid}', [
    'as'=>'updateproduct',
    'uses'=>'ProductController@updateproduct'
]);



