<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use  Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    return view('index');
});
Route::get('/negocios', function () {
    return view('negocios');
});
Route::get('/franquicia', function () {
    return view('franquicia');
});
Route::get('/responsabilidad-social', function () {
    return view('responsabilidad-social');
});
Route::get('/unete-a-la-famila-nicxa', function () {
    return view('bolsa-de-trabajo');
});



Route::get('/promociones-nicxa', function () {
    return view('promociones');
});

Route::post('/enviar', [SistemaController::class,'store'])->name('enviar');

Route::get('/tankcupon', function () {
    return view('pdf');
});
Route::get('/bolsa-de-trabajo', function () {
    return view('cultura-nicxa');
});



/*
Route::get('/descargar/{nombre}/{cupon}', function ($nombre,$cupon) {
    $datos = ['nombre' => $nombre, 'cupon' => $cupon];
    view()->share('datos', $datos);
    $pdf = PDF::loadView('cuponpdf', ['datos'=> $datos]);
    return $pdf->download('bgcupon.pdf');
})->name('descargar');

Route::get('/test_cupones', [SistemaController::class,'factory_test']);
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/facebook', function () {
    return redirect('https://www.facebook.com/GrupoNicxa');
});

// Rutas BBK
Route::get('/bbk-santa-elena', function () {
    return view('sucursales.bbk-santa-elena');
});
Route::get('/bbk-diana-cazadora', function () {
    return view('sucursales.bbk-diana-cazadora');
});
Route::get('/bbk-sendero-vhsa', function () {
    return view('sucursales.bbk-sendero-vhsa');
});
Route::get('/bbk-tuxtla', function () {
    return view('sucursales.bbk-tuxtla');
});
Route::get('/bbk-malecon-americas', function () {
    return view('sucursales.bbk-malecon-americas');
});
Route::get('/bbk-tizimin', function () {
    return view('sucursales.bbk-tizimin');
});

// Rutas KFC
Route::get('/kfc-oriente', function () {
    return view('sucursales.kfc-oriente');
});
Route::get('/kfc-chetum', function () {
    return view('sucursales.kfc-chetum');
});
Route::get('/kfc-labna', function () {
    return view('sucursales.kfc-labna');
});
Route::get('/kfc-gp-cun', function () {
    return view('sucursales.kfc-gp-cun');
});
Route::get('/kfc-malecon', function () {
    return view('sucursales.kfc-malecon');
});

//Rutas PH
Route::get('/ph-oriente', function () {
    return view('sucursales.ph-oriente');
});
