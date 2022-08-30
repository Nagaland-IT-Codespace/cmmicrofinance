<?php

namespace App\Http\Controllers;

use App\Models\SchemeMaster;
use Illuminate\Http\Request;

class SchemeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('schemes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\SchemeMaster  $schemeMaster
     * @return \Illuminate\Http\Response
     */
    public function show(SchemeMaster $schemeMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchemeMaster  $schemeMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(SchemeMaster $schemeMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SchemeMaster  $schemeMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchemeMaster $schemeMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchemeMaster  $schemeMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchemeMaster $schemeMaster)
    {
        //
    }
}
