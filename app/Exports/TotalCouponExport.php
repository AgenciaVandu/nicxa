<?php

namespace App\Exports;

use App\Models\Coupon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class TotalCouponExport implements FromView
{

    use Exportable;

    public $coupons,$start_date,$end_date;

    public function __construct($coupons,$start_date,$end_date)
    {
        $this->coupons = $coupons;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function view(): View
    {
        return view('admin.reports.exports.total-coupon-export', [
            'coupons' => $this->coupons,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ]);
    }
}
