<?php

namespace App\Http\Controllers;

use App\Models\Grievance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class GrievanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        if ($user->role == 'ADMIN') {
            $grievances = Grievance::all()->paginate(10);
            return view('grievance.index', compact('grievances'));
        } else if ($user->role == 'DEPT') {
            $grievances = Grievance::where('dept_id', $user->dept)->get()->paginate(10);;
            return view('grievance.index', compact('grievances'));
        } else if ($user->role == 'DC') {
            $grievances = Grievance::where('district_id', $user->district)->get()->paginate(10);;
            return view('grievance.index', compact('grievances'));
        } else {
            return view('grievance.index');
        }
        // send grievances to view as data table
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
    public function show(Grievance $grievance)
    {
        //
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
    public function update(Request $request, Grievance $grievance)
    {
        //
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
