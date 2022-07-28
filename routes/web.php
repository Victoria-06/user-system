<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/',[UserController::class , 'welcome']);
Route::get('/Users',[UserController::class , 'GetUser']);
Route::get('/Edituser/{id}',[UserController::class , 'EditUser']);
Route::post('/update/{id}',[UserController::class , 'update']);
Route::get('/createuser',[UserController::class , 'create']);
Route::post('/createuser',[UserController::class , 'createuser']);
Route::get('/deleteuser/{id}',[UserController::class , 'destroy']);