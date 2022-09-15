@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Banks</span>
        @if(Auth::User()->role == 'BANK')
        <a href="{{ route('bankMaster.create') }}"class="btn btn-primary btn-sm" style="float:right">Add New Bank</a>
        @endif
      </div>
      <div class="card-body">
        <table class="table table-striped table-sm datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Beneficiary Name</th>
              <th>Address</th>
              <th>Mobile</th>
              <th>TFO</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->name_of_proposee }}</td>
              <td>{{ $item->address_of_proposee }}</td>
              <td>{{ $item->mobile }}</td>
              <td>{{ $item->project_outlay }}</td>
              <td>{{ $item->status }} </td>
              <td>
                <a href="{{ route('appReceivedSanctioned.show', $item->id) }}" class="btn btn-sm btn-dark">Update Info</a>
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
