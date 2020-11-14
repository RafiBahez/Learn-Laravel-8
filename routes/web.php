<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CustomerController;
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

/* Route to a controller with different method and a parameter */
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);

/* Route to a resource controller */
Route::resource('customers', CustomerController::class);