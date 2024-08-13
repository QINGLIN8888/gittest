<!-- 指定繼承 layout.master 母模板 --> 
<!--被引用的view-->
@extends('layout.register') 

<!-- 傳送資料到母模板，並指定變數為 title -->
<!--在主要的view中不是固定的樣式需要引入參數的都這-->

<!-- 傳送資料到母模板，並指定變數為 content -->
<!--主要的view-->
@section('content') 

<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax min-vh-100 include-header">
			<div class="slider-inner" style="background-image: url({{asset('one-page/images/page/3.jpg')}}); background-position: top center;">

				<div class="vertical-middle">
					<div class="row m-0" style="position: relative; z-index: 2;">
						<div class="offset-md-6 col-md-5">
							<div class="col-padding">
								@include('components.ErorrMessage')
								<div class="heading-block border-bottom-0 mb-4">
									<h1 style="font-size: 22px;">Start your Free Trial</h1>
									<span style="font-size: 16px;" class="fw-light text-capitalize ls-1 mt-0">Get Started within 5 Minutes.</span>
								</div>
								<form class="row mb-0" action="" method="post">
										@csrf
										<h3>註冊</h3>
								
										<div class="row">
											<div class="col-12 form-group">
												<label>暱稱:</label>
												<input type="text" name="nickname" id="nickname" class="form-control required" value="{{old('nickname')}}" placeholder="輸入名稱">											
											</div>

											<div class="col-12 form-group">
												<label>email:</label>
												<input type="email" name="email" id="email" class="form-control required" value="{{old('email')}}" placeholder="輸入帳號">
											</div>
											<div class="col-12 form-group">
												<label>密碼:</label>
												<input type="text" name="password" id="password" class="form-control required" value="{{old('password')}}" placeholder="輸入密碼">
											</div>
											<div class="col-12 form-group">
										<label>帳號類型:</label><br>

										<div class="form-check form-check-inline">
											@if( old('type') == 'G' )										
											<input class="form-check-input" type="radio" name="type" id="type" value="G" checked>			
											@else
											<input class="form-check-input" type="radio" name="type" id="type" value="G">
											@endif
											<label class="form-check-label text-transform-none" for="type">一般會員</label>
										</div>
										<div class="form-check form-check-inline">
											@if( old('type') == 'A' )
											<input class="form-check-input" type="radio" name="type" id="type" value="A" checked>
											@else
											<input class="form-check-input" type="radio" name="type" id="type" value="A">
											@endif
											<label class="form-check-label text-transform-none" for="type">管理者</label>

										</div>
										<div class="col-12">
										<button type="submit" class="btn btn-secondary">Register</button>
									</div>

											
										</div>
									</form>
								<p class="mb-0"><small class="fw-light"><em>* No Credit Card Required</em></small></p>
							</div>
						</div>
					</div>
				</div>

				<a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="bi-chevron-down infinite animated fadeInDown"></i></a>

			</div>
		</section><!-- #slider end -->

@endsection