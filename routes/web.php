<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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


Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about']);

Route::get('/services', [\App\Http\Controllers\PagesController::class, 'services']);

Route::resource('/posts', PostsController::class);

	
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');




Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
