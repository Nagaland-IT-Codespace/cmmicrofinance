<?php

namespace App\Services;

use App\Models\ApplicationForm;
use App\Models\DeptMaster;
use App\Models\Disbursement;
use App\Models\SchemeMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardService
{
    public function getDashBoardInfoCardForAdmin()
    {
        $approved_count = ApplicationForm::where('status', 'APPROVED')->count();
        // sanctioned count
        $sanctioned_count = ApplicationForm::where('status', 'SANCTIONED')->count();
        $amount_disbursed = Disbursement::sum('amount_disbursed');
        $scheme_count = SchemeMaster::count();
        return [
            [
                'title' => 'Approved Applications',
                'count' => $approved_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'success',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Sanctioned Applications',
                'count' => $sanctioned_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'success',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Amount Disbursed',
                'count' => $amount_disbursed,
                'icon' => 'fa fa-rupee-sign',
                'color' => 'info',
                'link' => 'disbursement.index',
            ],
            [
                'title' => 'Total Schemes',
                'count' => $scheme_count,
                'icon' => 'fa fa-list',
                'color' => 'warning',
                'link' => 'schemeMaster.index',
            ]
        ];
    }
    // getDashBoardInfoCardForDC
    public function getDashBoardInfoCardForDC()
    {
        $approved_count = ApplicationForm::where('status', 'APPROVED')->where('district_id', Auth::user()->district)->count();
        $sanctioned_count = ApplicationForm::where('status', 'SANCTIONED')->where('district_id', Auth::user()->district)->count();
        $amount_disbursed = Disbursement::whereHas('appForm', function ($q) {
            $q->where('district_id', Auth::user()->district);
        })->sum('amount_disbursed');
        $scheme_count = SchemeMaster::count();
        return [
            [
                'title' => 'Approved Applications',
                'count' => $approved_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'info',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Sanctioned Applications',
                'count' => $sanctioned_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'success',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Amount Disbursed',
                'count' => $amount_disbursed,
                'icon' => 'fa fa-rupee-sign',
                'color' => 'info',
                'link' => 'disbursement.index',
            ],
            [
                'title' => 'Total Schemes',
                'count' => $scheme_count,
                'icon' => 'fa fa-list',
                'color' => 'warning',
                'link' => 'schemeMaster.index',
            ]
        ];
    }

    // getDashBoardInfoCardForDept
    public function getDashBoardInfoCardForDept()
    {
        $approved_count = ApplicationForm::where('status', 'APPROVED')->whereHas('scheme', function ($q) {
            $q->where('dept_id', Auth::user()->department);
        })->count();
        $sanctioned_count = ApplicationForm::where('status', 'SANCTIONED')->whereHas('scheme', function ($q) {
            $q->where('dept_id', Auth::user()->department);
        })->count();

        $amount_disbursed = Disbursement::whereHas('appForm', function ($q) {
            $q->where('department_id', Auth::user()->department);
        })->sum('amount_disbursed');
        $scheme_count = SchemeMaster::count();
        return [
            [
                'title' => 'Approved Applications',
                'count' => $approved_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'info',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Sanctioned Applications',
                'count' => $sanctioned_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'success',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Amount Disbursed',
                'count' => $amount_disbursed,
                'icon' => 'fa fa-rupee-sign',
                'color' => 'info',
                'link' => 'disbursement.index',
            ],
            [
                'title' => 'Total Schemes',
                'count' => $scheme_count,
                'icon' => 'fa fa-list',
                'color' => 'warning',
                'link' => 'schemeMaster.index',
            ]
        ];
    }
    // getDashBoardInfoCardForSBANK
    public function getDashBoardInfoCardForSBANK()
    {
        $approved_count = ApplicationForm::where('status', 'APPROVED')->whereHas('scheme', function ($q) {
            $q->where('bank_id', Auth::user()->bank);
        })->count();
        $sanctioned_count = ApplicationForm::where('status', 'SANCTIONED')->whereHas('scheme', function ($q) {
            $q->where('bank_id', Auth::user()->bank);
        })->count();

        $amount_disbursed = Disbursement::whereHas('appForm', function ($q) {
            $q->where('bank_id', Auth::user()->bank);
        })->sum('amount_disbursed');
        $scheme_count = SchemeMaster::count();
        return [
            [
                'title' => 'Approved Applications',
                'count' => $approved_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'info',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Sanctioned Applications',
                'count' => $sanctioned_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'success',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Amount Disbursed',
                'count' => $amount_disbursed,
                'icon' => 'fa fa-rupee-sign',
                'color' => 'info',
                'link' => 'disbursement.index',
            ],
            [
                'title' => 'Total Schemes',
                'count' => $scheme_count,
                'icon' => 'fa fa-list',
                'color' => 'warning',
                'link' => 'schemeMaster.index',
            ]
        ];
    }
    // getDashBoardInfoCardForLBANK
    public function getDashBoardInfoCardForLBANK()
    {
        $approved_count = ApplicationForm::where('status', 'APPROVED')->count();
        $sanctioned_count = ApplicationForm::where('status', 'SANCTIONED')->count();
        $amount_disbursed = Disbursement::sum('amount_disbursed');
        $scheme_count = SchemeMaster::count();
        return [
            [
                'title' => 'Approved Applications',
                'count' => $approved_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'info',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Sanctioned Applications',
                'count' => $sanctioned_count,
                'icon' => 'fa fa-check-circle',
                'color' => 'success',
                'link' => 'applicationForm.index',
            ],
            [
                'title' => 'Amount Disbursed',
                'count' => $amount_disbursed,
                'icon' => 'fa fa-rupee-sign',
                'color' => 'info',
                'link' => 'disbursement.index',
            ],
            [
                'title' => 'Total Schemes',
                'count' => $scheme_count,
                'icon' => 'fa fa-list',
                'color' => 'warning',
                'link' => 'schemeMaster.index',
            ]
        ];
    }
    // getScheme ,disbursed amount and department  by district
    public function getSchemeDisbursedAmountByDistrict($district_id = null)
    {

        $scheme = SchemeMaster::all();

        $scheme_array = [];
        foreach ($scheme as $key => $value) {
            $scheme_array[$key]['scheme_name'] = $value->scheme_name;
            $scheme_array[$key]['amount_disbursed'] = Disbursement::whereHas('appForm', function ($q) use ($value, $district_id) {
                $q->where('scheme_id', $value->id);
                if ($district_id) {
                    $q->where('district_id', $district_id);
                }
            })->sum('amount_disbursed');
            Log::info($scheme_array[$key]['amount_disbursed']);
            $scheme_array[$key]['department'] = DeptMaster::where('id', $value->dept_id)->first()->name;
        }
        return $scheme_array;

    }


    public function getSchemeAndDisbursedAmount($district_id = null)
    {
        $scheme = SchemeMaster::select('id', 'name')->get();
        $data = [];
        foreach ($scheme as $key => $value) {
            $data[$key]['name'] = $value->name;
            $data[$key][''] = Disbursement::whereHas('appForm', function ($q) use ($value, $district_id) {
                $q->where('scheme_id', $value->id);
                if ($district_id) {
                    $q->where('district_id', $district_id);
                }
            })->sum('amount_disbursed');
        }
        return $data;
    }


    // getDisbursementSum by Scheme and district
    public function getDisbursementSumByDistrict($scheme_id, $district_id = null)
    {
        $disbursement = Disbursement::whereHas('appForm', function ($q) use ($scheme_id, $district_id) {
            $q->where('scheme_id', $scheme_id);
            if ($district_id) {
                $q->where('district_id', $district_id);
            }
        })->sum('amount_disbursed');
        return $disbursement;
    }
}
