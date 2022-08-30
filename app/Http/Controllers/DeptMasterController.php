<?php

namespace App\Http\Controllers;

use App\Models\DeptMaster;
use Illuminate\Http\Request;
use Auth;
use Session;

class DeptMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DeptMaster::paginate(10);
        return view('departments.index',[
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
      DeptMaster::create([
        'name' => $request->name,
      ]);
      Session::flash('dept added',1);
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeptMaster  $deptMaster
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = DeptMaster::where('id',$id)->first();
      return response()->json(['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeptMaster  $deptMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(DeptMaster $deptMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeptMaster  $deptMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeptMaster $deptMaster)
    {
      $deptMaster->update([
        'name' => $request->name,
      ]);
      Session::flash('dept updated',1);
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeptMaster  $deptMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeptMaster $deptMaster)
    {
        //
    }
}
