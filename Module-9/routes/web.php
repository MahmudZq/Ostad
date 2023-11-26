<?php

use App\Http\Controllers\HomeController;
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

/*-- Route for Home page --*/
Route::get('/', [HomeController::class, 'index']);

/*-- Route for Home page --*/
Route::get('/About', [HomeController::class, 'about']);

/*-- Route for Home page --*/
Route::get('/Resume', [HomeController::class, 'resume']);

/*-- Route for Home page --*/
Route::get('/Projects', [HomeController::class, 'projects']);

/*-- Route for Home page --*/
Route::get('/Contact', [HomeController::class, 'contact']);
