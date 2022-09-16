@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title"><b>Application Form for {{ $data->scheme->scheme_name }}</b></span>
      </div>
      <div class="card-body">
        <p><b>Name of Beneficiary:</b> {{ $data->appForm->name_of_proposee }}</p>
        <p><b>Name of Proposal:</b> {{ $data->appForm->proposal_title }}</p>
        <p><b>Total Amount Released:</b> {{ $data->total_amount_released }} </p>
        <p><b>Date of Last Release:</b> {{ Carbon\Carbon::parse($data->date_last_release)->format('d-m-Y') }}</p>
        <p><b>Repayments Due:</b> {{ $data->repayment_due }}</p>
        <p><b>A/C Regular:</b> {{ $data->ac_regular }}</p>
        <p><b>Date of Field Visit:</b> {{ Carbon\Carbon::parse($data->date_visit)->format('d-m-Y') }}</p>
        <p><b>utilized:</b> {{ $data->utilized }}</p>
        <p><b>Nature of Misutilization (if any):</b> {{ $data->nature_misutilization }}</p>
      </div>
    </div>
  </div>
</div>



@endsection
