@extends('layouts.dashboard')
@section('content')
    <div class="row mt-5">
        {{-- <x-data-cards/> --}}
        @livewire('dashboard-cards')
        @livewire('scheme-wise-data')

        {{-- @include('dashboardPartials.info_cards', ['data' => $data]) --}}
        {{-- @include('dashboardPartials.department_data', ['districts' => $districts]) --}}
    </div>




    <!-- script for the search function -->
    @if (Session::has('Scheme Inactive'))
        <script type="text/javascript">
            $(document).ready(function() {
                new PNotify({
                    title: 'Oops',
                    text: 'The Scheme is inactive.',
                    type: 'error',
                    shadow: true
                });
            });
        </script>
    @endif
    @if (Session::has('Submitted'))
        <script type="text/javascript">
            $(document).ready(function() {
                new PNotify({
                    title: 'Success',
                    text: 'Your application has been submitted.',
                    type: 'success',
                    shadow: true
                });
            });
        </script>
    @endif
    <script>
        $(document).ready(function() {

            if (localStorage.getItem('visited')) {


            } else {
                $('#goToChangePasswordForm').modal('show');
                localStorage.setItem('visited', 'true');
            }
        });
    </script>
    {{-- changePasswordModal --}}
    <div class="modal fade" id="goToChangePasswordForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Do you wish to change your password?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('changePasswordForm') }}" class="btn btn-primary">Change Password</a>
                </div>
            </div>
        </div>
    </div>

@endsection
