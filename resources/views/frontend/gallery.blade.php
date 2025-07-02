
@include('frontend.includes.header')


     <div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white text-uppercase">Wild Escape</h4>
                <h1 class="text-white animated fadeInLeft">
                  Gallery
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- main slider end -->

    <!-- Content section start  -->

    <div class="container-fluid sec_padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-10">
            <div class="text-center">
              <h2 class="sec_heading"data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Picturesque Backwaters</h2>
              <p>Where luxury meets nature and adventure meets comfort. Explore the wild wonder of The Backwaters as we bring you an innovative experience of the forest. Discover a harmony of natural beauty and 
                modern comforts that create unforgettable memories that would last a lifetime. Here’s a glimpse of where nature meets luxury.
              </p>            
            </div>
          </div>

          <!-- Guest Area -->
          <div class="row g-3 gallery_row mb-4">
            <h3 class="text-center mb-3"data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Guest Areas</h3>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_1.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_1.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_2.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_2.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_3.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_3.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_4.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_gu_image_4.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
          </div>
          <!-- Guest Area -->

          <!-- Wild Life -->
          <div class="row g-3 gallery_row mb-4">
            <h3 class="text-center mb-3"data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Wildlife</h3>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_1.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_1.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_2.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_2.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_3.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_3.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_4.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_4.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_5.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_5.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_6.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_6.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_7.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_7.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_8.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_wild_image_8.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
          </div>
          <!-- Wild Life -->

          <!-- Bird Life  -->
          <div class="row g-3 gallery_row mb-4">
            <h3 class="text-center mb-3"data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Bird Life</h3>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_1.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_1.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_2.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_2.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_3.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_3.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_4.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_4.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_5.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_5.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_6.jpg')}}"data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_6.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_7.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_7.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_8.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_bl_image_8.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
          </div>
          <!-- Bird Life  -->

          <!-- Restaurant  -->
          <div class="row g-3 gallery_row mb-4">
            <h3 class="text-center mb-3"data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Restaurant</h3>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_re_image_1.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_re_image_1.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_res_image_2.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_res_image_2.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_re_image_3.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_re_image_3.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_res_image_4.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_res_image_4.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
          </div>
          <!-- Restaurant  -->

          <!-- Hangouts  -->
          <div class="row g-3 gallery_row mb-4">
            <h3 class="text-center mb-3" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Hangouts</h3>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_1.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_1.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_2.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_2.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_3.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_3.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_4.jpg')}}" data-fancybox="images" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/gallery_hag_image_4.jpg')}}" alt="" class="img-fluid w-100">
                </a>
              </div>
            </div>
          </div>
          <!-- Hangouts  -->

          <!-- Social Share  -->
          <div class="d-flex justify-content-center align-items-center gap-3 mt-5">
            <div>
              <p class="mb-0">Follow Us On</p>
            </div>
            <div>
              <a href="https://www.instagram.com/thebackwaters.lk/?hl=en">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/instagram-logo.png')}}" alt="" style="height: 35px;">
              </a>
            </div>
          </div>
          <!-- Social Share  -->
          
        </div>
      </div>
    </div>

@include('frontend.includes.footer')