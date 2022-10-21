@extends('layouts.page')
@section('content')
    <div class="breadcrumbs d-flex align-items-center">
        <div class="container position-relative d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade">
            <h2>Notifications</h2>
            <ol>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Notifications</li>
            </ol>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr>
                                <td style="font-size:14px">{{ $item->title }}</td>
                                <td style="font-size:14px">{{ Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                                <td style="font-size:14px">
                                    <a href="{{Storage::url($item->link)}}" class="btn btn-primary btn-sm">View / Download</a>
                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <x-swal-message/>
@endsection
