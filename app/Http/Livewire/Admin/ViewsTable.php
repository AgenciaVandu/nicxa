<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ViewsTable extends Component
{
    public $start_date;
    public $end_date;
    public function mount(){
        $this->start_date = Carbon::today();
        $this->end_date = Carbon::today()->addHours(23)->addMinute(59);
    }
    public function render()
    {
        //Obtener los registros de la tabla views y agrupar por url y numero de veces que se repite por un rango de fechas
        return view('livewire.admin.views-table',[
            'views' => DB::table('views')->select(DB::raw('url, count(*) as total'))->whereBetween('created_at', [$this->start_date, $this->end_date])->groupBy('url')->get(),
        ]);
    }
}