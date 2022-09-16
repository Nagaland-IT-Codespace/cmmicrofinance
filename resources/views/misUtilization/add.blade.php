@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Add Misutilization
      </div>
      <div class="card-body">
            <form class="" action="{{ route('misUtilization.store') }}" method="post">
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
                  <label for="date_last_release">Date of Last Release</label>
                  <input type="date" class="form-control" id="date_last_release" name="date_last_release" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="total_amount_released">Total Amount Released</label>
                  <input type="number" class="form-control" id="total_amount_released" name="total_amount_released" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="repayment_due">Repayment Due</label>
                  <select class="form-control" id="repayment_due" name="repayment_due" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="ac_regular">A/C Regular</label>
                  <select class="form-control" id="ac_regular" name="ac_regular" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="date_visit">Date of Physical Visit</label>
                  <input type="date" class="form-control" id="date_visit" name="date_visit" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="utilized">Utilized</label>
                  <select class="form-control" id="utilized" name="utilized" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nature_misutilization">Nature of Misutilization</label>
                  <input type="text" class="form-control" id="nature_misutilization" name="nature_misutilization" required>
                </div>
              </div>

            <hr>

            <div class="row">
              <div class="col-md-8 pt-5">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </div>
            </div>
            <br>
          </form>


      </div>
    </div>
  </div>

</div>

@endsection
