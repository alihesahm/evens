<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\secuirityController;
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


// Route::get('/add/id',[AuthController::class,'getneighborhood']);
// Route::get('secuirity/QRcode/checkqrcdoe/{id}', [secuirityController::class, 'checkqr']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(secuirityController::class)->group(function () {
    Route::get('/secuirity/QRcode/checkqrcdoe','check')->name('secuiriy.qrcode.check');
    Route::get('secuirity/QRcode/checkqrcdoe/xx','x')->name('secuiriy.qrcode.check.id');
    // Route::get('secuirity/QRcode/checkqrcdoe/{id}', [secuirityController::class, 'checkqr']);

});
