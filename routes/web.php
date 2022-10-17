<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegController;
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
    // return view('welcome');
    return redirect('/home');
});

// Old method
// Route::get('/hello', 'PageController@home');

// New method
Route::get('/home', [PageController::class, 'home']);

Route::get('/home/{age}', [PageController::class, 'setAge']);

Route::get('/register', [RegController::class, 'register']);

Route::get('/login', [LoginController::class, 'login']);

Route::post('/login', [LoginController::class, 'checkLogin']);

Route::post('/doregister', [RegController::class, 'doRegistration']);
