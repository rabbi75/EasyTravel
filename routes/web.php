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

Route::get('/', [PagesController::class,'index'])->name('index');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::get('/event', function () {
    return view('frontend.pages.event');
})->name('event');
