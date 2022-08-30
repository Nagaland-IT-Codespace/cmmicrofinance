<?php

namespace App\Http\Controllers;

use App\Models\Grievance;

use Illuminate\Http\Request;
use Auth;
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
          if(Auth::User()->role == 'ADMIN')
          {
            $data = Grievance::orderBy('created_at', 'ASC')->get();
          }

          if(Auth::User()->role == 'DEPT')
          {
            $data = Grievance::where('dept_id', Auth::User()->dept)->orderBy('created_at', 'ASC')->get();
          }

          if(Auth::User()->role == 'DC')
          {
            $data = Grievance::where('district', Auth::User()->district)->orderBy('created_at', 'ASC')->get();
          }

        return view('grievances.index',[
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
        $data = Grievance::find($id);
        return view('grievances.view', [
          'data' => $data,
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
