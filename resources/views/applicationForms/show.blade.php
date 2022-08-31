@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title"><b>Application Form for {{ $data->scheme->scheme_name }}</b></span>
      </div>
      <div class="card-body">
        <p><b>Name of Proposee:</b> {{ $data->name_of_proposee }}</p>
        <p><b>Organization Type:</b> {{ $data->proposal_from }}</p>
        <p><b>Address of Firm:</b> {{ $data->village}}, {{ $data->block}} Block, {{ $data->district->name }} </p>
        <p><b>Expected Outcome:</b> {{ $data->expected_outcome }}</p>
        <p><b>Project Duration (in months):</b> {{ $data->project_duration }}</p>
        <p><b>Project Outlay (in INR):</b> {{ $data->project_outlay }}</p>
        <p><a href="#" class="btn btn-sm btn-danger" target="_blank">View Complete Proposal Application</a> </p>
      </div>
    </div>
  </div>
</div>



@endsection