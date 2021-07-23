<?php
// frontend
use App\Http\Controllers\Frontend\PagesController;

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
// Frontend route
Route::get('/', [PagesController::class,'index'])->name('index');
Route::get('/event', [PagesController::class,'event'])->name('event');
Route::get('/about', [PagesController::class,'about'])->name('about');






// Authentication route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
