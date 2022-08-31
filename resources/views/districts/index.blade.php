@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Districts</span>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-sm datatable">
                        <thead>
                            <tr>
                                <th>Name</th>


                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>                                    
                                        <a href="{{ route('districtMaster.edit', $item->id) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    @endsection
