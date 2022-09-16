<?php

namespace App\Http\Controllers;

use App\Models\Misutilization;
use App\Models\ApplicationForm;
use Illuminate\Http\Request;
use Auth;
use Session;
use Carbon\Carbon;
class MisutilizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Misutilization::all();
        return view('misUtilization.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appForms = ApplicationForm::where('status', 'SANCTIONED')->get();
        return view('misUtilization.add', compact('appForms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appForm = ApplicationForm::find($request->app_id);
        $data = Misutilization::create([
          'app_id' => $request->app_id,
          'scheme_id' => $appForm->scheme_id,
          'bank_id' => $appForm->bank_id,
          'total_amount_released' => $request->total_amount_released,
          'date_last_release' => Carbon::parse($request->date_last_release)->format('Y-m-d'),
          'repayment_due' => $request->repayment_due,
          'ac_regular' => $request->ac_regular,
          'date_visit' => Carbon::parse($request->date_visit)->format('Y-m-d'),
          'utilized' => $request->utilized,
          'nature_misutilization' => $request->nature_misutilization,
        ]);

        return redirect()->route('misUtilization.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Misutilization  $misutilization
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Misutilization::find($id);
        return view('misUtilization.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Misutilization  $misutilization
     * @return \Illuminate\Http\Response
     */
    public function edit(Misutilization $misutilization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Misutilization  $misutilization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Misutilization $misutilization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Misutilization  $misutilization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Misutilization $misutilization)
    {
        //
    }
}
