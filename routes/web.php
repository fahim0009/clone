<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\Admin\VisaController as AdminVisaController;

Route::get('/', function () {
    return redirect('/admin/login');
});


Route::get('/visa-view/{id}', [VisaController::class, 'viewVisa']);
Route::get('/Home/GetPrintFromQRCode', [VisaController::class,'qrView']);
Route::get('/admin/login', [AuthController::class, 'loginForm']);
Route::post('/admin/login', [AuthController::class, 'login']);
Route::get('/admin/logout', [AuthController::class, 'logout']);

Route::middleware('admin')->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('visas', AdminVisaController::class);

});