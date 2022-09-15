<?php

namespace App\Http\Controllers;

use App\Models\BankMaster;
use Illuminate\Http\Request;
use Session;

class BankMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = BankMaster::all();
        return view('bankMaster.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bankMaster.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BankMaster::create([
          'name' => strtoupper($request->name),
          'branch' => strtoupper($request->branch),
          'ifsc' => strtoupper($request->ifsc),
        ]);
        Session::flash('bank-added', 1);
        return redirect()->route('bankMaster.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankMaster  $bankMaster
     * @return \Illuminate\Http\Response
     */
    public function show(BankMaster $bankMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankMaster  $bankMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(BankMaster $bankMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankMaster  $bankMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankMaster $bankMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankMaster  $bankMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankMaster $bankMaster)
    {
        //
    }
}
