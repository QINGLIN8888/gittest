<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('slider') 
@section('content') 
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


  	<!-- Slider
      ============================================= -->
      <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-effect="fade" data-loop="true" data-autoplay="6000" data-speed="1400" style="">
            <div class="slider-inner">

                  <div class="swiper-container swiper-parent swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                        <div class="swiper-wrapper" style="cursor: grab; transition-duration: 0ms;" id="swiper-wrapper-24db123e459134d3" aria-live="off">
                              

                              

                              
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 366px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption">
                                                <div>
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none not-animated" data-animate="fadeIn">Make your Chocolate.</h2>
                                                      <p class="d-none d-sm-block font-primary not-animated" data-animate="fadeIn" data-delay="400">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                                                      <div class="static-content position-relative d-flex justify-content-start mt-5 not-animated" data-animate="fadeIn" data-delay="800">
                                                            <img src="{{asset('assets/demos/restaurant/images/icons/bowl-white.svg')}}" width="42" height="42" alt="Image">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/images/chocolate.png')}});"></div>
                              </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 366px; opacity: 1; transform: translate3d(-366px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption slider-caption-center" style="margin-top: -30px;">
                                                <div>
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none not-animated " data-animate="fadeIn" data-delay="400">Bread</h2>
                                                      <p class="d-none d-sm-block font-primary not-animated" data-animate="fadeIn" data-delay="800">We have a variety of breads  for you to choose from</p>
                                                      <div class="static-content position-relative d-flex justify-content-center mt-5 not-animated" data-animate="fadeIn" data-delay="1000">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/images/bread.png')}});"></div>
                              </div><div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 366px; opacity: 1; transform: translate3d(-732px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption slider-caption-right">
                                                <div>
                                  
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none fadeIn animated" data-animate="fadeIn"><img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/glass-white.svg')}}" width="42" height="42" alt="Image"> Coffee</h2>
                                                      <p class="d-none d-sm-block font-primary fadeIn animated" data-animate="fadeIn" data-delay="400">Coffee drinkers make better Lovers. Everything starts with a great Coffee.</p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/images/coffee.png')}}); background-position: center bottom;"></div>
                              </div></div>

                        <div class="slider-arrow-left" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-24db123e459134d3"><i class="uil uil-angle-left-b"></i></div>
                        <div class="slider-arrow-right" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-24db123e459134d3"><i class="uil uil-angle-right-b"></i></div>

                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>
      </section>


	  <section id="content">

            <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url({{asset('assets/demos/restaurant/images/sketch.png')}}) repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

            <div class="content-wrap" style="overflow: visible;">

                  <div class="section m-0" style="padding: 40px 0; background: url({{asset('assets/images/we_have.png')}}) center center no-repeat; background-size: 100% auto">
                        <div class="container">

                              <div class="heading-block border-bottom-0 mb-4">
                                    <h2 class="font-secondary color text-transform-none" style="font-size: 52px;">What do we have?</h2>
                              </div>

                              <div class="row col-mb-50">
                                    <div class="col-lg-3">
                                          <div class="feature-box media-box" style="max-width: 400px;">
                                                <div class="fbox-media" style="width: 70px; height: auto;">
                                                      <img src="{{asset('assets/images/bread_icon.png')}}" alt="Image">
                                                </div>
                                                <div class="fbox-content px-0">
                                                      <h3>Bread</h3>
                                                      <p>Bread is baked on the same day.</p>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3">
                                          <div class="feature-box media-box" style="max-width: 400px;">
                                                <div class="fbox-media" style="width: 70px; height: auto;">
                                                      <img src="{{asset('assets/images/cake_icon.png')}}" alt="Image">
                                                </div>
                                                <div class="fbox-content px-0">
                                                      <h3>Cake</h3>
                                                      <p>Cakes can be ordered in advance.</p>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3">
                                          <div class="feature-box media-box" style="max-width: 400px;">
                                                <div class="fbox-media" style="width: 70px; height: auto;">
                                                      <img src="{{asset('assets/images/pizza_icon.png')}}" alt="Image">
                                                </div>
                                                <div class="fbox-content px-0">
                                                      <h3>Pizza</h3>
                                                      <p>There are up to 10 pizza flavors, with a maximum of 3 flavors to choose from.</p>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                  </div>


                  <div class="clear"></div>

                  <div style="background: #FFF  no-repeat top right; background-size: 100% auto; padding-top: 50px"  id="hot">
                        <div class="container">

                              <div class="heading-block text-center border-bottom-0">
                                    <span class="font-primary ls-1" style="font-size: 14px; color: #AAA">New</span>
                                    <h3 class="font-primary ls-1" style="font-size: 50px; line-height: 1.2;">最新消息</h3>
                              </div>

                              <div class="row posts-md col-mb-30 mb-0" id="oc-images" data-items-xs="2" data-items-sm="3" data-items-lg="4" data-items-xl="5">

                                    <div class="col-lg-4 col-md-6">
                                          <div class="entry">
                                                <div class="entry-image mb-0">
                                                      <a href="https://www.laone.com.tw/news/image/pics/K_%E4%B8%83%E5%A4%95%E6%83%85%E4%BA%BA%E7%AF%80%E5%AE%98%E7%B6%B2%E6%96%B0%E8%A8%8A-1200x700_0.jpg" data-lightbox="image"><img src="https://www.laone.com.tw/news/image/pics/K_%E4%B8%83%E5%A4%95%E6%83%85%E4%BA%BA%E7%AF%80%E5%AE%98%E7%B6%B2%E6%96%B0%E8%A8%8A-1200x700_0.jpg" alt="Image 1"></a>
                                                </div>
                                                <div class="entry-title mt-0 p-4 title-xs text-transform-none">
                                                      <div class="entry-meta mt-0 mb-2">
                                                            <ul>
                                                                  <li><a href="#">LA ONE Kitchen 歐陸廚房</a></li>
                                                                  <li><a href="#">七夕情人節限定：8/10 </a></li>
                                                            </ul>
                                                      </div>

                                                      <h2 class="mb-0"><a href="#">LA ONE Kitchen 2024 七夕浪漫晚宴</a></h2>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                          <div class="entry">
                                                <div class="entry-image mb-0">
                                                      <a href="https://www.laone.com.tw/news/image/pics/%E7%88%B6%E8%A6%AA%E7%AF%80_%E5%AE%98%E7%B6%B2_1200x700.jpg" data-lightbox="image"><img src="https://www.laone.com.tw/news/image/pics/%E7%88%B6%E8%A6%AA%E7%AF%80_%E5%AE%98%E7%B6%B2_1200x700.jpg" alt="Image 2"></a>
                                                </div>
                                                <div class="entry-title mt-0 p-4 title-xs text-transform-none">
                                                      <div class="entry-meta mt-0 mb-2">
                                                            <ul>
                                                                  <li><a href="#">偶爸最暖！</a></li>
                                                                  <li><a href="#"> 88 折</a></li>
                                                            </ul>
                                                      </div>

                                                      <h2 class="mb-0"><a href="#">2024 偶爸最暖！父親節蛋糕 88 折</a></h2>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                          <div class="entry">
                                                <div class="entry-image mb-0">
                                                      <a href="https://www.laone.com.tw/news/image/pics/%E4%B8%AD%E7%A7%8B_%E5%AE%98%E7%B6%B2_1200x700.jpg" data-lightbox="image"><img src="https://www.laone.com.tw/news/image/pics/%E4%B8%AD%E7%A7%8B_%E5%AE%98%E7%B6%B2_1200x700.jpg" alt="Image 3"></a>
                                                </div>
                                                <div class="entry-title mt-0 p-4 title-xs text-transform-none">
                                                      <div class="entry-meta mt-0 mb-2">
                                                            <ul>
                                                                  <li><a href="#">中秋禮盒預購起跑</a></li>
                                                                  <li><a href="#">即日起 - 7/15 超早鳥</a></li>
                                                            </ul>
                                                      </div>

                                                      <h2 class="mb-0"><a href="https://www.laone.com.tw/news/image/pics/%E4%B8%AD%E7%A7%8B_%E5%AE%98%E7%B6%B2_1200x700.jpg">2024中秋獻禮 預購優惠起跑</a></h2>
                                                </div>
                                          </div>
                                    </div>

                              </div>

                        </div>
                  </div>




                  <div class="clear"></div>


                  <div class="section mb-0"  id="team" style="padding: 80px 0; background: #F5F5F5 url({{asset('assets/demos/restaurant/images/food-pattern.png')}}) repeat center center;">
                        <div class="container">

                              <div class="heading-block text-center border-bottom-0">
                                    <h3 class="text-transform-none font-secondary ls-0" style="font-size: 60px; line-height: 1.3;">Our Team						
                                    </h3>
                              </div>

                              <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                          <div class="team">
                                                <div class="team-image imagescalein">
                                                      <img src="{{asset('assets/images/1.png')}}" alt="Xuyun">
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                          <div class="team">
                                                <div class="team-image imagescalein">
                                                      <img src="{{asset('assets/images/3.png')}}" alt="Zihua">
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                          <div class="team">
                                                <div class="team-image imagescalein">
                                                      <img src="{{asset('assets/images/2.png')}}" alt="Chinlin">
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                  

                  <div class="line clear"></div>

                  <div class="container section-contact mt-6">
                        <div class="row g-5">

                              <div class="col-lg-3 col-md-6 text-center">
                                    <i class="i-plain i-xlarge mx-auto mb-0 icon-et-map"></i>
                                    <h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Contact</h3>
                                    <span class="font-primary">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</span>
                              </div>

                              <div class="col-lg-3 col-md-6 text-center">
                                    <i class="i-plain i-xlarge mx-auto mb-0 icon-et-clock"></i>
                                    <h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
                                    <span class="font-primary">Sun - Thu | 07:00 - 23:00 Hours<br>
                                    Fri - Sat | 08:00 - 01:00 Hours</span>
                              </div>

                              <div class="col-lg-3 col-md-6 text-center">
                                    <i class="i-plain i-xlarge mx-auto mb-0 icon-et-clipboard"></i>
                                    <h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Reservation</h3>
                                    <span class="font-primary"><strong>Mobile: </strong>+62-111-222-333<br>
                                    <strong>Fax: </strong>(+62)-11-4752-1433</span>
                              </div>

                              <div class="col-lg-3 col-md-6 text-center">
                                    <i class="i-plain i-xlarge mx-auto mb-0 icon-et-heart"></i>
                                    <h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">聯絡我們</h3>
                                    <div class="d-flex justify-content-center">
                                          <a href="https://linktr.ee/laone_kh" class="social-icon border-transparent h-bg-instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                                <i class="fa-brands fa-instagram"></i>
                                          </a>
                                          <a href="https://www.youtube.com/channel/UCrKRgkFKx9g49zKqA2RoBAg" class="social-icon border-transparent h-bg-youtube">
                                                <i class="fa-brands fa-youtube"></i>
                                                <i class="fa-brands fa-youtube"></i>
                                          </a>
                                          <a href="https://page.line.me/laone?openQrModal=true" class="social-icon border-transparent h-bg-line">
                                                <i class="fa-brands fa-line"></i>
                                                <i class="fa-brands fa-line"></i>
                                          </a>
                                    </div>
                              </div>

                        </div>
                  </div>

            </div>

            <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url({{asset('assets/demos/restaurant/images/sketch-header.png')}}) repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
	</section>

      <script>
            document.addEventListener('DOMContentLoaded', function () {
                  var swiper = new Swiper('#latest-news-carousel', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        navigation: {
                              nextEl: '.swiper-button-next',
                              prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                              el: '.swiper-pagination',
                              clickable: true,
                        },
                        loop: true,
                  });
                  });

      </script>
	
@endsection 