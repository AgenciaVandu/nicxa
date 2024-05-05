<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use App\Models\View;
use Illuminate\Http\Request;
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
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('index');
});
Route::get('/negocios', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('negocios');
});
Route::get('/franquicia', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('franquicia');
});
Route::get('/responsabilidad-social', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('responsabilidad-social');
});
Route::get('/unete-a-la-famila-nicxa', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('bolsa-de-trabajo');
});


/*
Route::get('/promociones-nicxa', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('promociones');
}); */

Route::post('/enviar', [SistemaController::class,'store'])->name('enviar');

Route::get('/tankcupon', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('pdf');
});
Route::get('/bolsa-de-trabajo', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('cultura-nicxa');
});
Route::post('/enviando', [SistemaController::class,'rhNicxa'])->name('rhnicxa');
Route::get('/gracias', function(){
    return view('gracias');
})->name('gracias');

/*
Route::get('/descargar/{nombre}/{cupon}', function ($nombre,$cupon) {
    $datos = ['nombre' => $nombre, 'cupon' => $cupon];
    view()->share('datos', $datos);
    $pdf = PDF::loadView('cuponpdf', ['datos'=> $datos]);
    return $pdf->download('bgcupon.pdf');
})->name('descargar');

Route::get('/test_cupones', [SistemaController::class,'factory_test']);
*/

Route::get('/facebook', function () {
    return redirect('https://www.facebook.com/GrupoNicxa');
});

// Rutas LBO
Route::get('/lbo-centro', function () {
    return view('sucursales.lbo-centro');
});
Route::get('/lbo-clinica', function () {
    return view('sucursales.lbo-clinica');
});
Route::get('/lbo-norte', function () {
    return view('sucursales.lbo-norte');
});

// Rutas BBK
Route::get('/bbk-santa-elena', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.bbk-santa-elena');
});
Route::get('/bbk-diana-cazadora', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.bbk-diana-cazadora');
});
Route::get('/bbk-sendero-vhsa', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.bbk-sendero-vhsa');
});
Route::get('/bbk-tuxtla', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.bbk-tuxtla');
});
Route::get('/bbk-malecon-americas', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.bbk-malecon-americas');
});
Route::get('/bbk-tizimin', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.bbk-tizimin');
});

// Rutas KFC
Route::get('/kfc-oriente', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.kfc-oriente');
});
Route::get('/kfc-chetum', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.kfc-chetum');
});
Route::get('/kfc-labna', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.kfc-labna');
});
Route::get('/kfc-gp-cun', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.kfc-gp-cun');
});
Route::get('/kfc-malecon', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.kfc-malecon');
});

//Rutas PH
Route::get('/ph-oriente', function (Request $request) {
    $view = View::where('ip', $request->ip())->where('session_id', $request->session()->getId())->where('url',$request->fullUrl())->first();
    if (!$view) {
        View::create([
            'ip' => $request->ip(),
            'url' => $request->fullUrl(),
            'session_id' => $request->session()->getId(),
            'browser' => $request->header('User-Agent'),
        ]);
    }
    return view('sucursales.ph-oriente');
});


// CAMPAÑA el buzón de santa

//Route::get('/el-buzon-de-santa', function () {
//    return view('navidad');
//});

// ENDCAMPAÑA el buzon de santa

// moms in shape

Route::get('/moms-get-in-shape', function () {
   return view('moms');
});

// END CAMPAÑA



// Ruta mundial

//Route::get('/beach-on-tour-cupones', function () {
//    return view('beachontour');
//});
//Route::get('/beach-on-tour-cupones-geo', function () {
//    return view('sucursales.beach-cupones-geo');
// });
// Route::get('/beach-on-tour', function () {
//     return view('beachontour-landing');
// });
// Route::get('/beach-on-tour-geo', function () {
    return view('sucursales.beach-landing-geo');
// });

// Ruta navidad
// Route::get('/buzon-de-santa', function () {
//
 return view('buzons');
// });
