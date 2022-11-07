@extends('layouts.dashboard')
@section('content')
    <div class="row">
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
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $data->name }}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $data->email }}" required>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile No</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" minlength="10"
                                    maxlength="10" value="{{ $data->mobile }}" required>
                            </div>
                            @if (Auth::user()->role != 'LBANK')
                                <div class="form-group col-md-6">
                                    <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="{{ $data->role }}" selected>{{ $data->role }}</option>
                                        <option disabled> -- Select -- </option>
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="DC">DC</option>
                                        <option value="DEPT">DEPT</option>
                                    </select>
                                </div>
                            @endif
                        </div>

                        <div class="row pt-2">
                            <div class="form-group col-md-6">
                                <label for="district">District</label>
                                <select class="form-control" id="district" name="district">

                                    <option disabled> -- Select -- </option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}"
                                            {{ $district->id == $data->district ? 'selected' : '' }}>{{ $district->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @if (Auth::user()->role == 'LBANK')
                                {{-- Add bank --}}
                                @isset($banks)
                                    <div class="form-group col-md-6">
                                        <label for="bank">Bank</label>
                                        <select class="form-control" id="bank" name="bank">
                                            <option disabled> -- Select -- </option>
                                            @foreach ($banks as $bank)
                                                <option value="{{ $bank->id }}"
                                                    {{ $bank->id == $data->bank ? 'selected' : '' }}>
                                                    {{ $bank->name }}:{{ $bank->branch }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                @endisset
                            @endif
                            @if (Auth::user()->role != 'LBANK')
                                <div class="form-group col-md-6">
                                    <label for="dept">Department</label>
                                    <select class="form-control" id="dept" name="dept">
                                        <option value="{{ $data->dept }}" selected>{{ $data->dept }}</option>
                                        <option disabled> -- Select -- </option>
                                        @foreach ($depts as $dept)
                                            <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-sm btn-primary">Update User Details</button>
                    </form>


                </div>
            </div>
        </div>

    </div>

@endsection
