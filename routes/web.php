<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frnwebsite\HomeController;
use App\Http\Controllers\frnwebsite\AboutController;
use App\Http\Controllers\frnwebsite\ContactController;
use App\Http\Controllers\frnwebsite\ServicesController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });
// Route::get('/',['HomeController@index'] {

// });
Route::get('/',[HomeController::class , 'index']);
Route::get('/services',[ServicesController::class , 'index']);
Route::get('/about',[AboutController::class , 'index']);
Route::get('/contact',[ContactController::class , 'index']);
