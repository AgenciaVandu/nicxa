<?php

use App\Charts\MonthlyUsersChart;
use App\Charts\MonthlyUsersChart2;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use  Illuminate\Http\Request;


Route::get('/', [ReportController::class,'dashboard'])->name('dashboard');

Route::get('reports/filters/{value}',[ReportController::class,'filters'])->name('reports.filters');
Route::post('reports/filters/{value}/search',[ReportController::class,'search'])->name('reports.search');

Route::get('export/coupons/{start_date}/{end_date}/{franchise}',[ReportController::class,'exportTotalCoupon'])->name('export.coupons');
Route::get('export/clients/{start_date}/{end_date}/{client_id}',[ReportController::class,'exportCouponClients'])->name('export.coupons.clients');
Route::get('export/states/{start_date}/{end_date}/{state}',[ReportController::class,'exportCouponState'])->name('export.coupons.states');

Route::get('/views',[ViewController::class,'index'])->name('views.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [ReportController::class,'dashboard'])->name('dashboard');
});

?>
