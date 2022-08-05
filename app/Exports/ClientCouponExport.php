<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ClientCouponExport implements FromView
{
    use Exportable;
    public $coupons;

    public function __construct($coupons)
    {
        $this->coupons = $coupons;
    }

    public function view(): View
    {
        return view('admin.reports.exports.client-coupon-export', [
            'coupons' => $this->coupons
        ]);
    }
}
