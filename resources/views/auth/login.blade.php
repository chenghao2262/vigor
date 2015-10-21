@extends('app')

@section('content')
	<div id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-6">
					<h1>欢迎使用Vigor</h1>
					<h2 class="subtitle">No need huge slogan, we believe in less is better</h2>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h2 class="signIn">Vigor</h2>
					<form class="form-inline signup" role="form" method="POST" action="{{ url('/auth/login') }}">
					  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					  	<div class="form-group">
						  	<div>
						  		<input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}" placeholder="Enter your email">
						  	</div>
					    	<div>
					    		<input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Enter your password">
					    	</div>
					    	<!-- <div class="checkbox"> -->
								<label style="color=#fff;">
									<input type="checkbox" name="remember"> Remember Me
								</label>
							<!-- </div> -->
							<div>
							  	<button type="submit" class="btn btn-theme">Sign In</button>
							  	<button type="button" class="btn btn-theme" onclick="location.href='{{ url('/password/email') }}'">Forget password</button>
							</div>
						</div>
					</form>
					

					<h2 class="signIn">新来Vigor?</h2>
					<form class="form-inline signup" role="form" method="POST" action="{{ url('/auth/register') }}">
					  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					  	<div class="form-group">
						  	<div>
						  		<input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ old('name') }}" placeholder="Enter your username">
						  	</div>
					   		 <div>
					    		<input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}" placeholder="Enter your email address">
					    	</div>
					    	<div>
					    		<input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Enter your password">
					   	 	</div>
					   	 	<div>
					    		<input type="password" class="form-control" id="exampleInputEmail1" name="password_confirmation" placeholder="Confirm your password">
					   	 	</div>
					  		<div>
					  			<button type="submit" class="btn btn-theme btnm">Sign Up Vigor</button>
					 		</div>
					 	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
					<p class="copyright">Copyright &copy; 2015 - Designed by <a href="#">VIGOR lowbee team</a></p>
			</div>
		</div>		
	</div>	
	</div>
@endsection
