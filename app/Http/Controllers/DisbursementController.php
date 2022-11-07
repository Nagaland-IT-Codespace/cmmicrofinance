<?php

namespace App\Http\Controllers;

use App\Models\Disbursement;
use App\Models\ApplicationForm;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;

class DisbursementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (Auth::user()->role) {
            case 'LBANK':
                $data = Disbursement::all();

            case 'SBANK':
                $data = Disbursement::whereHas('appForm', function ($q) {
                    $q->where('bank_id', Auth::user()->bank);
                })->get();
            case 'ADMIN':
                $data = Disbursement::all();
            case 'DC':
                $data = Disbursement::whereHas('appForm', function ($q) {
                    $q->where('district_id', Auth::user()->district);
                })->get();
            default:
                $data = Disbursement::all();
                break;
        }
        return view('disbursement.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 'LBANK') {
            $data = ApplicationForm::all();
            return view('disbursement.add', compact('data'));
        } else {
            $data = ApplicationForm::where('bank_id', Auth::user()->bank)->get();
            return view('disbursement.add', compact('data'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Disbursement::create([
            'app_id' => $request->app_id,
            'date_of_disbursement' => Carbon::parse($request->date_of_disbursement)->format('Y-m-d'),
            'amount_disbursed' => $request->amount_disbursed,
            'subsidy_credited_to_loan_ac' => $request->subsidy_credited_to_loan_ac,
            'year_month' => Carbon::now()->format('Y-m'),
        ]);

        return redirect()->route('disbursement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function show(Disbursement $disbursement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function edit(Disbursement $disbursement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disbursement $disbursement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disbursement $disbursement)
    {
        //
    }
}
