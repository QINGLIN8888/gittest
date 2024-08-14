<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.shopmaster') 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('title') 





<!-- Page Title
============================================= -->
<section id="content">
			<div class="content-wrap">

				<div class="container">

					<h2 class="text-center">SHOP</h2>
			<div class="block-expand-categories flex-column flex-lg-row d-flex justify-content-center">
				<div class="expand-category bg-light" style="background-image: url({{asset('assets/images/bakery-1-4.jpg')}});">
					<h4><a href="#" class="text-light">麵包/Bread</a></h4>
				</div>

				<div class="expand-category bg-light" style="background-image: url({{asset('assets/images/cake-1.jpg')}});">
					<h4><a href="#" class="text-light">甜點/Dessert</a></h4>
				</div>

				<div class="expand-category bg-light" style="background-image: url({{asset('assets/images/fresh-food.jpg')}});">
					<h4><a href="#" class="text-light">食材小舖/Fresh Food</a></h4>
				</div>

				<div class="expand-category bg-light" style="background-image: url({{asset('assets/images/joinus.jpg')}});">
					<h4><a href="#" class="text-light">加入會員/Join Us</a></h4>
				</div>

				<div class="expand-category bg-light" style="background-image: url({{asset('assets/images/catering.jpg')}});">
					<h4><a href="#" class="text-light">輕食餐盒自由配/Catering Box</a></h4>
				</div>

			</div>
			</div>
			</div>
		</section><!-- .page-title end -->
@endsection 


@section('content') 

