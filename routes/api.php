<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/task-one', [TaskController::class, 'taskOne']);
Route::get('/task-tow', [TaskController::class, 'taskTow']);
Route::get('/task-three', [TaskController::class, 'taskThree']);
Route::get('/task-four', [TaskController::class, 'taskFour']);