<?php

namespace App\Http\Controllers;

use App\Models\DistrictMaster;
use Illuminate\Http\Request;

class DistrictMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DistrictMaster::all();
        return view('districts.index',[
          'data' => $data,
        ]);
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
     * @param  \App\Models\DistrictMaster  $districtMaster
     * @return \Illuminate\Http\Response
     */
    public function show(DistrictMaster $districtMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistrictMaster  $districtMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(DistrictMaster $districtMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistrictMaster  $districtMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DistrictMaster $districtMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistrictMaster  $districtMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistrictMaster $districtMaster)
    {
        //
    }
}
