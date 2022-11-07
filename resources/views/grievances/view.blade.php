@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Grievances</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p><b>Name: </b>{{ $data->name }}</p>
                            <p><b>Mobile:</b> {{ $data->mobile }}</p>
                            <p><b>Email:</b> {{ $data->email }}</p>
                            <p><b>Scheme:</b> {{ $data->scheme->scheme_name }}</p>
                            <p><b>Department: </b>{{ $data->dept->name }}
                                {{-- Button to toggle modal --}}
                                <button type="button" class="btn btn-primary m-1" data-toggle="modal"
                                    data-target="#transferDept">
                                    Transfer Department
                                </button>
                            </p>
                            <p><b>District:</b> {{ $data->district->name }}</p>
                            <p><b>Message: </b>{{ $data->message }}</p>
                        </div>
                        <hr>
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#sendEmail">Reply</a> | <a href="{{ route('grievance.index') }}"
                            class="btn btn-sm btn-danger">Back</a> | <a href="#" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#transferLogs">View Transfer History</a>
                    </div>


                </div>
            </div>
        </div>
    </div>

    {{-- Create boostrap 5 modal below with form for update --}}
    <div class="modal fade" id="transferDept" tabindex="-1" aria-labelledby="transferDeptLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transferDeptLabel">Transfer Department</h5>
                    {{-- Close modal button --}}


                </div>
                <div class="modal-body">
                    <form action="{{ route('grievance.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="dept_id">Department</label>
                            <select name="dept_id" id="dept_id" class="form-control">
                                <option value="">Select Department</option>
                                @foreach ($departments as $dept)
                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dept_id">Reason for Transfer</label>
                            <textarea name="reason" id="reason" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Transfer</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Create boostrap 5 modal for sending email --}}
    <div class="modal fade" id="sendEmail" tabindex="-1" aria-labelledby="sendEmailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sendEmailLabel">Send Email</h5>

                </div>
                <div class="modal-body">
                    {{-- form with email,subject and body --}}
                    <form action="{{ route('grievanceReply.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="grievance_id" value="{{$data->id}}" />
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ $data->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="reply" id="body" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                            <button class="btn btn-default modal-dismiss"  data-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Create bootstrap 5 modal to show grievance transfer logs --}}
    <div class="modal fade" id="transferLogs" tabindex="-1" aria-labelledby="transferLogsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transferLogsLabel">Transfer Logs</h5>
                   </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>From Dept</th>
                                <th>To Dept</th>
                                <th>Transfered On</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->grievanceTransferLogs as $log)
                                <tr>
                                    <td>{{ $log->fromDept->name }}</td>
                                    <td>{{ $log->toDept->name }}</td>
                                    <td>{{ $log->created_at }}</td>
                                    <td>{{ $log->reason }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Cancel button --}}
                    <button class="btn btn-default modal-dismiss"  data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection
