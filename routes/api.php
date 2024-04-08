<?php

use App\Http\Controllers\StudentApiController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/test", [TestController::class,'first']);
Route::post('/login', [TestController::class,'login']);

//Student routes

Route::post('/addstu', [StudentApiController::class,'addstud']);

Route::get('/getstu', [StudentApiController::class,'getstud']);
Route::get('/getstu/{id}', [StudentApiController::class,'getstud']);
Route::post('/updatestud/{id}', [StudentApiController::class,'updatestud']);
Route::post('/deletestud/{id}', [StudentApiController::class,'deletestud']);
