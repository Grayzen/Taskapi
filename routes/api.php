<?php

use App\Http\Controllers\Api\v1\TaskController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('v1/create', [TaskController::class, 'create']);
Route::post('v1/addcondition', [TaskController::class, 'addcondition']);
Route::get('v1/list', [TaskController::class, 'list']);
Route::get('v1/listorder', [TaskController::class, 'listorder']);
Route::post('v1/done/{task}', [TaskController::class, 'done']);
