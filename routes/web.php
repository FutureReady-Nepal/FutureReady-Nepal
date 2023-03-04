<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frnwebsite\HomeController;
use App\Http\Controllers\frnwebsite\AboutController;
use App\Http\Controllers\frnwebsite\ContactController;
use App\Http\Controllers\frnwebsite\ServicesController;
use App\Http\Controllers\frnwebsite\Service1Controller;
use App\Http\Controllers\frnwebsite\Service2Controller;
use App\Http\Controllers\frnwebsite\Service3Controller;
use App\Http\Controllers\frnwebsite\Service4Controller;
use App\Http\Controllers\frnwebsite\Service5Controller;
use App\Http\Controllers\frnwebsite\Service6Controller;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Home1Controller;

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
Route::get('/service1',[Service1Controller::class , 'index']);
Route::get('/service2',[Service2Controller::class , 'index']);
Route::get('/service3',[Service3Controller::class , 'index']);
Route::get('/service4',[Service4Controller::class , 'index']);
Route::get('/service5',[Service5Controller::class , 'index']);
Route::get('/service6',[Service6Controller::class , 'index']);
Route::get('/about',[AboutController::class , 'index']);
Route::get('/contact',[ContactController::class , 'index']);

Route::prefix('admin')->middleware(['auth' , 'isAdmin'])->group(function(){
    Route::get('/dashboard',[DashboardController::class , 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Home1Controller::class, 'index'])->name('home');
