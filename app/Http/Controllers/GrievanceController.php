<?php

namespace App\Http\Controllers;

use App\Models\DeptMaster;
use App\Models\Grievance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GrievanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::User()->role == 'ADMIN') {
            $data = Grievance::orderBy('created_at', 'ASC')->get();
        }

        if (Auth::User()->role == 'DEPT') {
            $data = Grievance::where('dept_id', Auth::User()->dept)->orderBy('created_at', 'ASC')->get();
        }

        if (Auth::User()->role == 'DC') {
            $data = Grievance::where('district_id', Auth::User()->district)->orderBy('created_at', 'ASC')->get();
        }

        return view('grievances.index', [
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
        // Validate request and store Grievance
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'scheme_id' => 'required',
            'dept_id' => 'required',
            'district_id' => 'required',
            'message' => 'required',

        ]);
        $grivance = Grievance::create($request->all());
        Session::flash('Grievance added', 'Grievance successfully added!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grievance  $grievance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find Grievance by id with GrievanceTransferLogs Relationship
        $data = Grievance::with('grievanceTransferLogs')->find($id);
        $data = Grievance::find($id);
        $departments = DeptMaster::all();
        return view('grievances.view', [
            'data' => $data,
            'departments' => $departments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grievance  $grievance
     * @return \Illuminate\Http\Response
     */
    public function edit(Grievance $grievance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grievance  $grievance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $grievance = Grievance::find($id);
        $oldDept = $grievance->dept_id;
        $newDept= $request->dept_id;
        $grievance->update([
            'dept_id' => $newDept,
        ]);
        $grievance->grievanceTransferLogs()->create([
            'grievance_id' => $id,
            'from_dept' => $oldDept,
            'to_dept' => $newDept,
            'reason' => $request->reason,
        ]);

        Session::flash('Grievance updated', 'Grievance successfully updated!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grievance  $grievance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grievance $grievance)
    {
        //
    }

}
