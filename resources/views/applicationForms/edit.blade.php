@extends('layouts.dashboard')
@section('content')
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Edit User Details
      </div>
      <div class="card-body">
          <form class="" action="{{ route('userMaster.update', $data->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required>
              </div>

              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}" required>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="mobile">Mobile No</label>
                <input type="text" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" value="{{$data->mobile}}" required>
              </div>

              <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                  <option value="{{$data->role}}" selected >{{$data->role}}</option>
                  <option disabled> -- Select -- </option>
                  <option value="ADMIN">ADMIN</option>
                  <option value="DC">DC</option>
                  <option value="DEPT">DEPT</option>
                </select>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="district">District</label>
                <select class="form-control" id="district" name="district">
                  <option value="{{$data->district}}" selected >{{$data->district}}</option>
                  <option disabled> -- Select -- </option>
                  @foreach($districts as $district)
                  <option value="{{ $district->id }}">{{ $district->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="dept">Department</label>
                <select class="form-control" id="dept" name="dept">
                  <option value="{{$data->dept}}" selected>{{$data->dept}}</option>
                  <option disabled> -- Select -- </option>
                  @foreach($depts as $dept)
                  <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-sm btn-primary">Update User Details</button>
          </form>


      </div>
    </div>
  </div>

</div>

@endsection
