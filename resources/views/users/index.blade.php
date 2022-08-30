@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Scheme Master</span>
        <button class="btn btn-primary btn-sm" style="float:right">Add User</button>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Role</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Department</th>
              <th>District</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->role }}</td>
              <td>{{ $item->mobile }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->dept }}</td>
              <td>{{ $item->disrtrict }}</td>
              <td>
                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@if(Session::has('user-added'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'New User Created.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif

@if(Session::has('user-updated'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'User Details Updated.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif
@endsection
