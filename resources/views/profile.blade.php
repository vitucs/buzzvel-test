@extends('layout')

@section('content')
<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
                <p>Hello, my name is {{$profile->name}}!</p>
				<h1>My History</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="d-flex flex-row justify-content-center gap-2">
                    <a href="{{$profile->linkedin}}" class="btn btn-lg btn-outline-primary"><i class="fab fa-linkedin me-2"></i>LinkedIn</a>
                    <a href="{{$profile->github}}" class="btn btn-lg btn-outline-primary"><i class="fab fa-github me-2"></i>GitHub</a>
                </div>
			</div>
		</div>
	</div>
@stop