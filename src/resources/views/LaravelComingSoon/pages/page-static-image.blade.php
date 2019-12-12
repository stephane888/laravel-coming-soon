@extends('LaravelComingSoon::LaravelComingSoon.layouts.default')
@section('content') @push('styles')
<link href="{{ asset('LaravelComingSoon/css/style.css') }}"
	rel="stylesheet">
@endpush
<div class="bg_img">
	<img src="{{ asset('LaravelComingSoon/images/background.jpg') }}"
		class="img-responsive" alt="">
</div>
@include('LaravelComingSoon::LaravelComingSoon.bootstrap4Components.Navbar')
<div class="container  ">
	<div class="main-body">
		<h1>Coming Soon</h1>
		@include('LaravelComingSoon::LaravelComingSoon.bootstrap4Components.countdown')
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, culpa
			doloribus eos fugit magni consectetur adipisicing.</p>
	</div>

</div>
@include('LaravelComingSoon::LaravelComingSoon.bootstrap4Components.NavbarFooter')
@endsection
