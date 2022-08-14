<?php

namespace App\Exports;

use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;

class ViewsExport implements FromView
{
    public $start_date;
    public $end_date;

    public function __construct($start_date, $end_date)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function view(): ViewView
    {
        return view('admin.reports.exports.views-export',[
            'views' => DB::table('views')->select(DB::raw('url, count(*) as total'))->whereBetween('created_at', [$this->start_date, $this->end_date])->groupBy('url')->get(),
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);
    }
}
