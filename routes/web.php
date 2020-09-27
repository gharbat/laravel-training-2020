<?php

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


Route::get("/", [\App\Http\Controllers\PostController::class, "index"]);
Route::get("/delete/{id}", [\App\Http\Controllers\PostController::class, "delete"]);
Route::get("/view/{id}", [\App\Http\Controllers\PostController::class, "show"]);

Route::get("/bootstrap", [\App\Http\Controllers\PostController::class, "bootstrap"]);

Route::get("/add", [\App\Http\Controllers\PostController::class, "add"]); // form (view)
Route::post("/add", [\App\Http\Controllers\PostController::class, "insert"]); // add data
