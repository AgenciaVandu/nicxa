<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ViewsTable extends Component
{
    public $views;

    public function mount()
    {
        $this->views = DB::table('views')->select(DB::raw('url, count(*) as total'))->groupBy('url')->get();
    }

    
    public function render()
    {
        return view('livewire.admin.views-table');
    }
}
