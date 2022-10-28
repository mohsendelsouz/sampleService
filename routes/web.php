<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
//     return view('welcome');
// });
Route::get('/',[MainController::class,'index'])->name('index');
Route::controller(MainController::class)->middleware('auth')->group(function(){
   Route::get('/dashboard','dashboard')->name('dashboard');
   Route::post('/stripe-payment','stripePayment')->name('stripePayment');
   Route::get('/testTest','testTest')->name('testTest');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
