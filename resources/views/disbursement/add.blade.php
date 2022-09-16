@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Add Disbursement
      </div>
      <div class="card-body">
            <form class="" action="{{ route('disbursement.store') }}" method="post">
              @csrf
            <div class="row pt-2">
              <div class=" col-md-6">
                <div class="form-group">
                  <label for="app_id">Beneficiary Name</label>
                  <select type="text" class="form-control" id="app_id" name="app_id" required>
                    <option selected disabled>--Select--</option>
                    @foreach($appForms as $item)
                    <option value="{{ $item->id }}">{{ $item->name_of_proposee }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="date_of_disbursement">Date of Disbursement</label>
                  <input type="date" class="form-control" id="date_of_disbursement" name="date_of_disbursement" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="amount_disbursed">Amount Disbursed</label>
                  <input type="number" class="form-control" id="amount_disbursed" name="amount_disbursed" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="subsidy_credited_to_loan_ac">Subsidy Credited to Loan A/C</label>
                  <input type="number" class="form-control" id="subsidy_credited_to_loan_ac" name="subsidy_credited_to_loan_ac" required>
                </div>
              </div>

            <hr>

            <div class="row">
              <div class="col-md-8 pt-5">
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
              </div>
            </div>
            <br>
          </form>


      </div>
    </div>
  </div>

</div>

@endsection
