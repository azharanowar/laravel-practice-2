<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');

Route::post('new-blog', [BlogController::class, 'saveNewBlog'])->name('new-blog');
Route::post('change-publication-status', [BlogController::class, 'updatePublicationStatus'])->name('change-publication-status');
Route::post('delete-blog', [BlogController::class, 'deleteBlog'])->name('delete-blog');

Route::get('/new-category', [CategoryController::class, 'createNewCategory'])->name('create-category');
