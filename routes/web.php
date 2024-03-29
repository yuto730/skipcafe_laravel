<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsInformationController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function() {
    return view('index');
});

Route::get('/news', [NewsController::class, 'newsList']);
Route::get('/news-information', [NewsInformationController::class, 'newsInformation']);
Route::get('/access', [AccessController::class, 'access']);
Route::get('/contact', [ContactController::class, 'contact']);