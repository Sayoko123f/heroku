<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
    // return view('welcome');
});

Route::get('/test',function(){
    return view('test');
})->name('test');

Route::prefix('image')->group(function () {
    Route::get('/', [App\Http\Controllers\ImageController::class, 'view'])->name('image');
    Route::post('upload', [App\Http\Controllers\ImageController::class, 'upload'])->name('image-upload');
});

Route::prefix('jszip')->group(function(){
    Route::get('/',function(){
        return view('jszip.jszip');
    })->name('jszip');
});

Route::prefix('game')->group(function(){
    Route::get('guess-number',function(){
        return view('game.guess-number');
    })->name('guess-number');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
