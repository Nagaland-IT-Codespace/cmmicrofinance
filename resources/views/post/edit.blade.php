@extends('layouts.dashboard')
@section('content')
<style media="screen">
  .typeInput{display:none;}
</style>
<header class="page-header">
  <h2>Edit Post</h2>

  <div class="right-wrapper text-right">
    <ol class="breadcrumbs">
      <li>
        <a href="index.html">
          <i class="bx bx-home-alt"></i>
        </a>
      </li>
      <li><span>Dashboard</span></li>
      <li><span>Edit Post</span></li>
    </ol>
    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
  </div>
</header>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <header class="card-header">
        <div class="card-actions">
          <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
        </div>
        <h2 class="card-title">Edit Post</h2>
      </header>
      <div class="card-body">
        <div class="row">
          <div class="col-md-9">
            <form class="" action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="_method" value="PUT">
              <x-form-input label="Title" value="{{$post->title}}" type="text" name="title" class="form-control"/>
              <div class="form-group category" id="content">
                <label for="content control-label">Content</label>
                <textarea name="content" class="content form-control"></textarea>
              </div>
              <div class="form-group category" id="file">
                <label for="control-label">Upload file</label>
                <input type="file" name="file" class="form-control">
              </div>
              <div class="form-group category" id="link">
                <label for="control-label">Link</label>
                <input type="text" name="link" class="form-control" value="{{$post->link}}">
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
                <option value="" selected disable>Select..</option>
                <option value="Notification">Notification</option>
                <option value="Post">Post</option>
              </x-form-select>

            <x-form-input label="Post Date" value="{{\Carbon\Carbon::parse($post->post_date)->format('d-m-Y')}}" type="text" name="post_date" class="form-control" id="post_date" readonly required/>
            <button type="submit" class="btn btn-primary btn-block mt-4">Update</button>
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
            view: { title: 'View', items: 'code | visualaid visualchars visualblocks' },
            insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
            format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
            tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
            table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
          },
        plugins: 'code,image,link,table',
        init_instance_callback : function(editor) {
          editor.setContent('{!! preg_replace( "/\r|\n/","",$post->content) !!}');
      },
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
    $('#post_date').datepicker({
      dateFormat: 'dd-mm-yy'
    });

    @if(Session::has('success'))
    new PNotify({
      title: 'Success',
      text: '{{Session::get("success")}}',
      type: 'success',
      delay:1500,
      shadow: true
    });
    @endif
    // initialize category
    @if($post->type !== "POST")
    $('#content').hide();
    @endif
    @if($post->type !== "LINK")
    $('#link').hide();
    @endif
    @if($post->type !== "FILE")
    $('#file').hide();
    @endif

    // category change function
    $('#type').change(function(){
      $('.category').hide();
      if($(this).val() == "FILE")
      {
        $('#file').show();
      }else if($(this).val() == "LINK")
      {
        $('#link').show();
      }
      else if($(this).val() == "POST")
      {
        $('#content').show();
      }
    });

    // initialize select fields
    $('#category').val('{{$post->category}}');
    $('#type').val('{{$post->type}}');
  });
</script>
@endsection
