<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user/phone', [UserController::class, 'getUsersPhone']);
Route::get('/user/company', [UserController::class, 'getUsersName']);
Route::post('/user/create', [UserController::class, 'createUser']);
Route::post('/user/update/{id}', [UserController::class, 'updateUser']);
Route::post('/user/delete/{id}', [UserController::class, 'deleteUser']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});