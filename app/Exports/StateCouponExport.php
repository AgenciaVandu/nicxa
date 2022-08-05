<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class StateCouponExport implements FromView
{
    public $coupons,$start_date,$end_date;

    public function __construct($coupons,$start_date,$end_date)
    {
        $this->coupons = $coupons;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function view(): View
    {
        return view('admin.reports.exports.state-coupon-export', [
            'coupons' => $this->coupons,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ]);
    }

}
