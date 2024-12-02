<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public routes for reporting and tracking
Route::get('/', [ReportController::class, 'dashboard']);
Route::get('/laporkan/{type}', [ReportController::class, 'createForm']);
Route::post('/laporkan', [ReportController::class, 'store']);
Route::get('/track', [ReportController::class, 'trackForm'])->name('trackForm');
Route::post('/track', [ReportController::class, 'track']);
Route::post('/track-result', [ReportController::class, 'trackResult'])->name('track.result');
Route::get('/laporan-sukses', [ReportController::class, 'success'])->name('report.success');

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index'); 
    // Admin report details
    Route::get('/{id}', [AdminController::class, 'show'])->name('admin.show'); 
    
    // Update report status
    Route::post('/{id}/update', [AdminController::class, 'update'])->name('admin.update'); 
    Route::post('/logout/', [AdminController::class, 'logout'])->name('admin.logout');
});

