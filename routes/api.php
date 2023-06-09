<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BurguerController;
use Illuminate\Http\Request;
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

Route::post('/login', [ AuthController::class, 'login' ]);
Route::post('/register', [ AuthController::class, 'register' ]);

Route::get('/burguerIngredients', [ BurguerController::class, 'burguerIngredients' ]);
Route::get('/burguerStatus', [ BurguerController::class, 'burguerStatus' ]);
Route::post('/burguerCreate', [ BurguerController::class, 'burguerCreate' ]);
Route::get('/burguerAll', [ BurguerController::class, 'burguerAll' ]);
Route::delete('/burguerDelete/{id}', [ BurguerController::class, 'burguerDelete' ]);
Route::patch('/burguerUpdate/{id}', [ BurguerController::class, 'burguerUpdate' ]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
