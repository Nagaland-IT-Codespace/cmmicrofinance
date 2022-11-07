@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    Add User Details
                </div>
                <div class="card-body">
                    <form class="" action="{{ route('userMaster.store') }}" method="post">
                        @csrf
                        <div class="row ">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile No</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" minlength="10"
                                    maxlength="10" required>
                            </div>
                            @if (Auth::user()->role != 'LBANK')
                            <div class="form-group col-md-6">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option selected disabled> -- Select -- </option>
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="DC">DC</option>
                                    <option value="DEPT">DEPT</option>
                                </select>
                            </div>
                            @endif

                            <div class="form-group col-md-6">
                                <label for="district">District</label>
                                <select class="form-control" id="district" name="district">
                                    <option selected disabled> -- Select -- </option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if (Auth::user()->role == 'LBANK')
                                {{-- Add bank --}}
                                @isset($banks)
                                <div class="form-group col-md-6">
                                    <label for="bank">Bank</label>
                                    <select class="form-control" id="bank" name="bank">
                                        <option selected disabled> -- Select -- </option>
                                        @foreach ($banks as $bank)
                                            <option value="{{ $bank->id }}">{{ $bank->name }} : {{$bank->branch}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endisset
                            @endif
                            @if (Auth::user()->role != 'LBANK')
                            <div class="form-group col-md-6">
                                <label for="dept">Department</label>
                                <select class="form-control" id="dept" name="dept">
                                    <option selected disabled> -- Select -- </option>
                                    @foreach ($depts as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-sm btn-primary">Create New User</button>
                    </form>


                </div>
            </div>
        </div>

    </div>

@endsection
