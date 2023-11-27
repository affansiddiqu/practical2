<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\affan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(affan ::class)->group(function () {
    Route::get('/','home')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/service','service')->name('service');
    Route::get('/menu','menu')->name('menu');
    Route::get('/book','book')->name('book');
    Route::get('/team','team')->name('team');
    Route::get('/test','test')->name('test');
    Route::get('/contact','contact')->name('contact');
});
