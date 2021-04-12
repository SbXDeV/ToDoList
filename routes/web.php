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
/*
Route::get('/', function () {
    return view('to-do');
})->name('home');
*/

Route::get('add', function () {
    return view('to-do-add');
})->name('add');

Route::get('/', 'App\Http\Controllers\ToDoController@home')->name('home');
Route::get('delete/{id}', 'App\Http\Controllers\ToDoController@DeleteTodo')->name('delete_post');
Route::post('add/submit','App\Http\Controllers\ToDoController@submit')->name('contact-form');
