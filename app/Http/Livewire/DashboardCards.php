<?php

namespace App\Http\Livewire;

use App\Models\ApplicationForm;
use App\Models\Disbursement;
use App\Models\DistrictMaster;
use App\Models\SchemeMaster;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardCards extends Component
{
    public $district = "ALL";
    public $adminroles = [
        'ADMIN',
        'STATE',
        'LBANK'
    ];
    private $deptroles = [
        'DEPT'
    ];
    private $districtroles = [
        'DC',
        'SBANK'
    ];
    public function render()
    {

        $districts = DistrictMaster::all();
        if (in_array(Auth::User()->role, $this->adminroles)) {
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
        }
        if (in_array(Auth::User()->role, $this->districtroles)) {
            $approvedcount = ApplicationForm::where('status', 'APPROVED')->where('district_id', Auth::user()->district)->count();
            $sanctionedcount = ApplicationForm::where('status', 'SANCTIONED')->where('district_id', Auth::user()->district)->count();
            $amountdisbursed = Disbursement::whereHas('appForm', function ($q) {
                $q->where('district_id', Auth::user()->district);
            })->sum('amount_disbursed');
            $schemecount = SchemeMaster::count();

        }
        if (in_array(Auth::User()->role, $this->deptroles)) {
            $approvedcount = ApplicationForm::where('status', 'APPROVED')->whereHas('scheme', function ($q) {
                $q->where('dept_id', Auth::user()->department);
            })->count();
            $sanctionedcount = ApplicationForm::where('status', 'SANCTIONED')->whereHas('scheme', function ($q) {
                $q->where('dept_id', Auth::user()->department);
            })->count();

            $amountdisbursed = Disbursement::whereHas('appForm', function ($q) {
                $q->where('department_id', Auth::user()->department);
            })->sum('amount_disbursed');
            $schemecount = SchemeMaster::count();
        }
        return view('livewire.dashboard-cards', compact('districts', 'approvedcount', 'sanctionedcount', 'amountdisbursed', 'schemecount'));
    }
}
