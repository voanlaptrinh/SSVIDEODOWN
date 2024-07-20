<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main.index');
});
Route::post('/search', [SearchController::class, 'search'])->name('search'); 
  Route::post('/searchtitle', [SearchController::class, 'searchTitle'])->name('searchTitle');
Route::post('/searchConvert', [SearchController::class, 'searchConvert'])->name('searchConvert');
Route::post('/searchcheckTask', [SearchController::class, 'searchCheckTask'])->name('searchcheckTask');