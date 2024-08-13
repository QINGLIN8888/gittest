@extends('layout.register')



@section('content_1')
<!-- Content
============================================= -->
<!-- <section id="content">
	<div class="content-wrap">
		<div class="container">

			<div class="accordion accordion-lg mx-auto mb-0" style="max-width: 550px;">

				<div class="accordion-header">
					<div class="accordion-icon">
						<i class="accordion-open bi-unlock"></i>
					</div>
					<div class="accordion-title">
						登入
					</div>
					@include('components.ErorrMessage')
				</div>
				<div>
					<form class="row mb-0" action="/user/auth/login" method="post">
						@csrf
						
						<div class="col-12 form-group">
							<label for="login-form-username">Email:</label>
							<input type="email:" id="email" name="email" value="{{old('email')}}" class="form-control">
						</div>

						<div class="col-12 form-group">
							<label for="login-form-password">Password:</label>
							<input type="password" id="password" name="password" value="{{old('password')}}" class="form-control">
						</div>

						<div class="col-12 form-group">
							<div class="d-flex justify-content-between">
								<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
								<a href="#">Forgot Password?</a>
							</div>
						</div>
					</form>
				</div>


			</div>

		</div>
	</div>
</section> -->

<!-- #content end -->
@endsection



@section('content')
<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax min-vh-100 include-header">
			<div class="slider-inner" style="background-image: url({{asset('one-page/images/page/3.jpg')}}); 
			background-position: top center;">

				<div class="vertical-middle">
					<div class="row m-0" style="position: relative; z-index: 2;">
						<div class="offset-md-6 col-md-5">
							<div class="col-padding">
								@include('components.ErorrMessage')
								<div class="heading-block border-bottom-0 mb-4">
									<h1 style="font-size: 22px;">Start your Free Trial</h1>
									<span style="font-size: 16px;" class="fw-light text-capitalize ls-1 mt-0">Get Started within 5 Minutes.</span>
								</div>
								<form class="row mb-0" action="/user/auth/login" method="post">
									@csrf
									<h3>登入</h3>						
										<div class="col-12 form-group">
											<label for="login-form-username">Email:</label>
											<input type="email" id="email" name="email" value="{{old('email')}}" class="form-control">
										</div>
										<div class="col-12 form-group">
											<label for="login-form-password">Password:</label>
											<input type="password" id="password" name="password" value="{{old('password')}}" class="form-control">
										</div>
										<div class="col-12 form-group">
											<div class="d-flex justify-content-between">
												<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
												<a href="#">Forgot Password?</a>
											</div>
										</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- #slider end -->

@endsection
