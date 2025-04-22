@extends('layout.app')
@section('welcome-page')
    <!-- hero area start -->
    <section class="rr-hero-3-area  rr-hero-3-bg-color pt-145 p-relative ">
       <div class="rr-hero-shap d-none d-xl-block">
          <img src="{{asset('assets/img/hero/full.png')}}" alt="">
       </div>
       <div class="rr-hero-shap-full-2 d-none d-xl-block">
          <img src="{{asset('assets/img/hero/full-2.png')}}" alt="">
       </div>
       <div class="rr-hero-shap-full-3 d-none d-xl-block">
          <img src="{{asset('assets/img/hero/full-3.png')}}" alt="">
       </div>
       <div class="rr-hero-shap-full-4 d-none d-xl-block">
          <img src="{{asset('assets/img/hero/full-4.png')}}" alt="">
       </div>
       <div class="container ">
          <div class="row ">
             <div class="col-xl-12 col-12">
                <div class="rr-hero-3-info text-center">
                   <h2 class="rr-hero-3-title wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">{{$language['Unlock']}}<br/>{{$language['Expert']}}</h2>
                   <a href="pricing.html" class="rr-btn wow rrfadeUp" data-wow-duration=".9s"
                      data-wow-delay=".7s"><span>{{$language['View']}}</span> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
             </div>
             <div class="row p-relative">
                <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                   <div class="rr-hero-3-lr-thumb ">
                      <div class="rr-hero-3-lr-img text-center">
                         <img src="assets/img/sm-img.jpg" alt="">
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                   <div class="rr-hero-3-md-thumb ">
                      <div class="rr-hero-3-md-img text-center">
                         <img src="assets/img/md-img.jpg" alt="">
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                   <div class="rr-hero-3-rl-thumb">
                      <div class="rr-hero-3-rl-img text-center">
                         <img src="assets/img/rm-img.jpg" alt="">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- hero area end -->
    <!-- service-3 area start -->
    <section class="rr-service-3-area pt-200 fix">
       <div class="container p-relative">
          <div class="row">
             <div class="col-xl-12 col-lg-10 col-md-10 col-12">
                <div class="rr-section-title-wrapper mb-40">
                   <span class="rr-section-subtitle wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">{{$language['Our_Services']}}</span>
                   <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">{{ $language['Best_Digital'] }} <br />{{$language['Wedding_Solution']}}</h3>
                </div>
             </div>
          </div>
          <div class="rr-services-arrow-box d-none d-md-block ">
             <button class="postbox-arrow-next">
                <i class="fa-sharp fa-solid fa-angle-left"></i>
             </button>
             <button class="postbox-arrow-prev">
                <i class="fa-sharp fa-solid fa-angle-right"></i>
             </button>
          </div>
          <div class="row">
             <div class="swiper-container rr-services-2-active" style="padding-bottom: 31px;">
                <div class="swiper-wrapper">
                    @foreach ($categorys as $category)
                    <div class="swiper-slide">
                        <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                           <div class="rr-service-3-icon">
                              <img src="{{ asset('storage/' . $category->photo) }}" alt="">
                           </div>
                           <div class="rr-service-3-content">
                              <h4 class="rr-service-3-title"><a href="services-details.html">{{ $category->localized_name }}</a></h4>
                              <div class="rr-service-3-btn">
                                 <a href="services-details.html">{{ $language['Read_More'] }} <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                    @endforeach
                </div>
             </div>
          </div>
       </div>
    </section>

    @include('template')
  
    <!-- project-slider area end -->
    <!-- about-3 03 area start -->
   <!-- Font Awesome CDN -->


      <section class="py-5 bg-white">
         <div class="container">
            <div class="row align-items-center">
                  <!-- Left: Device Preview Image -->
                  
                  <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="rr-about-3-thumb">
                        <img src="{{asset('assets/img/Minimalist Website Launch Computer Mockup Instagram Post.png')}}" alt="">
                     </div>
                  </div>

                  <!-- Right: Content -->
                  <div class="col-md-6">
                     <h2 class="fw-bold">{{$language['Why_Choose_an_E_Invitation']}}</h2>
                     <p class="mb-4">{{$language['Advantages_over_paper_invitations']}}</p>

                     <div class="row g-4">
                        <!-- Feature 1 -->
                        <div class="col-6 d-flex align-items-start">
                              <i class="fas fa-globe fa-2x text-secondary me-3 mt-1"></i>
                              <div>
                                 <h6 class="fw-bold">{{$language['Unlimited_Access']}}</h6>
                                 <p class="small mb-0">{{$language['Send_unlimited']}}</p>
                              </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="col-6 d-flex align-items-start">
                              <i class="fas fa-tablet-alt fa-2x text-secondary me-3 mt-1"></i>
                              <div>
                                 <h6 class="fw-bold">{{$language['Convenience']}}</h6>
                                 <p class="small mb-0">{{$language['Accessible']}}</p>
                              </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="col-6 d-flex align-items-start">
                              <i class="fas fa-wallet fa-2x text-secondary me-3 mt-1"></i>
                              <div>
                                 <h6 class="fw-bold">{{$language['Save_Money']}}</h6>
                                 <p class="small mb-0">{{$language['Save_up']}}</p>
                              </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="col-6 d-flex align-items-start">
                              <i class="fas fa-clock fa-2x text-secondary me-3 mt-1"></i>
                              <div>
                                 <h6 class="fw-bold">{{$language['Time_Efficient']}}</h6>
                                 <p class="small mb-0">{{$language['Ready']}}</p>
                              </div>
                        </div>

                        <!-- Feature 5 -->
                        <div class="col-6 d-flex align-items-start">
                              <i class="fas fa-leaf fa-2x text-secondary me-3 mt-1"></i>
                              <div>
                                 <h6 class="fw-bold">{{$language['Eco_Friendly']}}</h6>
                                 <p class="small mb-0">{{$language['No_paper']}}</p>
                              </div>
                        </div>

                        <!-- Feature 6 -->
                        <div class="col-6 d-flex align-items-start">
                              <i class="fas fa-comments fa-2x text-secondary me-3 mt-1"></i>
                              <div>
                                 <h6 class="fw-bold">{{$language['Feedback_Ready']}}</h6>
                                 <p class="small mb-0">{{$language['See_all_RSVP']}}</p>
                              </div>
                        </div>
                     </div>

                     <div class="mt-4 text-center">
                        <p class="fw-bold">{{$language['limits_of_time']}}</p>
                     </div>
                  </div>
            </div>
         </div>
      </section>

    <!-- about-3 03 area end -->
    <!-- fact area start -->
    <div class="rr-funfact-2-area pb-85 p-relative fix" style="margin: 65px 0 0 0;">
       <div class="container">
          <div class="rr-funfact-2">
             <div class="row gx-30">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".3s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="assets/img/counter/icon.png" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="1542">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Flower Arrangements</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".5s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="assets/img/counter/icon-02.png" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="1260">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Ceremonies</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".7s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="assets/img/counter/icon-03.png" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="150">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Wedding Cakes</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".9s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="assets/img/counter/icon-04.png" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="1000">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Happy Couples</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- fact area end -->
    <!-- team-2 area start -->
    <section class="rr-team-2-area rr-team-bg-color pt-110 pb-90 p-relative fix"
       data-background="{{ asset('assets/img/bg.jpg') }}">
       <div class="container">
          <div class="row">
             <div class="col-xl-12 col-12">
                <div class="rr-section-title-wrapper mb-40 text-center p-relative">
                   <span class="rr-section-white-subtitle wow rrfadeRight mb-30" data-wow-duration=".9s"
                      data-wow-delay=".5s">Our Team</span>
                   <h3 class="rr-section-white-title wow rrfadeLeft mb-30" data-wow-duration=".9s"
                      data-wow-delay=".7s">Meet Our Awesome Team</h3>
                </div>
             </div>
          </div>
          <div class="row gx-30">
            <div class="swiper rr-category-slider">

               <div class="swiper-wrapper">
                  @foreach ($categories as $categorie)
                     <div class="swiper-slide">
                        <div class="rr-team-2-item text-center p-relative" 
                           style="position: relative; background: url('{{ asset('storage/' . $categorie->first_photo) }}') no-repeat center center / cover; border-radius: 20px; overflow: hidden; min-height: 500px;">

                           <!-- Transparent overlay to darken/fade background -->
                           <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                                       background-color: rgba(0, 0, 0, 0.3); z-index: 1;">
                           </div>

                           <!-- Phone image in foreground -->
                           {{-- Phone Mockup Background --}}
                           <img src="{{ asset('storage/' . $categorie->secound_photo) }}" 
                              alt="Mockup Frame"
                              style="width: 100%; position: relative; z-index: 2;left: 110px;top: 66px;">

                           {{-- Inserted App Screenshot or Category Image (inside phone screen) --}}
                           <img src="{{ asset('storage/' . $categorie->background_photo) }}" 
                              alt="Inside Screenshot"
                              style="position: absolute; top: 25px; left: 22px; width: 205px; height: 440px; object-fit: cover; border-radius: 28px; z-index: 1;">
                           
                           <!-- Text content -->
                           <div class="rr-team-2-content" 
                              style="position: relative; z-index: 2; background: rgba(255, 255, 255, 0.85); margin: 20px; padding: 20px; border-radius: 12px;top: 40px;">
                              <h4 class="rr-team-2-title" style="color: #333;">
                                 {{ $categorie->localized_name }}
                              </h4>
                              
                              @if(!empty($categorie->price))
                                 <p class="mt-2 fw-bold" style="color: #000;">Price: {{ $categorie->price }} ֏</p>
                              @endif

                              <div class="rr-team-2-social mt-3">
                                 <!-- You can keep your social icons here -->
                              </div>
                               <!-- ✅ Action Buttons -->
                              <div class="d-flex justify-content-center gap-3 mt-3">
                                 <a href="" class="btn btn-primary" style="padding: 6px 14px; font-size: 14px;">
                                    View All
                                 </a>
                                 <a href="" class="btn btn-success" style="padding: 6px 14px; font-size: 14px;">
                                    Order
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
               <!-- Navigation Arrows (optional) -->
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
           </div>
           
                </div>
             </div>
          </div>
       </div>
    </section>
    <script>
      const swiper = new Swiper('.rr-category-slider', {
          slidesPerView: 3,
          spaceBetween: 30,
          loop: true,
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          breakpoints: {
              992: {
                  slidesPerView: 3,
              },
              768: {
                  slidesPerView: 2,
              },
              0: {
                  slidesPerView: 1,
              }
          }
      });
  </script>
  
    <!-- team-2 area end -->
    <!-- rr-testimonial-single-single area start -->
    <div class="rr-testimonial-single-area pt-100  gray-bg fix">
       <div class="container p-relative rr-testimonial-before">
          <div class="row gx-30">
             <div class="col-lg-12">
                <div class="rr-section-title-wrapper mb-40 text-center">
                   <span class="rr-section-subtitle wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">Our
                      Testimonial</span>
                   <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">Feedback
                      from Clients"</h3>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-8 offset-xl-2 col-lg-12 col-md-12 col-12 p-relative">
                <div class="rr-testimonial-single-wrap">
                   <div class="rr-testimonial-single-info p-relative">
                      <div class="rr-testimonial-single-quate-icon  wow rrfadeLeft" data-wow-duration=".9s"
                         data-wow-delay=".5s">
                         <span><img src="assets/img/testimonial/quate.png" alt=""></span>
                      </div>
                      <div class="rr-testimonial-single-quate-icon-right  wow rrfadeRight" data-wow-duration=".9s"
                         data-wow-delay=".7s">
                         <span><img src="assets/img/testimonial/quate-2.png" alt=""></span>
                      </div>
                      <div class="rr-testimonial-item-active">
                         <div class="rr-testimonial-single-item text-center">
                            <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied
                               customer of , I want to share my positive experience with others. <br />
                               Their software as a service platform has greatly improved the efficiency and <br />
                               productivity of our business operations. </p>
                            <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                               <h3>Evan Lwis</h3>
                            </div>
                         </div>
                         <div class="rr-testimonial-single-item text-center">
                            <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied
                               customer of , I want to share my positive experience with others. <br />
                               Their software as a service platform has greatly improved the efficiency and <br />
                               productivity of our business operations. </p>
                            <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                               <h3>Facial Care</h3>
                            </div>
                         </div>
                         <div class="rr-testimonial-single-item text-center">
                            <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied
                               customer of , I want to share my positive experience with others. <br />
                               Their software as a service platform has greatly improved the efficiency and <br />
                               productivity of our business operations. </p>
                            <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                               <h3>Evan Lwis</h3>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- rr-testimonial-single-single area end -->
    <!-- shop area start -->
    <section class="rr-shop-area pt-120 pb-90 fix">
       <div class="container">
          <div class="row gx-30">
             <div class="rr-section-title-wrapper mb-40 text-center">
                <span class="rr-section-subtitle wow rrfadeRight" data-wow-duration=".9s"
                   data-wow-delay=".5s">Featured Products</span>
                <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">
                   Featured Products</h3>
             </div>
          </div>
          <div class="row gx-30">
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
                data-wow-delay=".3s">
                <div class="rr-shop-item">
                   <div class="rr-shop-thumb">
                      <img src="assets/img/shop/image.jpg" alt="">
                      <div class="rr-shop-cart-btn text-center">
                         <a href="shop-details.html">Add To Cart</a>
                      </div>
                   </div>
                   <div class="rr-shop-content text-center">
                      <h4 class="rr-shop-title"><a href="shop-details.html">Wedding Gown</a></h4>
                      <span>$380.00</span>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
                data-wow-delay=".5s">
                <div class="rr-shop-item">
                   <div class="rr-shop-thumb">
                      <img src="assets/img/shop/image2.jpg" alt="">
                      <div class="rr-shop-cart-btn text-center">
                         <a href="shop-details.html">Add To Cart</a>
                      </div>
                   </div>
                   <div class="rr-shop-content text-center">
                      <h4 class="rr-shop-title"><a href="shop-details.html">Bridal Flower</a></h4>
                      <span>$390.00</span>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
                data-wow-delay=".7s">
                <div class="rr-shop-item">
                   <div class="rr-shop-thumb">
                      <img src="assets/img/shop/image3.jpg" alt="">
                      <div class="rr-shop-cart-btn text-center">
                         <a href="shop-details.html">Add To Cart</a>
                      </div>
                   </div>
                   <div class="rr-shop-content text-center">
                      <h4 class="rr-shop-title"><a href="shop-details.html">Wedding Cake</a></h4>
                      <span>$370.00</span>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
                data-wow-delay=".9s">
                <div class="rr-shop-item">
                   <div class="rr-shop-thumb">
                      <img src="assets/img/shop/image4.jpg" alt="">
                      <div class="rr-shop-cart-btn text-center">
                         <a href="shop-details.html">Add To Cart</a>
                      </div>
                   </div>
                   <div class="rr-shop-content text-center">
                      <h4 class="rr-shop-title"><a href="shop-details.html">Bride’s Crown</a></h4>
                      <span>$480.00</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- shop area end -->
    <!-- Appointment area start -->
    <section class="rr-Appointment-area p-relative pb-25 fix" data-bg-color="#FAFBFF">
       <div class="rr-appointment-tyhumb">
          <img src="assets/img/contact/contact-bg.jpg" alt="">
       </div>
       <div class="container">
          <div class="row">
             <div class="col-xl-6 col-lg-12 "></div>
             <div class="col-xl-6 col-lg-12 col-md-12  mt-80">
                <div class="rr-appointment-info ml-15">
                   <div class="rr-appointment-wrapp">
                      <div class="rr-section-title-wrapper mb-40">
                         <span class="rr-section-subtitle wow rrfadeLeft" data-wow-duration=".9s"
                            data-wow-delay=".5s">Appointment</span>
                         <h3 class="rr-section-title wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">Say
                            Hi To Our Wedding Planners.</h3>
                      </div>
                   </div>
                   <div class="rr-contact-2__comment-form-box">
                      <div class="rr-contact-2__comment-form text-center wow rrfadeUp" data-wow-duration=".9s"
                         data-wow-delay=".5s">
                         <form id="contact-us__form" method="POST" action="./mail.php"
                            class="rr-contact-2-main mb-40">
                            <div class="row wow fadeInLeft animated" data-wow-delay=".9s">
                               <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-20">
                                  <div class="rr-contact-2-form-input-box">
                                     <input name="name" id="name" type="text" placeholder="Your Name">
                                  </div>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-20">
                                  <div class="rr-contact-2-form-input-box">
                                     <input name="email" id="email" type="text" placeholder=" Your Email">
                                  </div>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-20">
                                  <div class="rr-contact-2-form-input-box">
                                     <input name="phone" id="phone" type="text" placeholder="Phone Number">
                                  </div>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6  col-12 mb-20">
                                  <div class="rr-contact-2-form-input-box">
                                     <input name="Religion" id="Religion" type="text" placeholder="Religion">
                                  </div>
                               </div>

                               <div class="col-xl-6 col-lg-6 col-md-6  col-12 mb-20">
                                  <div class="rr-contact-2-form-input-box">
                                     <input name="Enter date" id="date" type="text" placeholder="Enter date">
                                  </div>
                               </div>
                               <div class="col-xl-6 col-lg-6 col-md-6  col-12 mb-20">
                                  <div class="rr-contact-2-form-input-box">
                                     <input name="Address" id="Address" type="text" placeholder="Address">
                                  </div>
                               </div>
                               <div class="col-xl-12 mb-20">
                                  <div class="rr-contact-2-form-input-box">
                                     <textarea name="textarea" id="textarea" cols="30" rows="10"
                                        placeholder="Your Message"></textarea>
                                  </div>
                               </div>

                               <div class="col-xl-12 mb-20 text-start">
                                  <button type="submit" class="rr-btn-2 wow rrfadeUp" data-wow-duration=".9s"
                                     data-wow-delay=".7s">
                                     <span>Book Now <i class="fa-solid fa-arrow-right"></i></span>
                                  </button>
                               </div>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Appointment area end -->
    <!-- blog area start -->
    <section class="rr-blog-area pt-120 pb-90  fix">
       <div class="container p-relative">
          <div class="row gx-30">
             <div class="col-lg-12">
                <div class="rr-section-title-wrapper mb-40">
                   <span class="rr-section-subtitle wow rrfadeLeft mb-30" data-wow-duration=".9s"
                      data-wow-delay=".5s">Our Blog</span>
                   <h3 class="rr-section-title wow rrfadeLeft mb-30" data-wow-duration=".9s" data-wow-delay=".7s">Read
                      Our Latest News & Blog</h3>
                </div>
             </div>
          </div>
          <div class="rr-blog-arrow-box d-none d-md-block">
             <button class="postbox-arrow-next">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M9 17L1 9L5 5L9 1" stroke="#051145" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                 </svg>
             </button>
             <button class="postbox-arrow-prev">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1 17L9 9L1 1" stroke="#051145" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                 </svg>
             </button>
          </div>
          <div class="swiper-container rr-blog-active">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="rr-blog-item-wrapper p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                      data-wow-delay=".3s">
                      <div class="rr-blog-item-thumb fix p-relative">
                         <a href="blog-details.html"><img src="assets/img/blog/blog-7.jpg" alt=""></a>
                         <div class="rr-blog-3-item-date">
                            <h4>22</h4>
                            <p>sep</p>
                         </div>
                      </div>
                      <div class="rr-blog-item-content">
                         <div class="rr-blog-item-info d-flex">
                            <span><img src="assets/img/blog/user.svg" alt=""> <a href="#">Admin</a></span>
                            <span><img src="assets/img/blog/comments.svg" alt=""><a href="#"> 2 Comments</a></span>
                         </div>
                         <h4 class="rr-blog-item-title"><a href="blog-details.html">Where You Can Find Best service-3
                               For
                               Your Wedding</a></h4>
                         <div class="rr-blog-item-btn">
                            <a href="blog-details.html">Read More <span><i
                                     class="fa-regular fa-arrow-right"></i></span></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-blog-item-wrapper p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                      data-wow-delay=".5s">
                      <div class="rr-blog-item-thumb fix p-relative">
                         <a href="blog-details.html"><img src="assets/img/blog/blog-8.jpg" alt=""></a>
                         <div class="rr-blog-3-item-date">
                            <h4>22</h4>
                            <p>sep</p>
                         </div>
                      </div>
                      <div class="rr-blog-item-content">
                         <div class="rr-blog-item-info d-flex">
                            <span><img src="assets/img/blog/user.svg" alt=""> <a href="#">Admin</a></span>
                            <span><img src="assets/img/blog/comments.svg" alt=""><a href="#"> 2 Comments</a></span>
                         </div>
                         <h4 class="rr-blog-item-title"><a href="blog-details.html">You Must Need a Great
                               Photographer.</a></h4>
                         <div class="rr-blog-item-btn">
                            <a href="blog-details.html">Read More <span><i
                                     class="fa-regular fa-arrow-right"></i></span></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-blog-item-wrapper p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                      data-wow-delay=".7s">
                      <div class="rr-blog-item-thumb fix p-relative">
                         <a href="blog-details.html"><img src="assets/img/blog/blog-9.jpg" alt=""></a>
                         <div class="rr-blog-3-item-date">
                            <h4>22</h4>
                            <p>sep</p>
                         </div>
                      </div>
                      <div class="rr-blog-item-content">
                         <div class="rr-blog-item-info d-flex">
                            <span><img src="assets/img/blog/user.svg" alt=""> <a href="#">Admin</a></span>
                            <span><img src="assets/img/blog/comments.svg" alt=""><a href="#"> 2 Comments</a></span>
                         </div>
                         <h4 class="rr-blog-item-title"><a href="blog-details.html">Make sure your wedding gown is the
                               best one.</a></h4>
                         <div class="rr-blog-item-btn">
                            <a href="blog-details.html">Read More <span><i
                                     class="fa-regular fa-arrow-right"></i></span></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- blog area end -->
    <!-- instagrem area start -->
    <section class="rr-instagrem-area fix">
       <div class="container-fluid gx-0">
          <div class="swiper-container rr-instagram-active gx-0">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="rr-instagrem-widget-gallery p-relative">
                      <a href="assets/img/gallery/img-7.jpg" class="rr-instagrem-main-item popup-image">
                         <img src="assets/img/gallery/img-7.jpg" alt="image not found">
                         <span><i class="fa-solid fa-plus"></i></span>
                      </a>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-instagrem-widget-gallery p-relative">
                      <a href="assets/img/gallery/img-8.jpg" class="rr-instagrem-main-item popup-image">
                         <img src="assets/img/gallery/img-8.jpg" alt="image not found">
                         <span><i class="fa-solid fa-plus"></i></span>
                      </a>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-instagrem-widget-gallery p-relative">
                      <a href="assets/img/gallery/img-9.jpg" class="rr-instagrem-main-item popup-image">
                         <img src="assets/img/gallery/img-9.jpg" alt="image not found">
                         <span><i class="fa-solid fa-plus"></i></span>
                      </a>
                   </div>
                </div>
                
                <div class="swiper-slide">
                   <div class="rr-instagrem-widget-gallery p-relative">
                      <a href="assets/img/gallery/img-10.jpg" class="rr-instagrem-main-item popup-image">
                         <img src="assets/img/gallery/img-10.jpg" alt="image not found">
                         <span><i class="fa-solid fa-plus"></i></span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- instagrem area end -->
@endsection