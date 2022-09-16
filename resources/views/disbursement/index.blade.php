@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Manage Disbursements</span>
      </div>
      <div class="card-body">
        <a href="{{ route('disbursement.create') }}" class="btn btn-sm btn-primary">Add</a>
        <hr>
        <table class="table table-striped table-sm datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Beneficiary Name</th>
              <th>Amount Disbursed</th>
              <th>Date of Disbursement</th>
              <th>Subsidy Credited to Loan A/C</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->appForm->name_of_proposee }}</td>
              <td>{{ $item->amount_disbursed }}</td>
              <td>{{ Carbon\Carbon::parse($item->date_of_disbursement)->format('d-m-Y') }}</td>
              <td>{{ $item->subsidy_credited_to_loan_ac }}</td>
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
