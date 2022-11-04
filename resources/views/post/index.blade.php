@extends('layouts.dashboard')
@section('content')

<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <header class="card-header">
        <a href="{{route('post.create')}}" class="btn btn-sm btn-primary" style="float:right">Add Post</a>
        <h2 class="card-title d-inline">Posts</h2>
      </header>
      <div class="card-body">
        <table class="table table-bordered table-striped mb-0" id="datatable-default">
          <thead>
            <tr>
              <th>Title</th>
              <th>Type</th>
              <th>Category</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr class="tr-{{$post->id}}">
              <td>{{$post->title}}</td>
              <td>{{$post->type}}</td>
              <td>{{$post->category}}</td>
              <td>{{\Carbon\Carbon::parse($post->date)->format('d M Y')}}</td>
              <td class="actions">
								<a href="{{route('post.edit',$post->id)}}"><i class="fas fa-pencil-alt"></i></a>
								<a class="mb-1 mt-1 mr-1 modal-with-zoom-anim ws-normal del-post" href="#deleteModal" class="delete-row" data-id="{{$post->id}}"><i class="far fa-trash-alt"></i></a>
							</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$posts->links()}}
      </div>
    </div>
  </div>
</div>

<!-- delete modal -->
<div id="deleteModal" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
  <section class="card">
    <header class="card-header">
      <h2 class="card-title">Are you sure?</h2>
    </header>
    <div class="card-body">
      <div class="modal-wrapper">
        <div class="modal-icon">
          <i class="fas fa-question-circle"></i>
        </div>
        <div class="modal-text">
          <p class="mb-0">Are you sure that you want to delete this Post?</p>
        </div>
      </div>
    </div>
    <footer class="card-footer">
      <div class="row">
        <div class="col-md-12 text-right">
          <button class="btn btn-primary modal-confirm">Confirm</button>
          <button class="btn btn-default modal-dismiss">Cancel</button>
        </div>
      </div>
    </footer>
  </section>
</div>


<!-- scripts -->
<script type="text/javascript">
$(document).ready(function(){
    var selectedId;
  $('.del-post').click(function(){
    selectedId = $(this).attr('data-id')
  });

  $('.modal-confirm').click(function(e){
    token = "{{csrf_token()}}";
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            id: selectedId,
            _token: token,
        };
        var type = "DELETE";
        var ajaxurl = "{{route('post.destroy',':id')}}";
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
              new PNotify({
          			title: 'Success!',
          			text: 'Post deleted.',
          			type: 'success',
                delay:1500,
                shadow: true
          		});
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});
  
</script>
@endsection
