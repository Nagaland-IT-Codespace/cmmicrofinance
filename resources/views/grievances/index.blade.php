@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Grievances</span>
        <a href="{{ route('userMaster.create') }}"class="btn btn-primary btn-sm" style="float:right">Add User</a>
      </div>
      <div class="card-body">
        <table class="table table-striped table-sm datatable">
          <thead>
            <tr>
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Scheme</th>
              <th>Message</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->mobile }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->scheme->scheme_name }}</td>
              <td>{{ $item->message }}</td>
              <td>
                <a href="{{ route('grievance.show', $item->id) }}" class="btn btn-sm btn-danger">View</a>
                <a href="#" class="btn btn-sm btn-success">Reply</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@if(Session::has('replied'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Reply sent.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif

@endsection
