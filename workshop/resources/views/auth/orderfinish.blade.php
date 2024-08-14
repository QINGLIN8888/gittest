
@extends('layout.master')

@section('content')		
        
        <!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax dark min-vh-60 min-vh-md-100 include-header">
			<div class="slider-inner" style="background: url({{asset('assets/images/chocolate.png')}}); background-size: cover; background-position: center center;">

				<div class="vertical-middle slider-element-fade">
					<div class="container text-center py-5">
						<div class="emphasis-title">
							<h4>
								<p>我們已收到您的訂單~</p>
								<p>敬請期待!</p>
							</h4>
						</div>
					<a href="/user/auth/home" class="button button-border button-light button-circle" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">回首頁</a>					</div>
				</div>

				<div class="video-wrap">
					<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
				</div>

			</div>
		</section><!-- #slider end -->
        
        
@endsection
