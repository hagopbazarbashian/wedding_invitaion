<section class="project-gallery-mobile pt-0">
    <div class="container">
       <div class="text-center mb-25">
          <span class="section-subtitle">Our Projects</span>
          <h3 class="section-title">Our Amazing Work</h3>
       </div>
 
       <!-- Swiper Slider -->
       <div class="swiper phone-slider">
          <div class="swiper-wrapper">
             <!-- Slides -->
             @foreach ($TemplateAlls as $TemplateAll)
             <div class="swiper-slide">
               <div class="phone-slide-wrapper">
                  <div class="phone-mockup">
                     <img src="{{ asset('storage/' . $TemplateAll->photo) }}" class="mockup-screen" alt="Screen 1" />
                     <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/iphone_cover.png" class="mockup-frame" alt="iPhone Frame" />
                  </div>
               </div>
               <div class="mockup-actions">
                  <a href="{{ route('template_wedding_one' , $TemplateAll->value ) }}" class="btn btn-sm btn-outline-dark me-1">{{$language['View_All']}}</a>
                  <a href="#" class="btn btn-sm btn-primary">{{$language['Order']}}</a>
              </div>
              
            </div>
             @endforeach
 
             {{-- <div class="swiper-slide">
                <div class="phone-slide-wrapper">
                   <div class="phone-mockup">
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/02.png" class="mockup-screen" alt="Screen 2" />
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/iphone_cover.png" class="mockup-frame" alt="iPhone Frame" />
                   </div>
                </div>
             </div> --}}
 
             {{-- <div class="swiper-slide">
                <div class="phone-slide-wrapper">
                   <div class="phone-mockup">
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/03.png" class="mockup-screen" alt="Screen 3" />
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/iphone_cover.png" class="mockup-frame" alt="iPhone Frame" />
                   </div>
                </div>
             </div> --}}
 
             {{-- <div class="swiper-slide">
                <div class="phone-slide-wrapper">
                   <div class="phone-mockup">
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/04.png" class="mockup-screen" alt="Screen 4" />
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/iphone_cover.png" class="mockup-frame" alt="iPhone Frame" />
                   </div>
                </div>
             </div> --}}
 
             {{-- <div class="swiper-slide">
                <div class="phone-slide-wrapper">
                   <div class="phone-mockup">
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/05.png" class="mockup-screen" alt="Screen 5" />
                      <img src="https://staging.whiteorangesoftware.com/metrix/assets/images/screenshort/iphone_cover.png" class="mockup-frame" alt="iPhone Frame" />
                   </div>
                </div>
             </div> --}}
          </div>
 
          <!-- Pagination & Navigation -->
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
       </div>
    </div>
 </section>
 
 <style>
.mockup-actions {
    position: absolute;
    bottom: 6%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    display: flex;
    gap: 10px;
    justify-content: center;
}

.mockup-actions .btn {
    font-size: 12px;
    padding: 4px 10px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

    .phone-mockup {
       position: relative;
       width: 280px;
       height: 580px;
       margin: 0 auto;
       overflow: hidden; /* ✅ prevents overflow */
       border-radius: 48px; /* ✅ smooth rounded corners */
    }
 
    .mockup-screen {
       position: absolute;
       top: 9%;
       left: 8%;
       width: 84%;
       height: 77%;
       border-radius: 24px;
       object-fit: cover;
       z-index: 1;
    }
 
    .mockup-frame {
       position: absolute;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       z-index: 2;
       pointer-events: none;
    }
 
    .phone-slide-wrapper {
       position: relative;
       width: 280px;
       height: 580px;
       margin: 0 auto;
    }
 
    .section-subtitle {
       font-size: 16px;
       color: #999;
       margin-bottom: 8px;
    }
 
    .section-title {
       font-size: 32px;
       font-weight: bold;
       color: #333;
    }
 
    .phone-slider {
       width: 100%;
       padding-top: 40px;
       padding-bottom: 60px;
    }
    @media (max-width: 768px) {
       .phone-slide-wrapper,
       .phone-mockup {
          width: 180px;
          height: 370px;
       }
 
       .mockup-screen {
          top: 9%;
          left: 8%;
          width: 84%;
          height: 78%;
          border-radius: 18px;
       }
 
       .mockup-frame {
          border-radius: 36px;
       }
 
       .section-title {
          font-size: 24px;
       }
 
       .section-subtitle {
          font-size: 14px;
       }
    }
 
    @media (max-width: 480px) {
       .swiper-button-prev,
       .swiper-button-next {
          display: none;
       }
 
       .swiper-pagination {
          margin-top: 10px;
       }
    }
 </style>
 
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 
 <script>
    document.addEventListener("DOMContentLoaded", function () {
       new Swiper(".phone-slider", {
          loop: true,
          spaceBetween: 30,
          centeredSlides: true,
          slidesPerView: 1.5,
          autoplay: {
             delay: 5000,
             disableOnInteraction: false,
          },
          pagination: {
             el: ".swiper-pagination",
             clickable: true,
          },
          navigation: {
             nextEl: ".swiper-button-next",
             prevEl: ".swiper-button-prev",
          },
          breakpoints: {
             768: { slidesPerView: 3 },
             480: { slidesPerView: 2 },
          },
       });
    });
 </script>
 