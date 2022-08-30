@extends('layouts.dashboard')
@section('content')






<!-- script for the search function -->


@if(Session::has('Scheme Inactive'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Oops',
			text: 'The Scheme is inactive.',
			type: 'error',
			shadow: true
		});
	});
</script>
@endif
@if(Session::has('Submitted'))
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Your application has been submitted.',
			type: 'success',
			shadow: true
		});
	});
</script>
@endif
@endsection
