<?php

namespace App\Http\Livewire;

use App\Models\ApplicationForm;
use App\Models\DeptMaster;
use App\Models\Disbursement;
use App\Models\DistrictMaster;
use App\Models\SchemeMaster;
use App\Services\DashboardService;
use Livewire\Component;

class SchemeWiseData extends Component
{


    public $district = 'ALL';
    public function render()
    {

        if ($this->district == 'ALL') {
            $data = $this->getSchemeDisbursedAmountByDistrict(null);
        } {
            $data = $this->getSchemeDisbursedAmountByDistrict($this->district);
        }
        $districts = DistrictMaster::all();
        return view('livewire.scheme-wise-data', compact('districts', 'data'));
    }
    private function getSchemeDisbursedAmountByDistrict($district_id)
    {
        $scheme = SchemeMaster::all();
        $scheme_array = collect();
        foreach ($scheme as $s) {
            if ($district_id != 'ALL') {
                $application_approved = ApplicationForm::where('scheme_id', $s->id)->where('status', 'APPROVED')->where('district_id', $district_id)->count();
                $application_sanctioned = ApplicationForm::where('scheme_id', $s->id)->where('status', 'SANCTIONED')->where('district_id', $district_id)->count();
            } else {
                $application_approved = ApplicationForm::where('scheme_id', $s->id)->where('status', 'APPROVED')->count();
                $application_sanctioned = ApplicationForm::where('scheme_id', $s->id)->where('status', 'SANCTIONED')->count();
            }
            $scheme_array->push([
                'scheme_name' => $s->scheme_name,
                'application_approved' => $application_approved,
                'application_sanctioned' => $application_sanctioned,
                'amount_disbursed' => Disbursement::whereHas('appForm', function ($q) use ($s, $district_id) {
                    $q->where('scheme_id', $s->id);
                    if ($district_id) {
                        $q->where('district_id', $district_id);
                    }
                })->sum('amount_disbursed'),
                'department' => DeptMaster::where('id', $s->dept_id)->first()->name

            ]);
        }
        return $scheme_array;
    }
}
