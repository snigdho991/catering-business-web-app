<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::post('/selected-services', [ApiController::class, 'selected_services'])->name('service.array.byId');
Route::post('/selected-service-type', [ApiController::class, 'selected_service_type'])->name('service.type.byId');

Route::post('/theme-items', [ApiController::class, 'theme_items'])->name('theme.items.array');
Route::post('/theme-layouts', [ApiController::class, 'theme_layouts_by_type'])->name('theme.layouts.array');

