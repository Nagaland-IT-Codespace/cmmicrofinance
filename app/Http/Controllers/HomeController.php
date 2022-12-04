<?php

namespace App\Http\Controllers;

use App\Models\DistrictMaster;
use App\Services\DashboardService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $dashboardService;
    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function homeRedirector()
    {

        switch (Auth::User()->role) {
            case 'ADMIN':
                $data = $this->dashboardService->getDashBoardInfoCardForAdmin();
                $districts = DistrictMaster::all();
                break;
            case 'STATE':
                $data = $this->dashboardService->getDashBoardInfoCardForAdmin();
                $districts = DistrictMaster::all();
                break;
            case 'DEPT':
                $data = $this->dashboardService->getDashBoardInfoCardForDC();
                $districts = DistrictMaster::all();
                break;
            case 'DC':
                $data = $this->dashboardService->getDashBoardInfoCardForDC();
                $districts = DistrictMaster::where('id', Auth::User()->district)->get();
                break;
            case 'SBANK':
                $data = $this->dashboardService->getDashBoardInfoCardForSBANK();
                $districts = DistrictMaster::all();
                break;
            case 'LBANK':
                $data = $this->dashboardService->getDashBoardInfoCardForLBANK();
                $districts = DistrictMaster::all();
                break;
            default:
                $data = [];
                $districts = DistrictMaster::all();
                break;
        }

        return view('dashboard', compact('data', 'districts'));
    }
    public function getDashboardTable(Request $request)
    {
        if ($request->district_id == 'ALL') {
            $data = $this->dashboardService->getSchemeDisbursedAmountByDistrict(null);
        } {
            $data = $this->dashboardService->getSchemeDisbursedAmountByDistrict($request->district_id);
        }
        // return json
        return response()->json($data);
    }
}
