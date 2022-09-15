@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Update Application Details
      </div>
      <div class="card-body">
            <table class="table table-sm table-striped">
              <tr>
                <td>Beneficiary Name: </td>
                <td>{{ $data->name_of_proposee }}</td>
              </tr>
              <tr>
                <td>Address: </td>
                <td>{{ $data->address_of_proposee }}</td>
              </tr>
              <tr>
                <td>Mobile: </td>
                <td>{{ $data->mobile }}</td>
              </tr>
              <tr>
                <td>Name of Proposal: </td>
                <td>{{ $data->proposal_title }}</td>
              </tr>
              <tr>
                <td>TFO as per Proposal: </td>
                <td>{{ $data->project_outlay }}</td>
              </tr>
            </table>

            <form class="" action="{{ route('appReceivedSanctioned.store') }}" method="post">
              @csrf
              <input type="hidden" name="scheme_id" value="{{ $data->scheme_id }}">
              <input type="hidden" name="app_id" value="{{ $data->id }}">

            <div class="row pt-2">
              <div class=" col-md-6">
                <div class="form-group">
                  <label for="bank_id">Bank & Branch Assigned</label>
                  <select type="text" class="form-control" id="bank_id" name="bank_id" required>
                    <option selected disabled>--Select--</option>
                    @foreach($banks as $item)
                    <option value="{{ $item->id }}" @if ($data->bank_id == $item->id) Selected @endif>{{ $item->name }} : {{ $item->branch }}</option>
                    @endforeac
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group col-md-6">
                  <label for="eligible_bank_loan">Eligible Bank Loan</label>
                  <input class="form-control" type="number" id="eligible_bank_loan" name="eligible_bank_loan"  required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="bank_receipt_date">Date of Receipt by Bank</label>
                  <input type="date" class="form-control" id="bank_receipt_date" name="bank_receipt_date" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="amount_sanctioned">Amount Sanctioned</label>
                  <input type="number" class="form-control" id="amount_sanctioned" name="amount_sanctioned" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="margin_money">Margin Money</label>
                  <input type="number" class="form-control" id="margin_money" name="margin_money" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="subsidy_claimed">Subsidy Claimed</label>
                  <input type="number" class="form-control" id="subsidy_claimed" name="subsidy_claimed" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="subsidy_received">Subsidy Received</label>
                  <input type="number" class="form-control" id="subsidy_received" name="subsidy_received" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="date_of_sanction">Date of Sanction</label>
                  <input type="date" class="form-control" id="date_of_sanction" name="date_of_sanction" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="delay_reason">Reason for Delay (if any)</label>
                  <input type="text" class="form-control" id="village" name="delay_reason" >
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
