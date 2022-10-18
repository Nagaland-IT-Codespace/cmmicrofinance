@extends('layouts.dashboard')
@section('content')
<style media="screen">
  .typeInput{display:none;}
</style>
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <header class="card-header">
        <div class="card-actions">
          <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
        </div>
        <h2 class="card-title">Add Post</h2>
      </header>
      <div class="card-body">
        <div class="row">
          <div class="col-md-9">
            <form class="form-horizontal form-bordered" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <x-form-input label="Title" value="" type="text" name="title" class="form-control" required/>
              <div class="form-group category" id="content">
                <label for="content control-label">Content</label>
                <textarea name="content" class="content form-control"></textarea>
              </div>
              <div class="form-group row" id="file">
                <label class="col-lg-12 control-label pt-2">File Upload</label>
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
                        <input type="file" name="file"/>
                      </span>
                      <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group category" id="link">
                <label for="control-label">Link</label>
                <input type="text" name="link" class="form-control" value="">
              </div>
          </div>
          <div class="col-md-3">

            <x-form-select label="Type" name="type" class="form-control" required>
              <option value="" selected disable>Select..</option>
              <option value="FILE">File</option>
              <option value="POST">Post</option>
              <option value="LINK">Link</option>
            </x-form-select>

            <x-form-select label="Category" name="category" class="form-control" required>
              <option value="" selected>Select..</option>
              <option value="Notification">Notification</option>
              <option value="Post">Post</option>
            </x-form-select>

            <div class="form-group">
              <label for="post_date">Post Date</label>
              <input type="text" name="date" value="" data-plugin-datepicker class="form-control" readonly required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Publish</button>
          </form>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>

<script src="{{ asset('nodeModules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.content',
        height: 500,
        menu: {
            file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
            edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
            view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
            insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
            format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
            tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
            table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
          },
        plugins: 'code,image,link,table',
        images_upload_handler: function (blobInfo, success, failure) {
             var xhr, formData;
             xhr = new XMLHttpRequest();
             xhr.withCredentials = false;
             xhr.open('POST', '{{route("postFiles")}}');
             var token = '{{ csrf_token() }}';
             xhr.setRequestHeader("X-CSRF-Token", token);
             xhr.onload = function() {
                 var json;
                 if (xhr.status != 200) {
                     failure('HTTP Error: ' + xhr.status);
                     return;
                 }
                 json = JSON.parse(xhr.responseText);

                 if (!json || typeof json.location != 'string') {
                     failure('Invalid JSON: ' + xhr.responseText);
                     return;
                 }
                 success(json.location);
             };
             formData = new FormData();
             formData.append('file', blobInfo.blob(), blobInfo.filename());
             xhr.send(formData);
         }
    });



  $(function(){
    @if(Session::has('success'))
    new PNotify({
      title: 'Success',
      text: 'Post created successfully.',
      type: 'success',
      delay:1500,
      shadow: true
    });
    @endif

    // initialize category
    $('#link').hide();
    $('#file').hide();
    $('#type').val('POST');

    // category change function
    $('#type').change(function(){
      if($(this).val() == "FILE")
      {
        $('#file').show();
        $('#link').hide();
        $('#content').hide()
      }else if($(this).val() == "LINK")
      {
        $('#link').show();
        $('#file').hide();
        $('#content').hide();
      }
      else if($(this).val() == "POST")
      {
        $('#content').show();
        $('#link').hide();
        $('#file').hide();
      }
    });
  });
</script>
@endsection