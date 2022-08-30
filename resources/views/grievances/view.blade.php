@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Grievances</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <p><b>Name: </b>{{ $data->name }}</p>
            <p><b>Mobile:</b> {{ $data->mobile }}</p>
            <p><b>Email:</b> {{ $data->email }}</p>
            <p><b>Scheme:</b> {{ $data->scheme->scheme_name }}</p>
            <p><b>Department: </b>{{ $data->dept->name }}</p>
            <p><b>District:</b> {{ $data->district->name }}</p>
            <p><b>Message: </b>{{ $data->message }}</p>
          </div>
          <hr>
          <a href="#" class="btn btn-sm btn-primary">Reply</a> | <a href="#" class="btn btn-sm btn-danger">Back</a>
        </div>


      </div>
    </div>
  </div>
</div>



@endsection
