<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\PostController;
use \App\Http\Controllers\FormController;
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

/* Route to a function */
Route::get('/', function () {
    return view('welcome');
});

/* Route to a Controller */
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{index}', [PostController::class, 'show']);

/* Route to different routing methods */
Route::get('/form', [FormController::class, 'index']);

Route::post('/form', function(){
    echo 'POSTED';
});

Route::put('/form', function(){
    echo 'PUTTED';
});

Route::delete('/form', function(){
    echo 'DELETED';
});
