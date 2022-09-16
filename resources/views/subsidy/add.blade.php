@extends('layouts.dashboard')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    Add New Subsidy
                </div>
                <div class="card-body">
                    <form class="" action="{{ route('subsidy.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class=" col-md-6">
                                <div class="form-group">
                                    <label for="bank_id">Bank & Branch</label>
                                    <select type="text" class="form-control" id="bank_id" name="bank_id" required>
                                        <option selected disabled>--Select--</option>
                                        @foreach ($banks as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }} :
                                                {{ $item->branch }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dlic_meeting_date">Date of DLIC Meeting</label>
                                    <input type="date" name="dlic_meeting_date" class="form-control"
                                        value="{{ old('dlic_meeting_date') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rate_of_receipt_applications">Rate of receipt of Applications by
                                        Bank</label>
                                    <input type="text" name="rate_of_receipt_applications" class="form-control"
                                        value="{{ old('rate_of_receipt_applications') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_of_applications_received">No. of Applications received</label>
                                    <input type="number" name="no_of_applications_received" class="form-control"
                                        value="{{ old('no_of_applications_received') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount_loan_sanctioned">Amount of loan sanctioned</label>
                                    <input type="number" name="amount_loan_sanctioned" class="form-control"
                                        value="{{ old('amount_loan_sanctioned') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="total_eligible_subsidy">Total Eligible Subsidy</label>
                                    <input type="number" name="total_eligible_subsidy" class="form-control"
                                        value="{{ old('total_eligible_subsidy') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_claim_subsidy">Date of Claim for subsidy</label>
                                    <input type="date" name="date_claim_subsidy" class="form-control"
                                        value="{{ old('date_claim_subsidy') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_receipt_subsidy">Date of receipt of subsidy</label>
                                    <input type="date" name="date_receipt_subsidy" class="form-control"
                                        value="{{ old('date_receipt_subsidy') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount_subsidy_released">Amount of subsidy released</label>
                                    <input type="number" name="amount_subsidy_released" class="form-control"
                                        value="{{ old('amount_subsidy_released') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount_subsidy_outstanding">Amount of subsidy O/S</label>
                                    <input type="number" name="amount_subsidy_outstanding" class="form-control"
                                        value="{{ old('amount_subsidy_outstanding') }}">
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
