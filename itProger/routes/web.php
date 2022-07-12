<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',"App\Http\Controllers\Comment@home")->name('post');
Route::get('/review',"App\Http\Controllers\Comment@review")->name('review');
Route::post('/review/check',"App\Http\Controllers\Comment@review_check");
Route::get('/auth',"App\Http\Controllers\Comment@auth");
Route::get('/add',"App\Http\Controllers\NewsController@index");
Route::post('/news/save',"App\Http\Controllers\NewsController@create");
Route::get('/article',"App\Http\Controllers\NewsController@article")->name('post');

Route::post('/news/update',"App\Http\Controllers\NewsController@update");




//Route::get('/article',"App\Http\Controllers\NewsController@article")->name('post');
//Route::get('/article/{id}',"App\Http\Controllers\NewsController@article");

