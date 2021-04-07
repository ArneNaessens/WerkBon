<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ClientController;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Clients API
Route::get('clients', [ClientController::class, 'index']);
Route::get('clients/{id}', [ClientController::class, 'show']);
Route::put('clients/{id}', [ClientController::class, 'update']);
Route::post('clients', [ClientController::class, 'create']);
Route::delete('clients/{id}', [ClientController::class, 'destroy']);

// Addresses API
Route::get('addresses', [AddressController::class, 'index']);
Route::get('addresses/{id}', [AddressController::class, 'show']);
Route::put('addresses/{id}', [AddressController::class, 'update']);
Route::post('addresses', [AddressController::class, 'create']);
Route::delete('addresses/{id}', [AddressController::class, 'destroy']);
