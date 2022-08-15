<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index(){
        //Obtener los registros de la tabla views y agrupar por url y numero de veces que se repite
        $views = DB::table('views')->select(DB::raw('url, count(*) as total'))->groupBy('url')->orderBy('total')->get();
        return view('admin.views.index', compact('views'));
    }
}
