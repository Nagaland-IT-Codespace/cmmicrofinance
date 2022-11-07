@extends('layouts.dashboard')
@section('content')
{{-- Change password form below --}}

<div class="card">
    <div class="card-header bg-primary">
        Add User Details
    </div>
    <div class="card-body">
        <form class="" action="{{ route('changePassword') }}" method="post">
            @csrf
            <div class="row ">
                <div class="form-group col-md-6">
                    <label for="oldPassword">Current Password</label>
                    <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
                </div>
                {{-- new password --}}
                <div class="form-group col-md-6">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-sm btn-primary">Change password</button>
        </form>


    </div>
</div>




@endsection
