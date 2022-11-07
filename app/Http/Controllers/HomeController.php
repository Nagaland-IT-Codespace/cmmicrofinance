<?php

namespace App\Http\Controllers;

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
                break;
            case 'DEPT':
                $data = $this->dashboardService->getDashBoardInfoCardForDC();
                break;
            case 'DC':
                $data = $this->dashboardService->getDashBoardInfoCardForDC();
                break;
            case 'SBANK':
                $data = $this->dashboardService->getDashBoardInfoCardForSBANK();
                break;
            case 'LBANK':
                $data = $this->dashboardService->getDashBoardInfoCardForLBANK();
                break;
            default:
                $data = [];

                break;
        }
        return view('dashboard', compact('data'));
    }
}
