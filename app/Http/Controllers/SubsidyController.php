<?php

namespace App\Http\Controllers;

use App\Models\BankMaster;
use App\Models\Subsidy;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubsidyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get All subsidy and return to view
        $subsidies = Subsidy::all();
        return view('subsidy.index', compact('subsidies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = BankMaster::all();
        return view('subsidy.add',compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'bank_id' => 'required',
        //     'dlic_meeting_date' => 'required',
        //     'rate_of_receipt_applications' => 'required',
        //     'no_of_applications_received' => 'required',
        //     'amount_loan_sanctioned' => 'required',
        //     'total_eligible_subsidy' => 'required',
        //     'date_claim_subsidy' => 'required',
        //     'date_receipt_subsidy' => 'required',
        //     'amount_subsidy_released' => 'required',
        //     'amount_subsidy_outstanding' => 'required',
        // ]);
        $data=Subsidy::create([
            'bank_id' => $request->bank_id,
            'dlic_meeting_date' => Carbon::parse($request->dlic_meeting_date)->format('Y-m-d'),
            'rate_of_receipt_applications' => $request->rate_of_receipt_applications,
            'no_of_applications_received' => $request->no_of_applications_received,
            'amount_loan_sanctioned' => $request->amount_loan_sanctioned,
            'total_eligible_subsidy' => $request->total_eligible_subsidy,
            'date_claim_subsidy' => Carbon::parse( $request->date_claim_subsidy)->format('Y-m-d'),
            'date_receipt_subsidy' => Carbon::parse( $request->date_receipt_subsidy)->format('Y-m-d'),
            'amount_subsidy_released' => $request->amount_subsidy_released,
            'amount_subsidy_outstanding' => $request->amount_subsidy_outstanding,
        ]);
        return redirect()->route('subsidy.index')->with('success','Subsidy created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subsidy  $subsidy
     * @return \Illuminate\Http\Response
     */
    public function show(Subsidy $subsidy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subsidy  $subsidy
     * @return \Illuminate\Http\Response
     */
    public function edit(Subsidy $subsidy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subsidy  $subsidy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subsidy $subsidy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subsidy  $subsidy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subsidy $subsidy)
    {
        //
    }
}
