<?php

namespace App\Http\Controllers\Admin;

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
        $coupon_bk = Coupon::where('franchise', 'Burger King')->count();
        //Obtener el numero de cupones de KFC
        $coupon_kfc = Coupon::where('franchise', 'KFC')->count();
        //Obtener el numero de cupones de Pizza Hut
        $coupon_ph = Coupon::where('franchise', 'Pizza Hut')->count();
        //Obtener el numero de cupones de LBB Obregon
        $coupon_lbb = Coupon::where('franchise', 'LBB Obregon')->count();
        //Obtener el cupon mas repetido
        $coupon_mas_repetido = ClientCoupon::getMostRepeatedCoupon();
        //Buscar el nombre cupon mas repetido en la tabla coupon
        $coupon_mas_repetido_name = Coupon::find($coupon_mas_repetido->coupon_id);
        return view('dashboard', compact('coupon_mas_repetido_name','coupon_kfc', 'coupon_bk', 'coupon_ph', 'coupon_lbb'));
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
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->get();
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons', 'start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'KFC':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'KFC')->get();
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons', 'start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'LBB Obregon':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'LBB Obregon')->get();
                        $start_date = $request->start_date;
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons', 'start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'Pizza Hut':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'Pizza Hut')->get();
                        $start_date = $request->start_date;
                        $start_date = $request->start_date;
                        $end_date = $request->end_date;
                        $franchise = $request->franchise;
                        return view('admin.reports.result.total-coupon-report', compact('coupons','start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'Burger King':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'Burger King')->get();
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
                case 'value':

                break;

            default:
            case 'client-coupons':
                $request->validate([
                    //que start_date sea menor que end_date
                    'start_date' => 'required|date|before:end_date',
                    'end_date' => 'required'
                ]);
                $start_date = $request->start_date;
                $end_date = $request->end_date;
                $client_id = $request->client_id;
                $coupons = Coupon::where('client_id', $request->client_id)->whereBetween('created_at', [$request->start_date, $request->end_date])->get();
                return view('admin.reports.result.client-coupon-report', compact('coupons', 'start_date', 'end_date', 'value','client_id'));
            break;
                break;
        }
    }

    public function exportCoupon($value, $start_date, $end_date, $franchise){
        $coupons = Coupon::whereBetween('created_at', [$start_date, $end_date])->get();
        return Excel::download(new TotalCouponExport($coupons), 'total-coupon-report.xlsx');
    }
}