<section id="content" style="transform: none;">
			<div class="content-wrap pb-0" style="transform: none;">

				<div class="container" style="transform: none;">

					<!-- <a href="{{asset('assets/demo-skincare-login.html')}}"><img src="{{asset('assets/demos/skincare/images/banner.jpg')}}" alt=".." class="mb-3 mb-md-5 mb-xl-6 border border-color border-width-2"></a> -->

					<div class="row mb-3 mb-md-5 justify-content-md-between">

						<div class="col-md-3 order-2 order-md-1">

							<button type="button" class="button-filter button button-border border-color m-0 color h-bg-color h-text-light w-100">
								<span>Show Filter <i class="bi-arrow-down me-0 ms-2"></i> </span>
								<span><i class="bi-arrow-up"></i> Hide Filter</span>
							</button>

						</div>

						<div class="col-12 col-md-auto order-1 order-md-2 mb-2 mb-md-0">
							<div id="shop-filter-sorting" class="dropdown border-0">
								<button type="button" id="shop-filter-btn" class="button button-border border-color m-0 color h-bg-color h-text-light dropdown-toggle px-5 w-100 text-center" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="true" data-bs-offset="0, -1">
									Sorting
								</button>

								<ul class="shop-sorting dropdown-menu dropdown-menu-end shadow-sm border-0 w-100 py-0 rounded-0" aria-labelledby="shop-filter-btn">
									<li><a href="#" class="dropdown-item" data-sort-by="name_az"><span>A - Z Alphabetically</span></a></li>
									<li><a href="#" class="dropdown-item" data-sort-by="name_za"><span>Z - A Alphabetically</span></a></li>
									<li><a href="#" class="dropdown-item" data-sort-by="price_lh"><span>Least Expensive</span></a></li>
									<li><a href="#" class="dropdown-item" data-sort-by="price_hl"><span>Most Expensive</span></a></li>
								</ul>
							</div>

						</div>

					</div>

					<div class="row">
						<div class="col-md-3 skincare-filter sticky-sidebar-wrap" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
						<div class="scwStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><ul class="list-unstyled items-nav sticky-sidebar">
								<li><a href="{{route('user.auth.super')}}" class="text-dark font-body"><b>超人氣排行榜</b></a></li>
								<li><a href="#" class="text-dark font-body"><b>2024中秋禮盒</b></a></li>
								<li><a href="#" class="text-dark font-body"><b>涼到夏到 | 夏季新品兩件9折</b></a></li>
								<li><a href="#" class="text-dark font-body"><b>熱銷優惠</b></a></li>
								<li><a href="#" class="text-dark font-body"><b>甜點禮盒</b></a></li>
								<li><a href="#" class="text-dark font-body"><b>麵包果醬</b></a></li>

							<!-- </ul><hr><ul class="pt-4 list-unstyled position-relative ist-unstyled items-nav shop-filter custom-filter font-body" data-container="#shop" data-active-class="active-filter">
								<li class="widget-filter-reset active-filter"><a href="#" class="text-danger" data-filter="*">Clear</a></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-face">Face</a><div class="shop-filter-count">3</div></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-body">Body</a><div class="shop-filter-count">3</div></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-eyes">Eyes</a><div class="shop-filter-count">2</div></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-makeup">Makeup</a><div class="shop-filter-count">3</div></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-ayurvedic">Ayurvedic</a><div class="shop-filter-count">2</div></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-hair">Hair</a><div class="shop-filter-count">4</div></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-lotions">Moisturizers &amp; Lotions</a><div class="shop-filter-count">2</div></li>
								<li class="mb-1 d-flex justify-content-between align-items-center"><a href="#" data-filter=".sf-lips">Lips</a><div class="shop-filter-count">2</div></li>
							</ul> -->
							<hr class="my-5">
							<div class="d-flex align-items-center mt-5">
								<h5 class="mb-0 h6 font-body fw-normal">Filter by Price:</h5>
								<div class="d-flex text-smaller ms-auto op-07">
									<div class="price-range-from">$9.99</div>
									<span class="mx-1"> - </span>
									<div class="price-range-to">$139.99</div>
								</div>
							</div><span class="irs irs--round js-irs-0"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="display: none;">0</span><span class="irs-max" style="display: none;">1</span><span class="irs-from" style="display: none; left: 0%;">0</span><span class="irs-to" style="display: none; left: 0%;">0</span><span class="irs-single" style="display: none; left: 0%;">0</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 3.50467%; width: 92.9907%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 0%;"><i></i><i></i><i></i></span><span class="irs-handle to" style="left: 92.9907%;"><i></i><i></i><i></i></span></span><input class="price-range irs-hidden-input" tabindex="-1" readonly=""><div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all; width: 376px; height: 521px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></div>

						<div class="col-md-9">
							<div id="shop" class="row shop grid-container" data-layout="fitRows">

								<!-- Shop Item 1
								============================================= -->
								<div class="col-lg-4 col-md-6 mb-4 product sf-face sf-lips">
									<div class="grid-inner">
										<div class="product-image">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/images/super/核桃木煙燻鮭魚.jpg')}}" alt="..."></a>
											<!-- <div class="sale-flash badge bg-color rounded-0 fw-normal p-2">50% Off*</div> -->
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{route('user.auth.pizza')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}"><b>核桃木煙燻鮭魚 | 星級餐酒館</b></a></h3></div>
											<div class="product-price fw-normal mt-0 mb-0"><ins>$350</ins></div>
											<!-- <del class="op-07">$24.99</del>  -->
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-lotions sf-makeup">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{route('user.auth.pizza')}}"><img src="{{asset('assets/images/super/.jpg')}}" alt="..."></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{route('user.auth.pizza')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="demo-skincare-single.html" class="color">Clove Tonka Oil</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><ins>$39.99</ins></div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-face sf-ayurvedic sf-makeup">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/12.jpg')}}" alt="..."></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{asset('assets/demo-skincare-single.html')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}" class="color">Stockholm Hair Oil</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><ins>$19.95</ins></div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-body sf-hair">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/13.jpg')}}" alt="..."></a>
											<div class="sale-flash badge bg-color rounded-0 fw-normal p-2">Sale!</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{asset('assets/demo-skincare-single.html')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}" class="color">Romi Moisture</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><del class="op-07">$19.99</del> <ins>$11.99</ins></div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-eyes sf-hair">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/14.jpg')}}" alt="..."></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{asset('assets/demo-skincare-single.html')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}" class="color">Ouiao Super Serum</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><ins>$9.99</ins></div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-lips sf-lotions sf-body">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/5.jpg')}}" alt="..."></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{asset('assets/demo-skincare-single.html')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}" class="color">Tainyc Polish</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><ins>$129.99</ins></div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-body sf-hair">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/15.jpg')}}" alt="..."></a>
											<div class="sale-flash badge bg-color rounded-0 fw-normal p-2">Sale!</div>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{asset('assets/demo-skincare-single.html')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}" class="color">Kalos Serum</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><del class="op-07">$39.99</del> <ins>$29.99</ins></div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-eyes sf-face">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/1.jpg')}}" alt="..."></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{asset('assets/demo-skincare-single.html')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}" class="color">Gonja Face Serum</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><ins>$55.99</ins></div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 mb-4 product sf-hair sf-ayurvedic sf-makeup">
									<div class="grid-inner">
										<div class="product-image mb-2">
											<a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/3.jpg')}}" alt="..."></a>
											<div class="bg-overlay">
												<div class="bg-overlay-content align-items-end justify-content-end" data-hover-animate="fadeIn">
													<a href="{{asset('assets/demo-skincare-single.html')}}" class="d-block positon-absolute top-0 start-0 w-100 h-100 z-1"><span class="visually-hidden">Product Link</span></a>
													<a href="#" class="btn bg-color bg-opacity-75 text-light me-2 z-2"><i class="bi-basket"></i></a>
												</div>
											</div>
										</div>
										<div class="product-desc text-center">
											<div class="product-title"><h3><a href="{{asset('assets/demo-skincare-single.html')}}" class="color">Hair Oil</a></h3></div>
											<div class="product-price fw-normal mt-0 mb-2"><ins>$79.99</ins></div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
		
</section>
@endsection  

