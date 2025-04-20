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
    <section class="rr-about-3-area pb-90 pt-70 fix">
       <div class="container">
          <div class="row">
             <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                <div class="rr-about-3-thumb">
                   <img src="assets/img/about/img-sm.jpg" alt="">
                </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="rr-about-title-wrapper mt-140 ml-40">
                   <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">About
                      Brulloft</span>
                   <h3 class="rr-section-title pb-15 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s"> We
                      Will Make Your Dream
                      Wedding A Reality</h3>
                   <div class="rr-section-main mb-40 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                      <p>It is a long established fact that a reader will be distracted by the <br /> readable content
                         of a page when looking at its layout. The point of <br /> using Lorem Ipsum is that it has a
                         more-or-less normal distribution <br /> of letters, as opposed to using</p>
                      <p>Content here, content here', making it look like readable English. <br /> Many desktop
                         publishing packages and web page editors now use <br /> Lorem Ipsum as their default model
                         text.</p>
                   </div>
                   <div class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                      <a href="about.html" class="rr-btn-2"><span>More
                            About Us <i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- about-3 03 area end -->
    <!-- fact area start -->
    <div class="rr-funfact-2-area pb-85 p-relative fix">
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
       data-background="assets/img/team/bg.jpg">
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
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
                data-wow-delay=".3s">
                <div class="rr-team-2-item text-center p-relative">
                   <div class="rr-team-2-thumb">
                      <img src="assets/img/team/team-4.jpg" alt="">
                   </div>
                   <div class="rr-team-2-content">
                      <h4 class="rr-team-2-title"><a href="team-details.html">Jenefer Abram</a></h4>
                      <span>Makeup Artist</span>
                      <div class="rr-team-2-social">
                         <a href="#"><svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M10 1H7.54545C6.46048 1 5.41994 1.42143 4.65274 2.17157C3.88555 2.92172 3.45455 3.93913 3.45455 5V7.4H1V10.6H3.45455V17H6.72727V10.6H9.18182L10 7.4H6.72727V5C6.72727 4.78783 6.81347 4.58434 6.96691 4.43431C7.12035 4.28429 7.32846 4.2 7.54545 4.2H10V1Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                         <a href="#"><svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M19 1.00897C18.2165 1.61128 17.349 2.07195 16.4309 2.37324C15.9382 1.75576 15.2833 1.3181 14.5548 1.11947C13.8264 0.920833 13.0596 0.970799 12.3581 1.26261C11.6565 1.55442 11.0542 2.07399 10.6324 2.75105C10.2107 3.42812 9.98993 4.23001 10 5.04827V5.93995C8.56215 5.98058 7.13741 5.63305 5.85264 4.92829C4.56788 4.22354 3.46299 3.18345 2.63636 1.90065C2.63636 1.90065 -0.636364 9.92575 6.72727 13.4925C5.04225 14.739 3.03495 15.364 1 15.2758C8.36364 19.7342 17.3636 15.2758 17.3636 5.02152C17.3629 4.77315 17.341 4.52539 17.2982 4.28143C18.1332 3.38395 18.7225 2.25082 19 1.00897Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                         <a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M13 1H5C2.79086 1 1 2.79086 1 5V13C1 15.2091 2.79086 17 5 17H13C15.2091 17 17 15.2091 17 13V5C17 2.79086 15.2091 1 13 1Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path
                                  d="M12.1999 8.496C12.2986 9.16179 12.1849 9.84177 11.8749 10.4392C11.5649 11.0366 11.0744 11.5211 10.4732 11.8237C9.87195 12.1263 9.19062 12.2317 8.52609 12.1247C7.86156 12.0178 7.24767 11.7041 6.77173 11.2281C6.2958 10.7522 5.98205 10.1383 5.87512 9.47377C5.76819 8.80924 5.87352 8.12791 6.17612 7.5267C6.47873 6.92548 6.96321 6.43499 7.56065 6.12499C8.15809 5.81499 8.83807 5.70127 9.50386 5.8C10.183 5.9007 10.8117 6.21717 11.2972 6.70264C11.7827 7.18812 12.0992 7.81686 12.1999 8.496Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path d="M13.3999 4.6001H13.4079" stroke="#54595F" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                         </a>
                         <a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M12.1999 6.05273C13.4729 6.05273 14.6938 6.58506 15.594 7.53262C16.4942 8.48017 16.9999 9.76532 16.9999 11.1054V17.0001H13.7999V11.1054C13.7999 10.6587 13.6313 10.2303 13.3313 9.91445C13.0312 9.5986 12.6242 9.42116 12.1999 9.42116C11.7756 9.42116 11.3686 9.5986 11.0685 9.91445C10.7685 10.2303 10.5999 10.6587 10.5999 11.1054V17.0001H7.3999V11.1054C7.3999 9.76532 7.90562 8.48017 8.80579 7.53262C9.70596 6.58506 10.9269 6.05273 12.1999 6.05273Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path d="M4.2 6.89478H1V17H4.2V6.89478Z" stroke="#54595F" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round" />
                               <path
                                  d="M2.6 4.36842C3.48366 4.36842 4.2 3.61437 4.2 2.68421C4.2 1.75405 3.48366 1 2.6 1C1.71634 1 1 1.75405 1 2.68421C1 3.61437 1.71634 4.36842 2.6 4.36842Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
                data-wow-delay=".5s">
                <div class="rr-team-2-item text-center p-relative">
                   <div class="rr-team-2-thumb">
                      <img src="assets/img/team/team-5.jpg" alt="">
                   </div>
                   <div class="rr-team-2-content">
                      <h4 class="rr-team-2-title"><a href="team-details.html">Jeremy Erickson</a></h4>
                      <span>Photographer </span>
                      <div class="rr-team-2-social">
                         <a href="#"><svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M10 1H7.54545C6.46048 1 5.41994 1.42143 4.65274 2.17157C3.88555 2.92172 3.45455 3.93913 3.45455 5V7.4H1V10.6H3.45455V17H6.72727V10.6H9.18182L10 7.4H6.72727V5C6.72727 4.78783 6.81347 4.58434 6.96691 4.43431C7.12035 4.28429 7.32846 4.2 7.54545 4.2H10V1Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                         <a href="#"><svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M19 1.00897C18.2165 1.61128 17.349 2.07195 16.4309 2.37324C15.9382 1.75576 15.2833 1.3181 14.5548 1.11947C13.8264 0.920833 13.0596 0.970799 12.3581 1.26261C11.6565 1.55442 11.0542 2.07399 10.6324 2.75105C10.2107 3.42812 9.98993 4.23001 10 5.04827V5.93995C8.56215 5.98058 7.13741 5.63305 5.85264 4.92829C4.56788 4.22354 3.46299 3.18345 2.63636 1.90065C2.63636 1.90065 -0.636364 9.92575 6.72727 13.4925C5.04225 14.739 3.03495 15.364 1 15.2758C8.36364 19.7342 17.3636 15.2758 17.3636 5.02152C17.3629 4.77315 17.341 4.52539 17.2982 4.28143C18.1332 3.38395 18.7225 2.25082 19 1.00897Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                         <a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M13 1H5C2.79086 1 1 2.79086 1 5V13C1 15.2091 2.79086 17 5 17H13C15.2091 17 17 15.2091 17 13V5C17 2.79086 15.2091 1 13 1Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path
                                  d="M12.1999 8.496C12.2986 9.16179 12.1849 9.84177 11.8749 10.4392C11.5649 11.0366 11.0744 11.5211 10.4732 11.8237C9.87195 12.1263 9.19062 12.2317 8.52609 12.1247C7.86156 12.0178 7.24767 11.7041 6.77173 11.2281C6.2958 10.7522 5.98205 10.1383 5.87512 9.47377C5.76819 8.80924 5.87352 8.12791 6.17612 7.5267C6.47873 6.92548 6.96321 6.43499 7.56065 6.12499C8.15809 5.81499 8.83807 5.70127 9.50386 5.8C10.183 5.9007 10.8117 6.21717 11.2972 6.70264C11.7827 7.18812 12.0992 7.81686 12.1999 8.496Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path d="M13.3999 4.6001H13.4079" stroke="#54595F" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                         </a>
                         <a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M12.1999 6.05273C13.4729 6.05273 14.6938 6.58506 15.594 7.53262C16.4942 8.48017 16.9999 9.76532 16.9999 11.1054V17.0001H13.7999V11.1054C13.7999 10.6587 13.6313 10.2303 13.3313 9.91445C13.0312 9.5986 12.6242 9.42116 12.1999 9.42116C11.7756 9.42116 11.3686 9.5986 11.0685 9.91445C10.7685 10.2303 10.5999 10.6587 10.5999 11.1054V17.0001H7.3999V11.1054C7.3999 9.76532 7.90562 8.48017 8.80579 7.53262C9.70596 6.58506 10.9269 6.05273 12.1999 6.05273Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path d="M4.2 6.89478H1V17H4.2V6.89478Z" stroke="#54595F" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round" />
                               <path
                                  d="M2.6 4.36842C3.48366 4.36842 4.2 3.61437 4.2 2.68421C4.2 1.75405 3.48366 1 2.6 1C1.71634 1 1 1.75405 1 2.68421C1 3.61437 1.71634 4.36842 2.6 4.36842Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
                data-wow-delay=".7s">
                <div class="rr-team-2-item text-center p-relative">
                   <div class="rr-team-2-thumb">
                      <img src="assets/img/team/team-6.jpg" alt="">
                   </div>
                   <div class="rr-team-2-content">
                      <h4 class="rr-team-2-title"><a href="team-details.html">Rodger Garza</a></h4>
                      <span>Wedding Planner</span>
                      <div class="rr-team-2-social">
                         <a href="#"><svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M10 1H7.54545C6.46048 1 5.41994 1.42143 4.65274 2.17157C3.88555 2.92172 3.45455 3.93913 3.45455 5V7.4H1V10.6H3.45455V17H6.72727V10.6H9.18182L10 7.4H6.72727V5C6.72727 4.78783 6.81347 4.58434 6.96691 4.43431C7.12035 4.28429 7.32846 4.2 7.54545 4.2H10V1Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                         <a href="#"><svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M19 1.00897C18.2165 1.61128 17.349 2.07195 16.4309 2.37324C15.9382 1.75576 15.2833 1.3181 14.5548 1.11947C13.8264 0.920833 13.0596 0.970799 12.3581 1.26261C11.6565 1.55442 11.0542 2.07399 10.6324 2.75105C10.2107 3.42812 9.98993 4.23001 10 5.04827V5.93995C8.56215 5.98058 7.13741 5.63305 5.85264 4.92829C4.56788 4.22354 3.46299 3.18345 2.63636 1.90065C2.63636 1.90065 -0.636364 9.92575 6.72727 13.4925C5.04225 14.739 3.03495 15.364 1 15.2758C8.36364 19.7342 17.3636 15.2758 17.3636 5.02152C17.3629 4.77315 17.341 4.52539 17.2982 4.28143C18.1332 3.38395 18.7225 2.25082 19 1.00897Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                         <a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M13 1H5C2.79086 1 1 2.79086 1 5V13C1 15.2091 2.79086 17 5 17H13C15.2091 17 17 15.2091 17 13V5C17 2.79086 15.2091 1 13 1Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path
                                  d="M12.1999 8.496C12.2986 9.16179 12.1849 9.84177 11.8749 10.4392C11.5649 11.0366 11.0744 11.5211 10.4732 11.8237C9.87195 12.1263 9.19062 12.2317 8.52609 12.1247C7.86156 12.0178 7.24767 11.7041 6.77173 11.2281C6.2958 10.7522 5.98205 10.1383 5.87512 9.47377C5.76819 8.80924 5.87352 8.12791 6.17612 7.5267C6.47873 6.92548 6.96321 6.43499 7.56065 6.12499C8.15809 5.81499 8.83807 5.70127 9.50386 5.8C10.183 5.9007 10.8117 6.21717 11.2972 6.70264C11.7827 7.18812 12.0992 7.81686 12.1999 8.496Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path d="M13.3999 4.6001H13.4079" stroke="#54595F" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                         </a>
                         <a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                               <path
                                  d="M12.1999 6.05273C13.4729 6.05273 14.6938 6.58506 15.594 7.53262C16.4942 8.48017 16.9999 9.76532 16.9999 11.1054V17.0001H13.7999V11.1054C13.7999 10.6587 13.6313 10.2303 13.3313 9.91445C13.0312 9.5986 12.6242 9.42116 12.1999 9.42116C11.7756 9.42116 11.3686 9.5986 11.0685 9.91445C10.7685 10.2303 10.5999 10.6587 10.5999 11.1054V17.0001H7.3999V11.1054C7.3999 9.76532 7.90562 8.48017 8.80579 7.53262C9.70596 6.58506 10.9269 6.05273 12.1999 6.05273Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                               <path d="M4.2 6.89478H1V17H4.2V6.89478Z" stroke="#54595F" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round" />
                               <path
                                  d="M2.6 4.36842C3.48366 4.36842 4.2 3.61437 4.2 2.68421C4.2 1.75405 3.48366 1 2.6 1C1.71634 1 1 1.75405 1 2.68421C1 3.61437 1.71634 4.36842 2.6 4.36842Z"
                                  stroke="#54595F" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            </svg>
                         </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
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