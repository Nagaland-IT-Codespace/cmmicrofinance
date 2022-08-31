@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Application Forms</span>
        @if(Auth::User()->role == 'DC')
        <a href="{{ route('applicationForm.create') }}"class="btn btn-primary btn-sm" style="float:right">Add New Application</a>
        @endif
      </div>
      <div class="card-body">
        <table class="table table-striped table-sm datatable">
          <thead>
            <tr>
              <th>Scheme</th>
              <th>Org. Type</th>
              <th>Location</th>
              <th>Title of Proposal</th>
              <th>Proposee Name</th>
              <th>Project Duration</th>
              <th>Project Outlay</th>
              <th>Project Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{ $item->scheme->scheme_name }}</td>
              <td>{{ $item->proposal_from }}</td>
              <td>{{ $item->district->name }},{{ $item->block }}, {{ $item->village }} </td>
              <td>{{ $item->proposal_title }}</td>
              <td>{{ $item->name_of_proposee }}</td>
              <td>{{ $item->project_duration }}</td>
              <td>{{ $item->project_outlay }}</td>
              <td>{{ $item->status }}</td>
              <td>
                <a href="{{ route('applicationForm.show', $item->id )}}" class="btn btn-sm btn-primary">View Form</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@if(Session::has('application-added'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'New Application has been added.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif

@if(Session::has('application-updated'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Application has been updated.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif

@endsection
