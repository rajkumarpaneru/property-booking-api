<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', App\Http\Controllers\Auth\RegisterController::class);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('owner/properties',
        [\App\Http\Controllers\Owner\PropertyController::class, 'index']);

    Route::post('owner/properties',
        [\App\Http\Controllers\Owner\PropertyController::class, 'store']);

    Route::get('user/bookings',
        [\App\Http\Controllers\User\BookingController::class, 'index']);
});

Route::get('search', \App\Http\Controllers\User\PropertySearchController::class);

Route::get('properties/{property}',
    \App\Http\Controllers\User\PropertyController::class);

Route::get('apartments/{apartment}',
    \App\Http\Controllers\User\ApartmentController::class);

Route::prefix('owner')->group(function () {
    Route::post('properties/{property}/photos',
        [\App\Http\Controllers\Owner\PropertyPhotoController::class, 'store']);

    Route::post('properties/{property}/photos/{photo}/reorder/{newPosition}',
        [\App\Http\Controllers\Owner\PropertyPhotoController::class, 'reorder']);
});
