@include('frontend.includes.header')

      <div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/rooms_banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white text-uppercase">Luxury Meets Nature</h4>
                <h1 class="text-white animated fadeInLeft">
                  Rooms
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- main slider end -->

    <div class="container-fluid sec_padding pb-4">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-12 col-xxl-10 text-center">
                  <h1 class="sec_heading mb-4" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Our Accommodation</h1>
                  <p>
                    Pioneering a new and unique type of accommodation, nestled among the treetops are luxury rooms, with the best form of comfort found in the wilds of Sri Lanka. Boasting an exclusive form of architecture, be one with nature as you wake up to the pleasant sounds of twittering birds at the crack of dawn.
                  </p>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid px-1">
      <div class="row g-1 rooms_img_row">
          <div class="col-lg-7 col-md-7 col-sm-12 col-12">
              <div class="gallery_img">
                <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/rooms_image_1.jpg')}}" data-fancybox="rooms" class="w-100">
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/rooms_image_1.jpg')}}" class="img-fluid w-100">
                </a>
              </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12">
            <div class="row g-1">
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="gallery_img">
                  <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/rooms_image_2.jpg')}}" data-fancybox="rooms" class="w-100">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/rooms_image_2.jpg')}}" class="img-fluid w-100">
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="gallery_img">
                    <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_3.jpg')}}" data-fancybox="rooms" class="w-100">
                      <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_3.jpg')}}" class="img-fluid w-100">
                    </a>
                  </div>
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="container-fluid py-5">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-12 col-xxl-10 text-center">
                  <p>Created from something that wouldn’t even remotely suggest comfort and luxury, here is what makes the rooms at The Backwaters so unique and extra special. Upcycling containers to create an extravagant form of accommodation, these cabin-type rooms are elevated giving you an uninterrupted view of the forest canopy. With this unique feature, you no 
                    longer need to look up to see a bird on a tree, but simply step onto the deck as it opens up a whole new experience of its own.</p>
                  <p>Step out and come face-to-face with a giant squirrel napping on a tree branch just outside your room or a group of langurs picking berries on a treetop a few feet away. 
                    If you are lucky enough you might even catch a pair of babblers building a nest right next to your deck.</p>
              </div>
          </div>
      </div>
  </div>


  <div class="container mb-5">
    <div class="offset-xxl-1 col-xxl-10">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
            <div class="gallery_img">
              <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_4.jpg')}}" data-fancybox="rooms" class="w-100">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_4.jpg')}}" class="img-fluid">
              </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
            <div class="gallery_img">
              <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_5.jpg')}}" data-fancybox="rooms" class="w-100">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_5.jpg')}}" class="img-fluid">
              </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
            <div class="gallery_img">
              <a href="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_6.jpg')}}" data-fancybox="rooms" class="w-100">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/room_image_6.jpg')}}" class="img-fluid">
              </a>
            </div>
        </div>
      </div>
      <div class="text-center">
        <a href="booking.html" class="">
          <button class="primary_btn mt-3">BOOK NOW</button>
        </a>
      </div>
      <div class="text-center mt-5">
        <p>Each of these rooms are fully equipped with a comfortable double bed, hot water, air conditioning, selected toiletries, tea and coffee, electric kettle, and most importantly the door and windows 
          are completely sealed with a sliding mesh door to keep out any unexpected visitors – making it entirely safe and secure.</p>
      </div>
    </div>
  </div>

  <div class="parallax-section d-flex align-items-center justify-content-center">
      <div class="parallax-bg" style="background-image: linear-gradient(rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/room_bg.jpg')}}');"></div>
      <h2 class="bg_styled_text text-center px-2">Relax, unwind and be one with nature</h2>
  </div>

@include('frontend.includes.footer')