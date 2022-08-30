<?php

namespace App\Http\Controllers;

use App\Models\SchemeMaster;
use App\Models\DeptMaster;
use Illuminate\Http\Request;
use Auth;
use Session;

class SchemeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SchemeMaster::paginate(10);
        $department = DeptMaster::all();
        return view('schemes.index',[
          'data' => $data,
          'department' => $department,
        ]);
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
        SchemeMaster::create([
          'scheme_name' => $request->scheme_name,
          'dept_id' => $request->dept_id,
          'created_by' => Auth::user()->id,
        ]);
        Session::flash('scheme added',1);
        return redirect()->back();
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
