<nav class="navbar navbar-expand-sm principal">
	<div class="container">
		<a class="navbar-brand" href="#"><img alt="Logo"
			src="{{ asset('LaravelComingSoon/images/logo-white.png') }}"></a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
			data-target="#navbarText" aria-controls="navbarText"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			@if(!empty($NavItems))
			<ul class="navbar-nav mr-auto">

			</ul>
			@endif @if(!empty($header['NavbarText'])) <span class="navbar-text ml-sm-auto">
				@if( is_array($header['NavbarText']) ) 
						@foreach($header['NavbarText'] as $value) <span>{{$value['item']}}</span>@endforeach 								
				@else {{$header['NavbarText']}} @endif
			</span> @endif
		</div>
	</div>
</nav>
<!-- 
 1- cette class doit etre dans les  variables:
 navbar-light bg-success principal
 
 2 il ya id qui doit etre dynamique. (navbarText)
 
 
 -->