@include('frontend.includes.header')

    <!-- ========================== -->
    <!-- ========================== -->

      <div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/responsibilities-Banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white text-uppercase">Responsible Hospitality</h4>
                <h1 class="text-white animated fadeInLeft">
                  Responsibility
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- main slider end -->

    <!-- welcome sec start -->

    <div class="container-fluid sec_padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xxl-10 mb-4">
            <div class="text-center">
              <h2 class="sec_heading" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Our Responsibility</h2>
              <p>Here at The Backwaters, sustainability is part of our DNA. Since inception, The Backwaters was strongly committed to being community-driven and eco-friendly. Guided by these principles, we endeavour to continuously create an environment that would support and enhance these values. Ingrained into the guest experience, sustainability guides every decision that is made along. 
                The integration of the local community within the workings of our hotel makes our staff as important to us as our guests.
              </p>            
            </div>
          </div>

          <div class="col-12 col-lg-10">
            <div class="row justify-content-center">
              <div class="col-md-3 col-sm-4 col-12 mb-sm-0 mb-3">
                <div class="animated_box text-center d-flex flex-column align-items-center gap-3" data-tilt data-tilt-max="25" data-tilt-speed="500">
                  <div class="large_icon_div p-0 shadow-none">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/res_logo_1.png')}}" alt="" class="w-100">
                  </div>
                  <p>Sustainable and low impact</p>
                </div>
              </div>

              <div class="col-md-3 col-sm-4 col-12 mb-sm-0 mb-3">
                <div class="animated_box text-center d-flex flex-column align-items-center gap-3" data-tilt data-tilt-max="25" data-tilt-speed="500">
                  <div class="large_icon_div p-0 shadow-none">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/res_logo_2.png')}}" alt="" class="w-100">
                  </div>
                  <p>Community drive & empowering women</p>
                </div>
              </div>

              <div class="col-md-3 col-sm-4 col-12 mb-sm-0 mb-3">
                <div class="animated_box text-center d-flex flex-column align-items-center gap-3" data-tilt data-tilt-max="25" data-tilt-speed="500">
                  <div class="large_icon_div p-0 shadow-none">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/res_logo_3.png')}}" alt="" class="w-100">
                  </div>
                  <p>Conservation of nature</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- welcome sec end -->

    <!-- Content sec start -->
    <div class="container-fluid sec_padding pt-1">
      <div class="container">
        <div class="offset-xxl-1 col-xxl-10">
          <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center">
              <h2 class="sec_heading" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Environmental Responsibility</h2>
              <p>Committed to limiting its impact on the environment, we are proud to mention that The 
                Backwaters has almost zero carbon emission thanks to the installation of solar power that controls all hotel functions.</p>
              <p>Going green, we have a strict no plastic policy and have replaced all single-use plastic with upcycled or bio-degradable material. From upcycling shipping containers, or transforming pallets to furniture and waste management, 
                we have taken every measure to ensure that The Backwaters has a minimal impact on the environment and surrounding.</p>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-lg-0 mt-4">
              <div class="gallery_img">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/resposibility_image_1.jpg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content sec end -->

    <!-- Bg sec  -->
    <div class="parallax-section d-flex align-items-center justify-content-center py-5">
      <div class="parallax-bg " style="background-image: linear-gradient(rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/responsibility_paralelx.jpg')}}'); height: 100%; transform: translateY(-27.8px);" id="parallax-bg-1">
      </div>
      <div class="container text-center">
          <h1 class="fw-bold bg_styled_text">Building relationships, strengthening bonds</h1>
      </div>
    </div>
    <!-- Bg sec  -->

    <!-- Social responsibility sec  -->
    <div class="container-fluid sec_padding">
      <div class="container">
        <div class="offset-xxl-1 col-xxl-10">
          <div class="row align-items-center">
            <div class="col-xxl-5 col-xl-5 col-lg-6 offset-lg-0 offset-md-2 col-md-8 offset-sm-1 col-sm-10 col-12">
              <div class="text-center">
                <h2 class="sec_heading d-lg-none d-block mb-4" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Social Responsibility</h2>
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/responsbility_image_2.jpg')}}" alt="" class="img-fluid">
              </div>
            </div>
            <div class="offset-xl-1 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center mt-lg-0 mt-5">
              <h2 class="sec_heading d-lg-block d-none" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Social Responsibility</h2>
              <p>
                Working closely with the local community, we have integrated the locals into all aspects of the day-to-day functions of the hotel. 
                From the initial construction to the sun-down boat ride, all are handled by the villagers of the local community. Supporting local businesses by partnering with them for all our outdoor activities and excursion to creating jobs for the local women, we at The Backwaters have taken every step to create an opportunity to be a community-centric hotel.
              </p>
              <p>
                Women empowerment is a major focus, as we have created a space for local women to prosper and be independent even though they may have never held a professional occupation. Playing a pivotal role in improving their quality of life, we are committed to improving gender equality and the empowerment of women starting with our local vicinity.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Social responsibility sec  -->

    <div class="clearfix"></div>

    <!-- Team image sec  -->
    <div class="container-fluid px-0">
      <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/responsibility_paralelx_2.jpg')}}" alt="" class="img-fluid">
    </div>

@include('frontend.includes.footer')