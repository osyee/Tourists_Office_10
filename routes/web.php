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
Route::get("/", function () {
    return view('welcome');
});
Route::get("/add/book", [App\Http\Controllers\BookingController::class,'create']);
Route::post("/create/book", [App\Http\Controllers\BookingController::class,'store'])->name('create-book');
Route::get("/add/booksview", [App\Http\Controllers\BookingController::class,'index']);
Route::get("/add/bookview/{id}", [App\Http\Controllers\BookingController::class,'show']);
Route::get("/add/bookedit/{id}", [App\Http\Controllers\BookingController::class,'edit']);
Route::post("/update/book/{id}", [App\Http\Controllers\BookingController::class,'update'])->name('update-book');
Auth::routes();
Route::get("home", [App\Http\Controllers\HomeController::class, "index"]);