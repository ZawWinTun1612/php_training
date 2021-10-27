<?php

use App\Http\Controllers\Task\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

Route::get('/', [TaskController::class, 'getTask']);
Route::post('/task', [TaskController::class, 'addTask']);
Route::delete('/task/{id}', [TaskController::class, 'deleteTask']);
?>