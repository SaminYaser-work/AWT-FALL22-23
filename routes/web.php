<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Validate;
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
    return redirect('/home');
});

// Old syntax
// Route::get('/hello', 'PageController@home');

// New syntax
Route::get('/home', [PageController::class, 'home']);
Route::get('/home/{age}', [PageController::class, 'setAge']);

Route::get('/register', [RegController::class, 'register']);
Route::post('/doregister', [RegController::class, 'doRegistration'])
    ->middleware('validate');

Route::get('/login', [LoginController::class, 'login']);
Route::get('/loginfirst', [LoginController::class, 'loginFirst']);
Route::get('/login-new-acc', [LoginController::class, 'loginAfterReg']);
Route::post('/login', [LoginController::class, 'checkVal']);

Route::get('/profile', [ProfileController::class, 'showProfile'])
    ->middleware('checkLogin');
Route::get('/logout', [ProfileController::class, 'logout']);

Route::post('/update', [ProfileController::class, 'updateProfile']);


// For debugging, remove this in production
Route::get('/loggedin', [LoginController::class, 'showInfo']);
