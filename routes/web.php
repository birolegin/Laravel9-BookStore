<?php

use App\Http\Controllers\HomeController;
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
// 1-Do something in route

Route::get('/hello', function () {
    return 'Hello World';
});

// 2-Call view in route

Route::get('/', function () {
    return view('welcome');
});

// 3-Call Controller Function
Route::get('/index',[HomeController::class,'index'])->name('index');

// 4-Route -> Controller -> View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5-Route with parameters
Route::get('/parameter/{id}/{id2}',[HomeController::class,'parameter'])->name('parameter');

// 6-Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
