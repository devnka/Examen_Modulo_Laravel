<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ColaboradorController;
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

Route::prefix('colaborador')->group(function () {
    Route::get('/',[ ColaboradorController::class, 'getAll']);
    Route::post('/',[ ColaboradorController::class, 'create']);
    Route::delete('/{id}',[ ColaboradorController::class, 'delete']);
    Route::get('/{id}',[ ColaboradorController::class, 'get']);
    Route::put('/{id}',[ ColaboradorController::class, 'update']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
