
      @include('frontend.includes.header')
      
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner main_slider">
          <div class="carousel-item active">
            <div class="bg_img_fill" style="background-image: linear-gradient(rgb(0 0 0 / 10%), rgb(0 0 0 / 10%)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/slider1.jpg') }}'); animation: img 20s ease-in-out infinite;"></div>
            <div class="carousel-caption">
              <div class="slider_image_caption">
                <div class="slider_image_caption_item">
                  <div class="col-lg-12 p-3 text-center">
                    <h4 class="text-white">EXTRAVAGANTLY WILD</h4>
                    <h1 class="slider_heading animated fadeInLeft">
                      The Backwaters<br>Lodge
                    </h1>
                    <br>
                    <h2 class="slider_sub_heading">
                      Wilpattu, Sri Lanka
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="bg_img_fill" style="background-image: linear-gradient(rgb(0 0 0 / 10%), rgb(0 0 0 / 10%)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/slider2.jpg') }}'); animation: img 20s ease-in-out infinite; background-position: right;"></div>
            <div class="carousel-caption">
              <div class="slider_image_caption">
                <div class="slider_image_caption_item">
                  <div class="col-lg-12 p-3 text-center">
                    <h4 class="text-white">EXTRAVAGANTLY WILD</h4>
                    <h1 class="slider_heading animated fadeInLeft">
                      The Backwaters<br>Lodge
                    </h1>
                    <br>
                    <h2 class="slider_sub_heading">
                      Wilpattu, Sri Lanka
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="bg_img_fill" style="background-image: linear-gradient(rgb(0 0 0 / 10%), rgb(0 0 0 / 10%)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/slider3.jpg') }}'); animation: img 20s ease-in-out infinite; background-position: right;"></div>
            <div class="carousel-caption">
              <div class="slider_image_caption">
                <div class="slider_image_caption_item">
                  <div class="col-lg-12 p-3 text-center">
                    <h4 class="text-white">EXTRAVAGANTLY WILD</h4>
                    <h1 class="slider_heading animated fadeInLeft">
                      The Backwaters<br>Lodge
                    </h1>
                    <br>
                    <h2 class="slider_sub_heading">
                      Wilpattu, Sri Lanka
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>

      </div>
    </header>
    <!-- main slider end -->

    <!-- About us section -->
    <div class="container-fluid sec_padding bg_img" style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ab_bg.png') }}');">
      <div class="container">
        <div class="offset-xxl-1 col-xxl-10">
          <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="home_ab_content">
                <h4 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">INTRODUCTION</h4>
                <h1 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">Renowned <br class="d-lg-block d-none">Splendour</h1>
                <p>With a love for the wild dating as far back as the mid-80’s, The Backwaters has brought to life the idea of making Wilpattu something accessible to everyone. Years of knowledge about the wild, fused with minimalistic modern comforts and eco-friendly practices give you an experience of the jungle – like no other and found nowhere else in Sri Lanka. 
                  The Backwaters offers an original, unique and undisturbed experience of the wild, filled with adventure.</p>
                <div class="row pt-4">
                  <div class="col-lg-6 col-md-3 col-sm-6 col-6">
                    <div>
                      <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/tariq_signature.png')}}" alt="" class="img-fluid signature_img">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div>
                      <h3 class="mb-0">Tarique Omar</h3>
                      <p>GM & Director</p>
                    </div>
                  </div>
                </div>
                <a href="{{ url('/ourstory') }}" class="">
                  <button class="primary_btn mt-5">EXPLORE</button>
                </a>
              </div>
            </div>
            <div class="offset-xxl-1 col-xxl-6 offset-xl-1 col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="row mt-lg-0 mt-4">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="gallery_img m-lg-3 mb-4">
                    <a href="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_1.jpg')}}" data-fancybox="images" class="w-100">
                      <!-- <div class="bg_img gallery_s" style="background-image: url('images/home_ab_1.jpg'); height: 100px;"> -->
                        <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_1.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                  <div class="gallery_img m-lg-3 mb-4">
                    <a href="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_3.jpg')}}" data-fancybox="images" class="w-100">
                      <!-- <div class="bg_img gallery_s" style="background-image: url('images/home_ab_1.jpg'); height: 100px;"> -->
                        <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_3.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt-lg-4">
                  <div class="gallery_img m-lg-3 mb-4">
                    <a href="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_2.jpg')}}" data-fancybox="images" class="w-100">
                      <!-- <div class="bg_img gallery_s" style="background-image: url('images/home_ab_1.jpg'); height: 100px;"> -->
                        <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_2.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                  <div class="gallery_img m-lg-3 mb-4">
                    <a href="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_4.jpg')}}" data-fancybox="images" class="w-100">
                      <!-- <div class="bg_img gallery_s" style="background-image: url('images/home_ab_1.jpg'); height: 100px;"> -->
                        <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_ab_4.jpg')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About us section -->

    <!-- Video Section  -->
    <div class="container-fluid video_sec bg_img d-flex align-items-center justify-content-center" style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/video_backwater.jpg') }}');">
      <a href="https://www.youtube.com/embed/jgtOa-svpu8?si=feT2vNQI2vBgRJoe" data-fancybox="video" class="vid_btn">
        <i class="fas fa-play"></i>
      </a>
    </div>
    <!-- Video Section  -->

    <!-- Responsibility section  -->
    <div class="container-fluid sec_padding bg_img" style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ab_bg.png') }}');">
      <div class="container">
        <div class="offset-xxl-1 col-xxl-10">
          <div class="row flex-md-row flex-column-reverse">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 mt-md-0 mt-4">
              <div class="gallery_img">
                <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_res_img.jpg')}}" alt="" class="img-fluid">
              </div>
            </div>
            <div class="offset-xxl-1 col-xxl-6 offset-xl-1 col-xl-6 offset-lg-1 col-lg-6 col-md-6 col-sm-12 col-12">
              <h4 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">OUR RESPONSIBILITY</h4>
                <h1 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">A Journey of Sustainability</h1>
                <p>We at The Backwaters make it a point to protect the foundations that made this venture a success – the forest reserve and our local community. With unique upcycled design concepts, no plastic policies, 
                  women empowerment, preservation of the ecosystem, and much more, we have created an ethical wildlife encounter.</p>
                <a href="{{ url('/responsibility') }}" class="">
                  <button class="primary_btn mt-3">EXPLORE</button>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Responsibility section  -->

    <!-- Image section  -->
    <div class="container-fluid bg_sec bg_img" style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_img.jpg') }}');">
    </div>
    <!-- Image section  -->

    <!-- Activities section  -->
  <div class="container-fluid sec_padding bg_img" style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ab_bg.png') }}');">
    <div class="container">
      <div class="offset-xxl-1 col-xxl-10">
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-10 col-sm-10 col-12">
          <h4 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">ACTIVITIES</h4>
          <h1 class="mb-lg-0 mb-4" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">Things To Do</h1>
        </div>

        <ul class="nav nav-pills mb-3 justify-content-end custom_tabs gap-1 d-none d-lg-flex" id="pills-tab"
          role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">One</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Two</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
              type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Three</button>
          </li>
        </ul>

        <div class="tab-content accordion" id="pills-tabContent">

          <div class="tab-pane fade show active accordion-item" id="pills-home" role="tabpanel"
            aria-labelledby="pills-home-tab">
            <h2 class="accordion-header d-lg-none" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                One
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show d-lg-block" aria-labelledby="headingOne"
              data-bs-parent="#pills-tabContent">
              <div class="accordion-body p-lg-0">

                <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity1Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_1.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">River Safari</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>

                        <!-- Modal 1 Start -->
                        <div class="modal fade custom_modal" id="activity1Modal" tabindex="-1"
                          aria-labelledby="activity1ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>River Safari</h2>
                                  <p class="mb-0">Take a relaxing cruise down the river as the backwaters of the Kala
                                    Oya meanders through the forest. With the wind in your hair and the cool ripple of
                                    the waters, enjoy a calm quiet punting down the river passing scenic views, and
                                    creating a memorable experience. As the river and forest seemingly meet at the
                                    horizon, gaze upon flocks of storks as they fly across the sky or a solitary
                                    kingfisher perched on a branch eyeing its evening snack. Come dry season, you might
                                    even catch a glimpse of a lone elephant braving near the banks for a sip of water
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal 1 End -->

                      </div>
                      <div class="col-md-6 col-sm-12 col-12 mb-lg-0 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity2Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_2.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Tuk Tuk Tours</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>

                        <!-- Modal 2 Start -->
                        <div class="modal fade custom_modal" id="activity2Modal" tabindex="-1"
                          aria-labelledby="activity2ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Tuk Tuk Tours</h2>
                                  <p class="mb-0">Hop in the all-time favorite tuk tuk and discover the nearby villages
                                    and surrounding sights. Drive through winding roads that will take you through
                                    cultivated fields, forests, village scenes and lakes. An entertaining adventure in
                                    true Sri Lankan style.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal 2 End -->
                      </div>
                      <div class="col-md-6 col-sm-12 col-12 mb-lg-0 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity3Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_3.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Bird Watching</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                        <!-- Modal 3 Start -->
                        <div class="modal fade custom_modal" id="activity3Modal" tabindex="-1"
                          aria-labelledby="activity3ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Bird Watching</h2>
                                  <p class="mb-0">The diverse habitat found around Backwaters makes it a perfect place
                                    for bird watchers to spend their holiday. From resident and migratory waterbirds
                                    wading the shallows of nearby lakes, to a glimpse of rare endemic birds as they
                                    disappear within the treetops – it’s a birders paradise. From hornbills, eagles,
                                    owls, warblers, flycatchers, munias, terns, weavers, swifts, and much more within
                                    the nature reserve the surrounding forest gives you a perfect opportunity to capture
                                    that perfect picture.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal 3 End -->
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="col-12 mb-3">
                      <a data-bs-toggle="modal" data-bs-target="#activity4Modal">
                        <div class="grid_box_2 bg_img d-flex align-items-end scaling_background gradient-overlay"
                          style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_4.jpg')}}');">
                          <div class="d-flex justify-content-between w-100 align-items-center p-3">
                            <div>
                              <h3 class="mb-0 text-white">Wilpattu National Park</h3>
                            </div>
                            <div>
                              <i class="fa-solid fa-arrow-right text-white"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                      <!-- Modal 4 Start -->
                      <div class="modal fade custom_modal" id="activity4Modal" tabindex="-1"
                        aria-labelledby="activity4ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content position-relative m-xm-0 m-3">
                            <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                            <div class="modal-body">
                              <div class="text-center p-4">
                                <h2>Wilpattu National Park</h2>
                                <p class="mb-0">Explore the wild of Sri Lanka’s largest and oldest national park,
                                  steeped with a history dating as far back as the origin of Sri Lankan history. An
                                  early start on the safari is guaranteed to give bird lovers magnificent sightings of
                                  birds fluttering across the treetops, or if you are in luck a solitary leopard taking
                                  a morning stroll on the road. Drive deep into the wild jungle to search for three of
                                  Sri Lanka’s Big 5 – the elephant, leopard, and sloth bear amongst other animals such
                                  as spotted deer, sambar, jackals, barking deer, crocodiles, mongoose, and much more.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal 4 End -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade accordion-item" id="pills-profile" role="tabpanel"
            aria-labelledby="pills-profile-tab">
            <h2 class="accordion-header d-lg-none" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Two
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo"
              data-bs-parent="#pills-tabContent">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity5Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_5.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Island Getaway</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="modal fade custom_modal" id="activity5Modal" tabindex="-1"
                          aria-labelledby="activity5ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Island Getaway</h2>
                                  <p class="mb-0">Adding to your memorable experience, take this opportunity to visit an
                                    island in the middle of the river, just a few minutes away from the hotel. Perfect
                                    for a romantic wine and dine evening with your partner or a fun-filled night with
                                    family and friends complete with a brilliant bonfire.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-12 mb-lg-0 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity6Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image:  url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_6.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Bicycle Excursion</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="modal fade custom_modal" id="activity6Modal" tabindex="-1"
                          aria-labelledby="activity6ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Bicycle Excursion</h2>
                                  <p class="mb-0">Another active way to sightsee, grab a bike, don the gear and take
                                    off. From wild and rough pathways to smooth carpeted roads, cruise through the
                                    village at your own pace and even find a quiet spot under a tree to catch up on a
                                    bit of RnR. Or for an authentic village experience, get your hands dirty and dig
                                    your heels in the cool mud and enjoy some good hard labour come harvest season when
                                    the farmers gather the paddy crop.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-12 mb-lg-0 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity7Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_7.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Kayaking</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="modal fade custom_modal" id="activity7Modal" tabindex="-1"
                          aria-labelledby="activity7ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Kayaking</h2>
                                  <p class="mb-0">Glide your way through the gently flowing backwaters and mingle with
                                    the wild. Enjoy the refreshing breeze and the lull of the softly lapping water. The
                                    journey down the river gives you a chance to be one with nature and bask in the
                                    wonder of this rich ecosystem. Take in the sights of birds flying past or fish
                                    splashing near your kayak as you paddle by.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="col-12 mb-3">
                      <a data-bs-toggle="modal" data-bs-target="#activity8Modal">
                        <div class="grid_box_2 bg_img d-flex align-items-end scaling_background gradient-overlay"
                          style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_8.jpg')}}');">
                          <div class="d-flex justify-content-between w-100 align-items-center p-3">
                            <div>
                              <h3 class="mb-0 text-white">Fishing</h3>
                            </div>
                            <div>
                              <i class="fa-solid fa-arrow-right text-white"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="modal fade custom_modal" id="activity8Modal" tabindex="-1"
                        aria-labelledby="activity8ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content position-relative m-xm-0 m-3">
                            <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                            <div class="modal-body">
                              <div class="text-center p-4">
                                <h2>Fishing</h2>
                                <p class="mb-0">Reel in your catch of the day with a spot of leisurely fishing from the
                                  river deck or a session of trolling in the sea. With an abundance of fish in the
                                  backwaters, with equipment provided by the hotel, fishing enthusiasts can take an
                                  afternoon off from exploring the wild to chill out on the deck and cross their fingers
                                  for a big catch or head over to Kalpitiya to try some bigger fish.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade accordion-item" id="pills-contact" role="tabpanel"
            aria-labelledby="pills-contact-tab">
            <h2 class="accordion-header d-lg-none" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Three
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree"
              data-bs-parent="#pills-tabContent">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity9Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image:  url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_9.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Dolphin and Whale Watching</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="modal fade custom_modal" id="activity9Modal" tabindex="-1"
                          aria-labelledby="activity9ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Dolphin and whale watching</h2>
                                  <p class="mb-0">A 45-minute trip to Kalpitiya, and a quick boat ride out to sea, takes
                                    you to the deep waters and the home of the remaining two of Sri Lanka’s Big 5 – the
                                    Blue whale and the Sperm whale. Other types of whales that visit off the coast of
                                    Kalpitiya are the Melon-Headed, Pilot, Brydes and Dwarf Sperm whales. Attracted by
                                    the krill rich waters, these gentle creatures can be sighted just a short distance
                                    from the coastline, making it one of the best places to see whales in Sri Lanka.
                                    While these majestic giants roam the deep, massive pods of dolphins also grace our
                                    shores – from the playful Spinner and Spotted dolphins, beautifully coloured Striped
                                    dolphins and the more abundant Bottlenose dolphin, while the shy Humpback, Risso and
                                    Fraser dolphins prefer the comforts of the deeper waters. </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-12 mb-lg-0 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity10Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image:  url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_10.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Snorkeling</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="modal fade custom_modal" id="activity10Modal" tabindex="-1"
                          aria-labelledby="activity10ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Snorkeling</h2>
                                  <p class="mb-0">With a rich marine ecosystem in the tropical waters of Kalpitiya,
                                    snorkel your way through the shallow waters of the coastline looking at exotic
                                    marine life. Home to Bar Reef – the largest coral reef in Sri Lanka, many colourful
                                    fish and sea creatures such as Manta Rays, Sea Turtles, and Reef Sharks have taken
                                    residence beneath the waves.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-12 mb-lg-0 mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#activity11Modal">
                          <div class="grid_box_1 bg_img d-flex align-items-end scaling_background gradient-overlay"
                            style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_11.jpg')}}');">
                            <div class="d-flex justify-content-between w-100 align-items-center p-3">
                              <div>
                                <h3 class="mb-0 text-white">Places of Interest</h3>
                              </div>
                              <div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="modal fade custom_modal" id="activity11Modal" tabindex="-1"
                          aria-labelledby="activity11ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content position-relative m-xm-0 m-3">
                              <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                              <div class="modal-body">
                                <div class="text-center p-4">
                                  <h2>Places of Interest</h2>
                                  <p class="mb-0">A short boat ride will take you to Kalpitiya where you can explore the
                                    Dutch Bay and drop by the old Dutch Fort in Kalpitiya, a small square-shaped fort
                                    constructed with coral and limestone. Just a few meters away from the fort is a
                                    small Dutch church.<br><br>
                                    Roughly one-hour drive North inside the Wilpattu National Park takes you to
                                    Tambapanni now known as Kudrimalai Point with its unique red earth cliffs which is
                                    an ancient port with great historic significance as it is the place where Prince
                                    Vijiya landed, who later became the father of the Sri Lankan people.<br><br>
                                    Roughly one-and-a-half-hour drive South takes you to Anawilundawa Bird Sanctuary, a
                                    beautiful harmony of mangrove, coastal and freshwater ecosystems and home to a
                                    diverse range of resident, native and migratory birds.<br><br>
                                    A two-hour drive towards the centre of the island brings you to the sacred ancient
                                    city of Anuradhapura – the hub of Sri Lanka’s cultural triangle. One of the greatest
                                    monastic cities of the ancient world, Anuradhapura dates back to the 5th century BC,
                                    standing the test of time while remaining the majestic seat of the kingdom of Sri
                                    Lanka until the 11th century AD. Ancient stupas, reservoirs, magnificent rock
                                    carvings, historic monasteries, splendid palaces, pavilions, and parks, pioneering
                                    hydraulic techniques, and colossal stone statues are some of the glorious wonders
                                    that make this ancient city the pride of the island. Offering a multitude of places
                                    to visit, make it a point to visit the 2,200 year-old Sri Maha Bodhi (Sacred Bo
                                    Tree) which is the world’s oldest historical tree, the 1st century BC Abhayagiri,
                                    and the 3rd century AD Jetawana Dagabas which are both UNESCO World Heritage sites
                                    and second in height only to the pyramids of Giza.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="col-12 mb-3">
                      <a data-bs-toggle="modal" data-bs-target="#activity12Modal">
                        <div class="grid_box_2 bg_img d-flex align-items-end scaling_background gradient-overlay"
                          style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/home_ac_12.jpg')}}');">
                          <div class="d-flex justify-content-between w-100 align-items-center p-3">
                            <div>
                              <h3 class="mb-0 text-white">Village Walks</h3>
                            </div>
                            <div>
                              <i class="fa-solid fa-arrow-right text-white"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="modal fade custom_modal" id="activity12Modal" tabindex="-1"
                        aria-labelledby="activity12ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content position-relative m-xm-0 m-3">
                            <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                            <div class="modal-body">
                              <div class="text-center p-4">
                                <h2>Village Walks</h2>
                                <p class="mb-0">Explore the surrounding with a guide from the village or you can explore
                                  on your own. Cross little streams and bountiful fields of paddy and make your way to
                                  the beautiful Lotus Lake (Nelum Wewa) which is a haven for Weaver bird nests. On your
                                  route you will always find friendly locals ever ready to greet you with a heartwarming
                                  smile and a refreshing king coconut.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Activities section  -->

  <!-- Rooms Section  -->
  <div class="container-fluid" style="overflow: hidden;">
    <div class="container sec_padding">
      <div class="text-center mb-5">
        <h4 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">ROOMS</h4>
        <h1 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">Exceptional Accomodation</h1>
      </div>
      <div class="row justify-content-center pt-3">
        <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
          <div class="position-relative">
            <!-- Swiper -->
            <div class="swiper accomodation_swiper">
              <div class="swiper-wrapper">
                <!-- Slide 1  -->
                <div class="swiper-slide  position-relative">
                  <div class="gallery_img">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_rooms_1.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="position-absolute facility_box">
                    <div class="d-flex p-3 bg-white gap-md-4 gap-3 feature_icon_box">
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Security">
                          <i class="fa-solid fa-key"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Communities">
                          <i class="fa-solid fa-users"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Entertainment">
                          <i class="fa-solid fa-guitar"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                          <i class="fa-solid fa-dumbbell"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Luxury">
                          <i class="fa-solid fa-bed"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Room Service">
                          <i class="fa-solid fa-broom"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-html="true"
                          title="+ <span>4</span> more facilities">
                          + <span>4</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide  position-relative">
                  <div class="gallery_img">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_rooms_2.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="position-absolute facility_box">
                    <div class="d-flex p-3 bg-white gap-md-4 gap-3 feature_icon_box">
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Security">
                          <i class="fa-solid fa-key"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Communities">
                          <i class="fa-solid fa-users"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Entertainment">
                          <i class="fa-solid fa-guitar"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                          <i class="fa-solid fa-dumbbell"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Luxury">
                          <i class="fa-solid fa-bed"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Room Service">
                          <i class="fa-solid fa-broom"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-html="true"
                          title="+ <span>4</span> more facilities">
                          + <span>4</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide  position-relative">
                  <div class="gallery_img">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_rooms_3.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="position-absolute facility_box">
                    <div class="d-flex p-3 bg-white gap-md-4 gap-3 feature_icon_box">
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Security">
                          <i class="fa-solid fa-key"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Communities">
                          <i class="fa-solid fa-users"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Entertainment">
                          <i class="fa-solid fa-guitar"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                          <i class="fa-solid fa-dumbbell"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Luxury">
                          <i class="fa-solid fa-bed"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Room Service">
                          <i class="fa-solid fa-broom"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-html="true"
                          title="+ <span>4</span> more facilities">
                          + <span>4</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide  position-relative">
                  <div class="gallery_img">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_rooms_4.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="position-absolute facility_box">
                    <div class="d-flex p-3 bg-white gap-md-4 gap-3 feature_icon_box">
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Security">
                          <i class="fa-solid fa-key"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Communities">
                          <i class="fa-solid fa-users"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Entertainment">
                          <i class="fa-solid fa-guitar"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                          <i class="fa-solid fa-dumbbell"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Luxury">
                          <i class="fa-solid fa-bed"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Room Service">
                          <i class="fa-solid fa-broom"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-html="true"
                          title="+ <span>4</span> more facilities">
                          + <span>4</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                 <!-- Slide 5 -->
                <div class="swiper-slide  position-relative">
                  <div class="gallery_img">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_rooms_5.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="position-absolute facility_box">
                    <div class="d-flex p-3 bg-white gap-md-4 gap-3 feature_icon_box">
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Security">
                          <i class="fa-solid fa-key"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Communities">
                          <i class="fa-solid fa-users"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Entertainment">
                          <i class="fa-solid fa-guitar"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                          <i class="fa-solid fa-dumbbell"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Luxury">
                          <i class="fa-solid fa-bed"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Room Service">
                          <i class="fa-solid fa-broom"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-html="true"
                          title="+ <span>4</span> more facilities">
                          + <span>4</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide  position-relative">
                  <div class="gallery_img">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_rooms_6.jpg')}}" alt="" class="img-fluid">
                  </div>
                  <div class="position-absolute facility_box">
                    <div class="d-flex p-3 bg-white gap-md-4 gap-3 feature_icon_box">
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Security">
                          <i class="fa-solid fa-key"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Communities">
                          <i class="fa-solid fa-users"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Entertainment">
                          <i class="fa-solid fa-guitar"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                          <i class="fa-solid fa-dumbbell"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Luxury">
                          <i class="fa-solid fa-bed"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Room Service">
                          <i class="fa-solid fa-broom"></i>
                        </a>
                      </div>
                      <div>
                        <a data-bs-toggle="tooltip" data-bs-html="true"
                          title="+ <span>4</span> more facilities">
                          + <span>4</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="swiper-button-next">
                <i class="fa-solid fa-arrow-right" style="font-size: 20px;"></i>
              </div>
              <div class="swiper-button-prev">
                <i class="fa-solid fa-arrow-left" style="font-size: 20px;"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xxl-8 col-xl-7 col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="bg-white position-relative home_rooms_content text-center mb-3">
            <h2>A Class of Comfort</h2>
            <p class="mb-0">Bringing the concept of urban living into the wild, the unparalleled comfort of the rooms at
              The Backwaters is a fusion of luxury and minimalism. Styled based on an upcycle and sustainable concept,
              these elevated rooms open up to the
              jungle canopy, giving you front row seats to an indoor-outdoor experience of the beautiful wild from your
              private deck.</p>
          </div>
          <div class="text-center">
            <a href="{{ url('/rooms') }}" class="">
              <button class="primary_btn mt-3">EXPLORE</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rooms Section  -->

    <!-- Take a Tour section  -->

    <div class="container-fluid sec_padding bg_img" style="background-image:  url('{{ asset(env('ASSETS_PATH') . '/frontend/images/amenities_bg.jpg')}}');">
      <div class="container">
        <div class="offset-xl-1 col-xl-10">
          <div class="row amenities_sec">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
              <h4 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Take a Tour</h4>
              <h1 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">Other Amenities</h1>
              <p class="mb-0">Relax after a long day of exploring with a range of fun in-house activities to choose from. From decks and hammocks by the waters to while 
                the afternoons away in the warmth of the sun to a quick game of chess to boost the spirits.</p>
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-md-0 mt-4">
              <div class="row mb-3">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-4 mb-sm-0 mb-3">
                  <div class="large_icon_div">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/icons/home_oa_1.png')}}" alt="" class="w-100">
                  </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-8 d-flex flex-column justify-content-center">
                  <h3>Board Games</h3>
                  <p class="font_14 mb-0">Looking for something to do while waiting for lunch? Steal some moves on the rustic chess board just next to the dining area.</p>
                </div>
              </div>

              <!-- ================= -->
              <!-- ================= -->

              <div class="row mb-3">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-4 mb-sm-0 mb-3">
                  <div class="large_icon_div">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/icons/home_oa_2.png')}}" alt="" class="w-100">
                  </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-8 d-flex flex-column justify-content-center">
                  <h3>Hangouts</h3>
                  <p class="font_14 mb-0">Choose from a variety of hangout options. Fancy swings that allow you to dip your feet in the cool water or recline in the calm evening breeze on the floating deck.</p>
                </div>
              </div>

              <!-- ================= -->
              <!-- ================= -->

              <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-4 mb-sm-0 mb-3">
                  <div class="large_icon_div">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/icons/home_oa_3.png') }}" alt="" class="w-100">
                  </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-8 d-flex flex-column justify-content-center">
                  <h3>Common Area</h3>
                  <p class="font_14 mb-0">Relax in the comfort of this upcycled sitting area, complete with comfortable rustic couches and a swing – making it a great place to unwind and relax.</p>
                </div>
              </div>

            </div>
           </div>
        </div>
      </div>
    </div>

    <div class="container-fluid sec_padding" style="overflow: hidden;">

      <div class="text-center mb-5">
        <h4 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">TAKE A TOUR</h4>
        <h1 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">View our Gallery</h1>
      </div>

      <div class="container">
        <div class="carousel-container">
        <div class="swiper-container"  style="overflow: visible;">
            <div class="swiper tour_slider position-relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-1"><img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_gallery_1.jpg')}}" alt=""></div>
                    <div class="swiper-slide slide-2"><img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_gallery_5.jpg')}}" alt=""></div>
                    <div class="swiper-slide slide-3"><img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_gallery_2.jpg')}}" alt=""></div>
                    <div class="swiper-slide slide-4"><img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_gallery_6.jpg')}}" alt=""></div>
                    <div class="swiper-slide slide-5"><img src="{{ asset(env('ASSETS_PATH').'/frontend/images/home_gallery_4.jpg')}}" alt=""></div>
                </div>
                
                
            </div>
            
            <div class="fixed-caption d-md-block d-none">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="camera-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" id="fi_2956744" data-name="Layer 3" width="512" height="512" viewBox="0 0 32 32"><path d="M27.348,7H23.054l-.5-1.5A3.645,3.645,0,0,0,19.089,3H12.911A3.646,3.646,0,0,0,9.447,5.5L8.946,7H4.652A3.656,3.656,0,0,0,1,10.652v14.7A3.656,3.656,0,0,0,4.652,29h22.7A3.656,3.656,0,0,0,31,25.348v-14.7A3.656,3.656,0,0,0,27.348,7ZM29,25.348A1.654,1.654,0,0,1,27.348,27H4.652A1.654,1.654,0,0,1,3,25.348v-14.7A1.654,1.654,0,0,1,4.652,9H9.667a1,1,0,0,0,.948-.684l.729-2.187A1.65,1.65,0,0,1,12.911,5h6.178a1.649,1.649,0,0,1,1.567,1.13l.729,2.186A1,1,0,0,0,22.333,9h5.015A1.654,1.654,0,0,1,29,10.652Z"></path><path d="M16,10a7.5,7.5,0,1,0,7.5,7.5A7.508,7.508,0,0,0,16,10Zm0,13a5.5,5.5,0,1,1,5.5-5.5A5.506,5.506,0,0,1,16,23Z"></path><circle cx="26" cy="12" r="1"></circle></svg>
                </div>
                <div class="slide-counter" id="slide-counter"><p></p></div>
              </div>
              
              <h2 class="caption-title mb-4" id="current-caption">Hangouts</h2>

              <div class="swiper-pagination"></div>

              <div class="slider-count-big mb-0" id="slide-counter2"><p></p></div>
                
            </div>
        </div>
      </div>
      </div>

      <div class="text-center">
        <a href="{{ url('/gallery') }}" class="">
          <button class="primary_btn mt-5">EXPLORE</button>
        </a>
      </div>
      
    </div>

    <!-- Take a Tour section  -->

    <!-- map --> 

    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.3463849428344!2d79.86338171432295!3d8.268279102716258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afd092d2578ff35%3A0xa0becb7b24067fd3!2sThe%20Backwaters%20Lodge%20-%20Wilpattu!5e0!3m2!1sen!2slk!4v1613807091104!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border: 0px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

      @include('frontend.includes.footer')