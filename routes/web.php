<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/imprint', 'imprint')
     ->name('imprint');

Route::get('/store/{id}', [StoreController::class, 'renderStore'])
     ->name('store');

Route::get('/sitemap', [HomeController::class, 'renderSitemap']);
