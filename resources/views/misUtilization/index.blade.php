@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Manage Misutilization</span>
      </div>
      <div class="card-body">
        <a href="{{ route('misUtilization.create') }}" class="btn btn-sm btn-primary">Add</a>
        <hr>
        <table class="table table-striped table-sm datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Beneficiary Name</th>
              <th>Scheme</th>
              <th>Bank</th>
              <th>Total Amount Released</th>
              <th>Date of Last Release</th>
              <th>Repayment Due</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->appForm->name_of_proposee }}</td>
              <td>{{ $item->scheme->scheme_name }}</td>
              <td>{{ $item->bank->name }} : {{ $item->bank->branch }}</td>
              <td>{{ $item->total_amount_released }}</td>
              <td>{{ Carbon\Carbon::parse($item->date_last_release)->format('d-m-Y') }}</td>
              <td>{{ $item->utilized }}</td>
              <td>
                <a href="{{ route('misUtilization.show', $item->id) }}" class="btn btn-sm btn-danger">View</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@if(Session::has('bank-added'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Bank has been added.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif

@if(Session::has('bank-updated'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Bank has been updated.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif

@endsection
