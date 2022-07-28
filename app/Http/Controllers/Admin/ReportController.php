<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

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
                        /* $coupons = Coupon::where('created_at', '>=', $request->start_date)->where('created_at', '<=', $request->end_date)->get(); */
                        return view('admin.reports.result.total-coupon-report', compact('coupons'));
                        break;
                    case 'KFC':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'KFC')->get();
                        /* $coupons = Coupon::where('created_at', '>=', $request->start_date)->where('created_at', '<=', $request->end_date)->where('franchise', 'KFC')->get(); */
                        return view('admin.reports.result.total-coupon-report', compact('coupons'));
                        break;
                    case 'LBB Obregon':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'LBB Obregon')->get();
                        /* $coupons = Coupon::where('created_at', '>=', $request->start_date)->where('created_at', '<=', $request->end_date)->where('franchise', 'McDonalds')->get(); */
                        return view('admin.reports.result.total-coupon-report', compact('coupons'));
                        break;
                    case 'Pizza Hut':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'Pizza Hut')->get();
                        /* $coupons = Coupon::where('created_at', '>=', $request->start_date)->where('created_at', '<=', $request->end_date)->where('franchise', 'Pizza Hut')->get(); */
                        return view('admin.reports.result.total-coupon-report', compact('coupons'));
                        break;
                    case 'Burger King':
                        //consultar entre las dos fechas
                        $coupons = Coupon::whereBetween('created_at', [$request->start_date, $request->end_date])->where('franchise', 'Burger King')->get();
                        /* $coupons = Coupon::where('created_at', '>=', $request->start_date)->where('created_at', '<=', $request->end_date)->where('franchise', 'Burger King')->get(); */
                        return view('admin.reports.result.total-coupon-report', compact('coupons'));
                        break;

                    default:
                        # code...
                        break;
                }
                return view('admin.reports.result.total-coupon-result');
                break;

            default:
                # code...
                break;
        }
    }
}
