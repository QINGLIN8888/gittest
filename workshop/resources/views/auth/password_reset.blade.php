@extends('layout.resetpassword_master')

@section('resetpassword')
		
<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<form id="forgot-password-form" name="forgot-password-form" class="row mb-0" action="{{route('password.email')}}" method="post">
										@csrf
										<div class="col-12 text-center">
											<h3>重設密碼</h3>
										</div>
										<div class="col-12 form-group">
											<label for="email-form-input">Email:</label>
											<div class="input-group toggle-password">
												<input id="email-form-input" class="form-control"
												name="email" type="email" value="{{old('email')}}" require autofocus>
												<button class="btn btn-outline-secondary bi-eye btn-password-toggle" type="button" style="border-color: #ced4da"></button>
											</div>
										</div>
										<div class="col-12 form-group">
											<label for="email-form-input">Email:</label>
											<div class="input-group toggle-password">
												<input id="email-form-input" class="form-control"
												name="email" type="email" value="{{old('email')}}" require autofocus>
												<button class="btn btn-outline-secondary bi-eye btn-password-toggle" type="button" style="border-color: #ced4da"></button>
											</div>
										</div>
										<div class="col-12 form-group">
											<div class="d-flex justify-content-between">
												<button class="btn btn-secondary m-0" type="submit">下一步</button>
											</div>
										</div>

									</form>
						</div>

					</div>

				</div>

			</div>
		</section><!-- #content end -->



		@endsection
