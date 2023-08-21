<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/customer", [CustomerController::class, 'index']);
Route::post('/customer/create', [CustomerController::class, 'store']);
Route::put('/customer/update/{id}', [CustomerController::class, 'update']);
Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy']);


