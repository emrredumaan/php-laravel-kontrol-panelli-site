<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::get('/',[HomeController::class,'homepage']);

Route::get('/post_page',[AdminController::class,'post_page']);

Route::post('/add_post',[AdminController::class,'add_post'])->name('add_post');

Route::get('/show_post',[AdminController::class,'show_post']);

Route::get('/delete_post/{id}',[AdminController::class,'delete_post'])->name('delete_post');


Route::get('/edit_post/{id}',[AdminController::class,'edit_post'])->name('edit_post');

Route::post('/update_post/{id}',[AdminController::class,'update_post'])->name('update_post');

Route::get('/post_details/{id}',[HomeController::class,'post_details'])->name('post_details');

Route::get('/create_post',[HomeController::class,'create_post'])->name('create_post');

