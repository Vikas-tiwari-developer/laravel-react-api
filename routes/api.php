<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

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

Route::get('/students' , [StudentController::class, 'getAllStudent']);
Route::post('/student/new/add' , [StudentController::class, 'storeStudent']);
Route::get('/student/edit/{id}' , [StudentController::class, 'editSpecificStudent']);
Route::put('/student/update/{id}' , [StudentController::class, 'updateSpecificStudent']);
Route::delete('/student/delete/{id}' , [StudentController::class, 'deleteSpecificStudent']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
