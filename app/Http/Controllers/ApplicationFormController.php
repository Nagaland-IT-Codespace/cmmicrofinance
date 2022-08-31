<?php

namespace App\Http\Controllers;

use App\Models\ApplicationForm;
use App\Models\SchemeMaster;
use App\Models\DistrictMaster;
use Illuminate\Http\Request;
use Auth;
use Session;
use Storage;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = ApplicationForm::all();
      return view('applicationForms.index',
      [
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
      $districts = DistrictMaster::orderBy('name', 'ASC')->get();
      $schemes = SchemeMaster::where('id', '!=', 1)->get();

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
            'status' => 'SUBMITTED',
          ]);

          if($request->hasFile($request->project_file))
            {
              $ext = $request->file($request->project_file)->extension();
              $data->update([
                'project_file' => $request->file($request->project_file)->storeAs('public/Applications/'.$data->id,$request->project_file.'_'.$data->id.".".$ext),
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
        return view('applicationForms.show',[
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
        //
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
        //
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