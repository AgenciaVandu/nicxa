<?php

namespace App\Http\Controllers\Admin;

use App\Exports\TotalCouponExport;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function filters($value){
        switch ($value) {
            case 'total-coupons':
                return view('admin.reports.filters.total-coupon-filter');
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
                                                $end_date = $request->end_date;
                        return view('admin.reports.result.total-coupon-report', compact('coupons','start_date', 'end_date', 'franchise', 'value'));
                        break;
                    case 'Burger King':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'Burger King')->get();
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
                # code...
                break;
        }
    }

    public function exportCoupon($value, $start_date, $end_date, $franchise){
        $coupons = Coupon::whereBetween('created_at', [$start_date, $end_date])->get();
        return Excel::download(new TotalCouponExport($coupons), 'total-coupon-report.xlsx');
    }
}
