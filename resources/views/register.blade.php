@extends('layouts.noslidelayout')
@section('title', 'Welcome')

@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Register as New Member</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                	<div class="panel panel-default">
  							<div class="panel-body">
 								<form method="POST" action="/auth/register" role="form">{!! csrf_field() !!}
								    <div class="col-md-6">
								    	<div class="form-group">
									        <label for="name">Name</label>
									        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
								    	</div>
								
									    <div>
									    	<div class="form-group">
										        <label for="email">Email</label>
										        <input type="email" class="form-control"  name="email" value="{{ old('email') }}">
									        </div>
									    </div>
								    	<div class="form-group">
									    	<label for="password">Password</label>
									        <input type="password" class="form-control"  name="password">
								   	 	</div>
								   	 </div>
								
								    <div class="col-md-6">
								        <label for="password_confirmation">Confirm Password</label>
								        <input type="password" class="form-control"  name="password_confirmation">
								    </div>
								
								    <div class="col-md-12">
								        <button type="submit">Register</button>
								    </div>
								</form>
  							</div>
						</div>            
                </div>
            </div>
        </div>
    </div>
@endsection