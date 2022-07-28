<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\LineChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Cupones descargados por mes')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Physical sales', [0, 93, 35, 42, 18, 82,20,10,30])
            ->addData('Digital sales', [0, 29, 77, 28, 55, 45,10,38,19])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);
    }
}
