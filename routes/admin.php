<?php

use App\Charts\MonthlyUsersChart;
use App\Charts\MonthlyUsersChart2;
use App\Http\Controllers\Admin\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use  Illuminate\Http\Request;


Route::get('/', function(MonthlyUsersChart $chart,MonthlyUsersChart2 $chart2) {
    return view('dashboard',[
        'chart' => $chart->build(),
        'chart2' => $chart2->build()
    ]);
});

Route::get('reports/filters/{value}',[ReportController::class,'filters'])->name('reports.filters');
Route::post('reports/filters/{value}/search',[ReportController::class,'search'])->name('reports.search');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

?>
