@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Scheme Master</span>
        <a class="btn btn-primary btn-sm modal-with-move-anim" style="float:right" href="#addSchemeModal">Add Scheme</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Sl No.</th>
                <th>Scheme Name</th>
                <th>Department</th>
                <th>Created By</th>
                <th>Created On</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->scheme_name}}</td>
                <td>{{$item->dept->name}}</td>
                <td>
                  @if($item->user)
                  {{$item->user->name}}
                  @endif
                </td>
                <td>{{Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$data->links()}}
        </div>

      </div>
    </div>
  </div>
</div>

<!-- modal -->
<div id="addSchemeModal" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
	<section class="card">
		<header class="card-header">
			<h2 class="card-title">Add Scheme</h2>
		</header>
		<div class="card-body">
			<div class="modal-wrapper">
        <form class="" action="{{route('schemeMaster.store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="">Scheme Name</label>
            <input type="text" name="scheme_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Department Name</label>
            <select name="dept_id" class="form-control" required>
              <option value="">Select</option>
              @foreach($department as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
          </div>
			</div>
		</div>
		<footer class="card-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary" type="submit">Submit</button>
        </form>
					<button class="btn btn-default modal-dismiss">Cancel</button>
				</div>
			</div>
		</footer>
	</section>
</div>

@if(Session::has('scheme added'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Scheme Added.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif
@endsection
