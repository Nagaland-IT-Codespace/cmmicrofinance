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
                <td>{{ $data->appForm->name_of_proposee }}</td>
              </tr>
              <tr>
                <td>Address: </td>
                <td>{{ $data->appForm->address_of_proposee }}</td>
              </tr>
              <tr>
                <td>Mobile: </td>
                <td>{{ $data->appForm->mobile }}</td>
              </tr>
              <tr>
                <td>Name of Proposal: </td>
                <td>{{ $data->appForm->proposal_title }}</td>
              </tr>
              <tr>
                <td>TFO as per Proposal: </td>
                <td>{{ $data->appForm->project_outlay }}</td>
              </tr>
              <tr>
                <td>Date of Sanction: </td>
                <td>{{ Carbon\Carbon::parse($data->date_sanctioned)->format('d-m-Y') }}</td>
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
                    <option value="{{ $item->id }}" @selected($data->bank_id == $item->id)>{{ $item->name }} : {{ $item->branch }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group col-md-6">
                  <label for="eligible_bank_loan">Eligible Bank Loan</label>
                  <input class="form-control" type="number" id="eligible_bank_loan" name="eligible_bank_loan" value="{{$data->eligible_bank_loan}}" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="date_receipt">Date of Receipt</label>
                  <input type="date" class="form-control" id="date_receipt" name="date_receipt" value="{{$data->date_receipt}}" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="date_sanctioned">Date of Sanction</label>
                  <input type="date" class="form-control" id="date_sanctioned" name="date_sanctioned" value="{{$data->date_sanctioned}}" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="first_disbursement_date">Date of 1st Disbursement</label>
                  <input type="date" class="form-control" id="first_disbursement_date" name="first_disbursement_date"  value="{{$data->first_disbursement_date}}" required>
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label for="delay_reason">Reason for Delay (if any)</label>
                  <input type="text" class="form-control" id="village" name="delay_reason" value="{{$data->delay_reason}}" >
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
