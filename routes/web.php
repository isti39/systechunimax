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
    return view('welcome');
});
Route::get('/systechunimax', 'userController@index')->name('systechunimax');
Route::post('/admin/contact', 'contactController@store');
Route::post('/admin/subscriber', 'subscriberController@store');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('/admin/general','generalController')->middleware('auth');
Route::resource('/admin/image','imageController')->middleware('auth');
Route::resource('/admin/service','serviceController')->middleware('auth');
Route::resource('/admin/testimonial','testimonialController')->middleware('auth');
// Route::get('/admin/contact','contactController')->middleware('auth');
Route::resource('/admin/contact', 'contactController')
        ->except(['store'])->middleware('auth');
Route::resource('/admin/subscriber','subscriberController')
        ->except(['store'])->middleware('auth');   

 //Route::post('/systechunimax', 'userController@index');

