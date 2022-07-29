<?php

namespace App\Exports;

use App\Models\Coupon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class TotalCouponExport implements FromView
{

    use Exportable;

    public $coupons;


    public function __construct($coupons){
        $this->coupons = $coupons;
    }

    public function view(): View
    {
        return view('admin.reports.exports.total-coupon-export', [
            'coupons' => $this->coupons
        ]);
    }
}
