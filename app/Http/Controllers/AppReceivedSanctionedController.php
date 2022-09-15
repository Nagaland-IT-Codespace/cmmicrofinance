<?php

namespace App\Http\Controllers;

use App\Models\AppReceivedSanctioned;
use App\Models\ApplicationForm;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Session;

class AppReceivedSanctionedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now()->format('Y-m');
        $data = ApplicationForm::where('upload_date', $date)->where('status', 'APPROVED')->get();
        return view('appReceivedSanctioned.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppReceivedSanctioned  $appReceivedSanctioned
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ApplicationForm::find($id);
        return view('appReceivedSanctioned.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppReceivedSanctioned  $appReceivedSanctioned
     * @return \Illuminate\Http\Response
     */
    public function edit(AppReceivedSanctioned $appReceivedSanctioned)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppReceivedSanctioned  $appReceivedSanctioned
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppReceivedSanctioned $appReceivedSanctioned)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppReceivedSanctioned  $appReceivedSanctioned
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppReceivedSanctioned $appReceivedSanctioned)
    {
        //
    }
}
