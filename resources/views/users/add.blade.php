@extends('layouts.dashboard')
@section('content')
<div class="row">
  @include('dashboardPartials.card_data')
  @include('dashboardPartials.department_data')
</div>
@endsection
