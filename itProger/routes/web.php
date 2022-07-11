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
//Route::get('/about',"App\Http\Controllers\Comment@about");
Route::get('/review',"App\Http\Controllers\Comment@review")->name('review');
Route::post('/review/check',"App\Http\Controllers\Comment@review_check");
Route::get('/auth',"App\Http\Controllers\Comment@auth");
Route::get('/add_news',"App\Http\Controllers\NewsController@add_news");
Route::post('/news/save',"App\Http\Controllers\NewsController@save_news");
Route::get('/article',"App\Http\Controllers\NewsController@article")->name('post');




//Route::get('/article',"App\Http\Controllers\NewsController@article")->name('post');
//Route::get('/article/{id}',"App\Http\Controllers\NewsController@article");

