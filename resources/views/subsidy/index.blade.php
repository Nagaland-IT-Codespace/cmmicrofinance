@extends('layouts.dashboard')
@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Manage Subsidy</span>
                    @if (Auth::User()->role == 'SBANK'|| Auth::User()->role == 'LBANK')
                        <a href="{{ route('subsidy.create') }}"class="btn btn-primary btn-sm" style="float:right">Add New
                            Subsidy Request</a>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table table-striped table-sm datatable">
                        <thead>
                            <tr>
                                <th>Bank Name</th>
                                <th>Date of DLIC Meeting</th>
                                <th>Rate of receipt of Applications by Bank</th>
                                <th>No. of Applications received</th>
                                <th>Amount of loan sanctioned</th>
                                <th>Total Eligible Subsidy</th>
                                <th>Date of Claim for subsidy</th>
                                <th>Date of receipt of subsidy</th>
                                <th>Amount of Subsidy released</th>
                                <th>Amount of subsidy O/S</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subsidies as $item)
                                <tr>
                                    <td>{{ $item->bank->name }}:{{ $item->bank->branch }}</td>
                                    <td>{{ $item->dlic_meeting_date }}</td>
                                    <td>{{ $item->rate_of_receipt_applications }}</td>
                                    <td>{{ $item->no_of_applications_received }}</td>
                                    <td>{{ $item->amount_loan_sanctioned }}</td>
                                    <td>{{ $item->total_eligible_subsidy }}</td>
                                    <td>{{ $item->date_claim_subsidy }}</td>
                                    <td>{{ $item->date_receipt_subsidy }}</td>
                                    <td>{{ $item->amount_subsidy_released }}</td>
                                    <td>{{ $item->amount_subsidy_outstanding }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @if (Session::has('subsidy-added'))
        <script type="text/javascript">
            $(document).ready(function() {
                new PNotify({
                    title: 'Success',
                    text: 'New Subsidy has been added.',
                    type: 'success',
                    shadow: true
                });
            });
        </script>
    @endif

    @if (Session::has('subsidy-updated'))
        <script type="text/javascript">
            $(document).ready(function() {
                new PNotify({
                    title: 'Success',
                    text: 'Subsidy has been updated.',
                    type: 'success',
                    shadow: true
                });
            });
        </script>
    @endif
@endsection
