@extends('layouts.singlehome')

@section('content')

<!-- /NAVGATION -->
<!-- Page Header -->
<div id="page-header">
	<!-- section background -->
	<div class="section-bg" style="background-image: url({{ asset('himg/background-2.jpg') }});"></div>
	<!-- /section background -->

	<!-- page header content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header-content">
					<h1>CONTACT US</h1>
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li><a href="/contactus">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header content -->
</div>
<!-- /Page Header -->
</header>
<!-- /HEADER -->



<div class="container">

	<div class="row">

		<br><br><br><br>

		<div class="col-md-3">
		@if (session('response') )
                <div class="alert alert-success">
                    {{ session('response') }}
                </div>


                @endif
		</div>
		<div class="col-md-6">


		<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

				<div class="form-group">
					<label for="exampleInputEmail1">Email Address</label>
					<input type="email" class="form-control" required name="email"
						placeholder="Enter email">
                    
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Full Name</label>
                    <input type="text" class="form-control" name="name" required placeholder="Enter Full Name">
                    
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                
                <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" required placeholder="Enter Password">
                    
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                

                <div class="form-group">
					<label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                    
                  
				</div>
				
				<button type="submit" class="btn btn-primary">Register</button>
			</form>

		</div>
		<div class="col-md-6"></div>
	</div>

</div>
<br><br><br><br>




@endsection
