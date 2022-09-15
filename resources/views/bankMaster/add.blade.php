@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Add New Application
      </div>
      <div class="card-body">
          <form class="" action="{{ route('bankMaster.store') }}" method="post">
            @csrf

            <div class="row pt-2">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="name">Bank Name <sup style="color:red;">*</sup> </label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="branch">Branch <sup style="color:red;">*</sup> </label>
                  <input type="text" class="form-control" id="branch" name="branch" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="ifsc">IFSC</label>
                  <input type="text" class="form-control" id="ifsc" name="ifsc">
                </div>
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
