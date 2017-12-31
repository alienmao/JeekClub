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

Route::get('/mirror',function () {
    return view('mirror');
});

Route::prefix('dp')->group(function () {
    Route::get('/', function () {
     return view('dp/index');
    });
    Route::get('/course','CourseController@list');
    Route::get('/course/{id}','CourseController@get_by_id');
    Route::get('/course/t/{teacher}','CourseController@list_by_teacher');
});

Route::prefix('homework')->group(function () {
   Route::get('/',function () {
       return view('hw/index');
   });
   Route::get('/list',function () {
      return view('hw/list');
   });
});

Route::prefix('blog')->group(function () {
    Route::get('/','BlogController@index');
    Route::get('/list','BlogContoller@list');
    Route::get('/add','BlogController@add');
    Route::get('/update','BlogController@update');
    Route::get('/delete','BlogController@delete');
});

Route::prefix('jae')->group(function () {
    Route::get('/','JAEController@index');
});