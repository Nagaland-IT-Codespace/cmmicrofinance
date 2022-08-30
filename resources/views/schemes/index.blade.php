@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Scheme Master</span>
        <button class="btn btn-primary btn-sm" style="float:right">Add Scheme</button>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Scheme Name</th>
              <th>Department</th>
              <th>Created By</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
