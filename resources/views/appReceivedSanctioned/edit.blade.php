@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Update Application Details
      </div>
      <div class="card-body">
          <form class="" action="{{ route('applicationForm.update', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="scheme_code" value="{{ $data->scheme_id }}">
            <input type="hidden" name="district_code" value="{{ $data->district_id }}">

            <div class="row pt-2">
              <div class=" col-md-6">
                <div class="form-group">
                  <label for="scheme">Scheme</label>
                  <input type="text" class="form-control" id="scheme" name="scheme" value="{{ $data->scheme->scheme_name }}" readonly required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group col-md-6">
                  <label for="proposal_from">Company Type</label>
                  <input class="form-control" id="proposal_from" name="proposal_from" value="{{ $data->proposal_from }}" readonly required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="block">Block</label>
                  <input type="text" class="form-control" id="block" name="block" value="{{$data->block}}" readonly required>
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label for="village">Village</label>
                  <input type="text" class="form-control" id="village" name="village" value="{{ $data->village }}" readonly required>
                </div>
              </div>


            <div class="col-md-4">
              <div class="form-group">
                <label for="proposal_title">Title of Proposal</label>
                <input type="text" class="form-control" id="proposal_title" name="proposal_title" value="{{$data->proposal_title }}" readonly required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="name_of_proposee">Name of Proposee</label>
                <input type="text" class="form-control" id="name_of_proposee" name="name_of_proposee" value="{{$data->name_of_proposee}}" readonly required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="address_of_proposee">Address of Proposee</label>
                <input type="text" class="form-control" id="address_of_proposee" name="address_of_proposee" value="{{$data->address_of_proposee}}" readonly required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="expected_outcome">Expected Outcome</label>
                <input type="text" class="form-control" id="expected_outcome" name="expected_outcome" value="{{$data->expected_outcome}}" readonly required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="project_duration">Project Duration (in months)</label>
                <input type="number" class="form-control" id="project_duration" name="project_duration" maxlength="2" value="{{$data->project_duration}}" required>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="project_outlay">Project Outlay (in INR)</label>
                <input type="number" class="form-control" id="project_outlay" name="project_outlay" value="{{$data->project_outlay}}" required>
              </div>
            </div>
          </div>

            <div class="row pt-2">
              <div class="col-md-12">
                  <x-form-upload label="Upload the Project Proposal" name="project_file" required/>
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
