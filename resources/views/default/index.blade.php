@extends('default.layouts.layout')

@section('header')
	@parent
@endsection

@section('menu')
	@parent
@endsection

@section('sidebar')
	
	<div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>
@endsection
 @section('content')
      @include('default.content')
        @endsection