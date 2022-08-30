@extends('layouts.page')
@section('content')
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-info">
                        <h3>Chief Minister's Micro Finance Initiative</h3>
                        <p>
                            Office of the Agriculture Production Commissioner <br>
                            New Secretariate Complex<br>
                            Kohima, Nagaland<br><br>
                            <strong>Phone:</strong> <br>
                            <strong>Email:</strong> cmmfi@nagaland.gov.in<br>
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Create Grievance form below -->
                    <div class="card shadow-lg rounded">
                        <div class="card-header text-center">
                            <h4>Submit Grievance</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('grievance.store') }}" method="POST">
                                @csrf
                                {{-- Name --}}
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name">
                                </div>
                                {{-- Email --}}
                                <div class="form-group mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email">
                                </div>
                                {{-- Mobile --}}
                                <div class="form-group mb-3">
                                    <label class="form-label" for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="Enter Mobile">
                                </div>
                                {{-- seelct scheme --}}
                                <div class="form-group mb-3">
                                    <label class="form-label" for="scheme">Select Scheme</label>
                                    <select class="form-control" id="scheme_id" name="scheme_id">
                                        <option value="">Select Scheme</option>
                                        @foreach ($schemes as $scheme)
                                            <option value="{{ $scheme->id }}">{{ $scheme->scheme_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Select Department --}}
                                <div class="form-group mb-3">
                                    <label class="form-label" for="department">Select Department</label>
                                    <select class="form-control" id="dept_id" name="dept_id">
                                        <option value="">Select Department</option>
                                        @foreach ($depts as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Select District --}}
                                <div class="form-group mb-3">
                                    <label class="form-label" for="district">Select District</label>
                                    <select class="form-control" id="district_id" name="district_id">
                                        <option value="">Select District</option>
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Message --}}
                                <div class="form-group mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                </div>


                                <div class="form-group mb-3 text-center">
                                    {{-- Form Submit button --}}
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection
