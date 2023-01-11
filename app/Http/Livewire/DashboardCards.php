<?php

namespace App\Http\Livewire;

use App\Models\ApplicationForm;
use App\Models\Disbursement;
use App\Models\DistrictMaster;
use App\Models\SchemeMaster;
use Livewire\Component;

class DashboardCards extends Component
{
    public $district = "ALL";
    public function render()
    {
        $districts = DistrictMaster::all();
        if ($this->district == "ALL") {
            $approvedcount = ApplicationForm::where('status', 'APPROVED')->count();
            $sanctionedcount = ApplicationForm::where('status', 'SANCTIONED')->count();
            $amountdisbursed = Disbursement::sum('amount_disbursed');
            $schemecount = SchemeMaster::count();
        } else {
            $approvedcount = ApplicationForm::where('status', 'APPROVED')->where('district_id', $this->district)->count();
            $sanctionedcount = ApplicationForm::where('status', 'SANCTIONED')->where('district_id', $this->district)->count();
            $amountdisbursed = Disbursement::whereHas('appForm', function ($q) {
                $q->where('district_id', $this->district);
            })->sum('amount_disbursed');
            $schemecount = SchemeMaster::count();
        }
        return view('livewire.dashboard-cards', compact('districts', 'approvedcount', 'sanctionedcount', 'amountdisbursed', 'schemecount'));
    }
}
