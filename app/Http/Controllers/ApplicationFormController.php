<?php

namespace App\Http\Controllers;

use App\Models\ApplicationForm;
use App\Models\SchemeMaster;
use App\Models\DistrictMaster;
use Illuminate\Http\Request;


use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (Auth::user()->role) {
            case 'ADMIN':
                $data = ApplicationForm::all();
                break;
            case 'DC':
                $data = ApplicationForm::where('district_id', Auth::user()->district)->get();
                break;
            case 'DEPT':
                $data = ApplicationForm::whereHas('scheme', function ($q) {
                    $q->where('dept_id', Auth::user()->dept);
                })->get();
                break;
            case 'SBANK':
                $data = ApplicationForm::where('district_id', Auth::user()->district)->get();
                break;
            case 'LBANK':
                $data = ApplicationForm::all();
                break;
            default:
                $data = [];
                break;
        }
        return view('applicationForms.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 'DC') {
            $districts = DistrictMaster::where('id', Auth::user()->district)->orderBy('name', 'ASC')->get();
        } else {
            $districts = DistrictMaster::orderBy('name', 'ASC')->get();
        }
        $schemes = SchemeMaster::orderBy('scheme_name', 'ASC')->get();

        return view('applicationForms.add', [
            'districts' => $districts,
            'schemes' => $schemes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = ApplicationForm::create([
                'scheme_id' => $request->scheme_id,
                'proposal_from' => $request->proposal_from,
                'district_id' => $request->district,
                'block' => strtoupper($request->block),
                'village' => strtoupper($request->village),
                'proposal_title' => $request->proposal_title,
                'name_of_proposee' => $request->name_of_proposee,
                'address_of_proposee' => $request->address_of_proposee,
                'expected_outcome' => $request->expected_outcome,
                'project_duration' => $request->project_duration,
                'project_outlay' => $request->project_outlay,
                'year_month' => Carbon::now()->format('Y-m'),
                'status' => 'APPROVED',
            ]);

            if ($request->hasFile('project_file')) {
                $ext = $request->file('project_file')->extension();
                $data->update([
                    'project_file' => $request->file('project_file')->storeAs('public/Applications/' . $data->id, 'project_file_' . $data->id . "." . $ext),
                ]);
            }
            Session::flash('application-added', 1);
            return redirect()->route('applicationForm.index');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ApplicationForm::find($id);
        return view('applicationForms.show', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ApplicationForm::find($id);
        return view('applicationForms.edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ApplicationForm::find($id);
        $data->update([
            'scheme_id' => $request->scheme_code,
            'proposal_from' => $request->proposal_from,
            'district_id' => $request->district_code,
            'block' => strtoupper($request->block),
            'village' => strtoupper($request->village),
            'proposal_title' => $request->proposal_title,
            'name_of_proposee' => $request->name_of_proposee,
            'address_of_proposee' => $request->address_of_proposee,
            'expected_outcome' => $request->expected_outcome,
            'project_duration' => $request->project_duration,
            'project_outlay' => $request->project_outlay,
        ]);

        if ($request->hasFile('project_file')) {
            $ext = $request->file('project_file')->extension();
            $data->update([
                'project_file' => $request->file('project_file')->storeAs('public/Applications/' . $data->id, 'project_file_' . $data->id . "." . $ext),
            ]);
        }
        Session::flash('application-updated', 1);
        return redirect()->route('applicationForm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationForm $applicationForm)
    {
        //
    }
}
