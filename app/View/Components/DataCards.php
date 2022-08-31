<?php

namespace App\View\Components;

use App\Models\ApplicationForm;
use App\Models\SchemeMaster;
use Illuminate\View\Component;

class DataCards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $approved = ApplicationForm::where('status', 'APPROVED')->count();
        $pending = ApplicationForm::where('status', 'SUBMITTED')->count();
        $schemes = SchemeMaster::count();
        $outlay = ApplicationForm::where('status', 'APPROVED')->sum('project_outlay');
        return view('components.data-cards', compact('approved', 'pending', 'schemes', 'outlay'));


        // return view('components.data-cards');
    }
}
