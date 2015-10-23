@extends('layouts.noslidelayout')
@section('title', 'Login')

@section('content')

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Login Member</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page title area -->

{!! csrf_field() !!}
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<form method="POST" action="/auth/login">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label> <input
									type="email" class="form-control" id="email" value="{{ old('email') }}"
									placeholder="Email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label> <input
									type="password" class="form-control" id="password"
									placeholder="Password">
							</div>
							<div class="checkbox">
								<label> <input type="checkbox"> Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-default">Login</button>
							<a href="register" class="pull-right">Register</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection