<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ClientCouponExport;
use App\Exports\TotalCouponExport;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientCoupon;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function dashboard()
    {
        //Obtener el numero de cupones de Burger King
        $coupon_bk = ClientCoupon::whereHas('coupon', function ($query) {
            $query->where('franchise', 'Burger King');
        })->count();

        //Obtener el numero de cupones de KFC
        $coupon_kfc = ClientCoupon::whereHas('coupon', function ($query) {
            $query->where('franchise', 'KFC');
        })->count();

        //Obtener el numero de cupones de Pizza Hut
        $coupon_ph = ClientCoupon::whereHas('coupon', function ($query) {
            $query->where('franchise', 'Pizza Hut');
        })->count();

        //Obtener el numero de cupones de LBB Obregon
        $coupon_lbb = ClientCoupon::whereHas('coupon', function ($query) {
            $query->where('franchise', 'LBB Obregon');
        })->count();

        //Obtener el cupon mas repetido
        $coupon_mas_repetido = ClientCoupon::getMostRepeatedCoupon();

        //Obtener el cupon mas repetido de la franchise burger king
        $coupon_mas_repetido_bk = ClientCoupon::getMostRepeatedCouponBK();

        //Obtener el cupon mas repetido de la franchise kfc
        $coupon_mas_repetido_kfc = ClientCoupon::getMostRepeatedCouponKFC();

        //Obtener el cupon mas repetido de la franchise pizza hut
        $coupon_mas_repetido_ph = ClientCoupon::getMostRepeatedCouponPH();

        //Obtener el cupon mas repetido de la franchise LBB Obregon
        $coupon_mas_repetido_lbb = ClientCoupon::getMostRepeatedCouponLBB();

        /* //Obtener el promedio de cupones por cliente
        $promedio_cupones = ClientCoupon::getAverageCouponByClient(); */

        //Total de clientes
        $total_clientes = Client::count();

        //Total de cupones
        $total_cupones = ClientCoupon::count();

        return view('dashboard', compact('coupon_mas_repetido','coupon_kfc', 'coupon_bk', 'coupon_ph', 'coupon_lbb','coupon_mas_repetido_bk','coupon_mas_repetido_kfc','coupon_mas_repetido_ph','coupon_mas_repetido_lbb','total_clientes','total_cupones'));
    }

    public function filters($value){
        switch ($value) {
            case 'total-coupons':
                return view('admin.reports.filters.total-coupon-filter');
                break;
            case 'client-coupons':
                $clients = Client::all();
                return view('admin.reports.filters.client-coupon-filter',compact('clients'));
                break;
            case 'state-coupons':
                return view('admin.reports.filters.state-coupon-filter');
                break;
            default:
                # code...
                break;
        }
    }
    public function search($value, Request $request){
        switch ($value) {
            case 'total-coupons':
                $request->validate([
                    //que start_date sea menor que end_date
                    'start_date' => 'required|date|before:end_date',
                    'end_date' => 'required'
                ]);
                switch ($request->franchise) {
                    case 'all':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->withCount('clients')->get();
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons', 'start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'KFC':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'KFC')->withCount('clients')->get();
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons', 'start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'LBB Obregon':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'LBB Obregon')->withCount('clients')->get();
                        $start_date = $request->start_date;
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons', 'start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'Pizza Hut':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'Pizza Hut')->withCount('clients')->get();
                        $start_date = $request->start_date;
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons','start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'Burger King':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'Burger King')->withCount('clients')->get();
                        $start_date = $request->start_date;
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons','start_date', 'end_date', 'franchise', 'value'));
                        break;
                    default:
                        # code...
                        break;
                }
                break;
            case 'client-coupons':
                    $request->validate([
                        //que start_date sea menor que end_date
                        'start_date' => 'required|date|before:end_date',
                        'end_date' => 'required'
                    ]);
                    $start_date = $request->start_date;
                    $end_date = $request->end_date;
                    $client_id = $request->client_id;
                    if ($request->client_id == 'all') {
                        $coupons = ClientCoupon::whereBetween('created_at', [$request->start_date, $request->end_date])->get();
                        return view('admin.reports.result.client-coupon-report', compact('coupons','start_date','end_date','value','client_id'));
                    }else{
                        //Todos los cupones de un cliente por client_id
                        $coupons = ClientCoupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('client_id', $request->client_id)->get();
                        return view('admin.reports.result.client-coupon-report', compact('coupons','start_date','end_date','value','client_id'));
                    }
                    break;
            case 'state-coupons':
                $request->validate([
                    //que start_date sea menor que end_date
                    'start_date' => 'required|date|before:end_date',
                    'end_date' => 'required'
                ]);
                $start_date = $request->start_date;
                $end_date = $request->end_date;
                $state = $request->state;
                if ($request->state == 'all') {
                    $coupons = ClientCoupon::whereBetween('created_at', [$request->start_date, $request->end_date])->get();
                    return view('admin.reports.result.state-coupon-report', compact('coupons','start_date','end_date','value','state'));
                }else{
                    //Todos los cupones de un cliente por client_id
                    $coupons = ClientCoupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('state', $request->state)->get();
                    return view('admin.reports.result.state-coupon-report', compact('coupons','start_date','end_date','value','state'));
                }
                break;
            default:
                break;
        }
    }

    public function exportCoupon($value, $start_date, $end_date, $franchise){
        switch ($value) {
            case 'total-coupons':
                $coupons = Coupon::whereBetween('created_at', [$start_date, $end_date])->withCount('clients')->get();
                return Excel::download(new TotalCouponExport($coupons), 'total-coupon-report.xlsx');
                break;
            default:

                break;
        }

    }

    public function exportCouponClients($start_date, $end_date, $client_id){
        if ($client_id == 'all') {
            $coupons = ClientCoupon::whereBetween('created_at', [$start_date, $end_date])->get();
            return Excel::download(new ClientCouponExport($coupons), 'client-coupon-report.xlsx');
        } else {
            $coupons = ClientCoupon::whereBetween('created_at', [$start_date, $end_date])->where('client_id', $client_id)->get();
            return Excel::download(new ClientCouponExport($coupons), 'client-coupon-report.xlsx');
        }
    }

    public function exportCouponState($start_date, $end_date, $state){
        if ($state == 'all') {
            $coupons = ClientCoupon::whereBetween('created_at', [$start_date, $end_date])->get();
            return Excel::download(new ClientCouponExport($coupons), 'state-coupon-report.xlsx');
        } else {
            $coupons = ClientCoupon::whereBetween('created_at', [$start_date, $end_date])->where('state', $state)->get();
            return Excel::download(new ClientCouponExport($coupons), 'state-coupon-report.xlsx');
       }
    }
}
