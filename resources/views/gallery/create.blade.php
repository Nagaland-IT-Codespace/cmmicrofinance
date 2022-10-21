@extends('layouts.dashboard')
@section('content')
    <style media="screen">
        .typeInput {
            display: none;
        }
    </style>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>
                    <h2 class="card-title">Add Image</h2>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <form class="form-horizontal form-bordered" action="{{ route('gallery.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <x-form-input label="Title *" value="" type="text" name="title"
                                    class="form-control" required />
                                <x-form-input label="Caption" value="" type="text" name="caption"
                                    class="form-control" />

                                <div class="form-group row">
                                    <label class="col-lg-12 control-label pt-2">Upload Image *</label>
                                    <div class="col-lg-12">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="fas fa-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileupload-exists">Change</span>
                                                    <span class="fileupload-new">Select file</span>
                                                    <input type="file" name="image_path" required/>
                                                </span>
                                                <a href="#" class="btn btn-default fileupload-exists"
                                                    data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-swal-message/>
@endsection
