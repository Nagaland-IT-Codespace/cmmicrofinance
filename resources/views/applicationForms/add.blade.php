@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Add New Application
      </div>
      <div class="card-body">
          <form class="" action="{{ route('applicationForm.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row pt-2">
              <div class=" col-md-6">
                <div class="form-group">
                  <label for="scheme_id">Scheme</label>
                  <select class="form-control" id="scheme_id" name="scheme_id">
                    <option selected disabled> -- Select -- </option>
                    @foreach($schemes as $scheme)
                    <option value="{{ $scheme->id }}">{{ $scheme->scheme_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="proposal_from">Company Type</label>
                <select class="form-control" id="proposal_from" name="proposal_from">
                  <option selected disabled> -- Select -- </option>
                  <option value="INDIVIDUAL">INDIVIDUAL</option>
                  <option value="SHG">SHG</option>
                  <option value="FPO">FPO</option>
                </select>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-4">
                <label for="district">District</label>
                <select class="form-control" id="district" name="district">
                  <option selected disabled> -- Select -- </option>
                  @foreach($districts as $district)
                  <option value="{{ $district->id }}">{{ $district->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="block">Block</label>
                <input type="text" class="form-control" id="block" name="block" required>
              </div>

              <div class="form-group col-md-4">
                <label for="village">Village</label>
                <input type="text" class="form-control" id="village" name="village" required>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-4">
                <label for="proposal_title">Title of Proposal</label>
                <input type="text" class="form-control" id="proposal_title" name="proposal_title" required>
              </div>

              <div class="form-group col-md-4">
                <label for="name_of_proposee">Name of Proposee</label>
                <input type="text" class="form-control" id="name_of_proposee" name="name_of_proposee" required>
              </div>

              <div class="form-group col-md-4">
                <label for="address_of_proposee">Address of Proposee</label>
                <input type="text" class="form-control" id="address_of_proposee" name="address_of_proposee" required>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-4">
                <label for="expected_outcome">Expected Outcome</label>
                <input type="text" class="form-control" id="expected_outcome" name="expected_outcome" required>
              </div>

              <div class="form-group col-md-4">
                <label for="project_duration">Project Duration (in months)</label>
                <input type="number" class="form-control" id="project_duration" name="project_duration" maxlength="2" required>
              </div>

              <div class="form-group col-md-4">
                <label for="project_outlay">Project Outlay (in INR)</label>
                <input type="number" class="form-control" id="project_outlay" name="project_outlay" required>
              </div>
            </div>

            <div class="row pt-2">
              <div class="col-md-12">
                  <x-form-upload label="Upload the Project Proposal" name="project_file" required/>
              </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </form>


      </div>
    </div>
  </div>

</div>

@endsection
