@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Manage Sanctioned Applications</span>
      </div>
      <div class="card-body">
         <div class="table-responsive">
           <table class="table table-striped table-sm datatable">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Beneficiary Name</th>
                 <th>TFO</th>
                 <th>Eligible Loan</th>
                 <th>Date of Sanction</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach($data as $item)
               <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $item->appForm->name_of_proposee }}</td>
                 <td>{{ $item->appForm->project_outlay }}</td>
                 <td>{{ $item->eligible_bank_loan }}</td>
                 <td>{{ $item->date_sanctioned }} </td>
                 <td> <a href="{{ route('beneficiarySanction.edit', $item->id) }}" class="btn btn-sm btn-dark">View/Update</a> </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>

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
