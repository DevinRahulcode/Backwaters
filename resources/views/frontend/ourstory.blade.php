@include('frontend.includes.header')

      <div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory-banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white">NEW BEGINNINGS</h4>
                <h1 class="text-white animated fadeInLeft">
                  Our Story
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
              <h2 class="sec_heading" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Welcome to The Backwaters</h2>
              <p class="fw-bold mb-4" style="letter-spacing: 1px;" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">COMFORT AND LUXURY IN THE WILDS OF WILPATTU</p>

              <p>Located on the banks of the backwater of the majestic Kala oya, The Backwaters is a magical place where luxury meets nature, blending to give you a matchless experience on the borders of Wilpattu National Park. Surrounded by dense forests of the nature reserve, the hotel gives you stunning views of the rich biodiversity in the canopy top as exotic wildlife awakes, and the sun peeks through trees in the distance bracing, up for a busy day. <br>
                A complex of separately constructed cabin-type accommodations elevated to tree top level, this might be one of the best places in Sri Lanka for wildlife enthusiasts and nature lovers to stay. Complete with a private bathroom, an open deck and bug protection mesh to keep all the unwelcome guests away.
                Dine in style with a mouth-watering spread of local dishes that will set your palette ablaze with flavours. From local and international breakfast delights, to rich Sri Lankan rice and curry for lunch and fun innovative dishes for dinner – all inspired by local ingredients and flavours. Be enthralled by the unique tastes that rule this spice island. <br>
                Take this opportunity to enjoy nature in its purest form as The Backwaters takes every step to preserve its environment. From a no plastic policy, upcycled and eco-friendly design and minimal impact to nature during construction, the unique architecture embodies the core concept of The Backwaters – respecting the environment and creating an eco-friendly and sustainable space. <br>
                Making the list of one of the few eco-friendly hotels in Sri Lanka, The Backwaters is open all year round from bright sunny months to the rainy season, there are many activities to keep you occupied for all types of weather. From early morning safaris in the wild, kayaking through the evening breeze or enjoying a cool rainy day reading up on Sri Lankan wildlife.
              </p>            
            </div>
          </div>

          <div class="col-12 col-xxl-10" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">
            <div class="row">
              <div class="col-sm-3 col-6">
                <div class="animated_box text-center d-flex flex-column align-items-center gap-3" data-tilt data-tilt-max="25" data-tilt-speed="500">
                  <div class="large_icon_div p-0 shadow-none">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/story_icon1.png')}}" alt="" class="w-100">
                  </div>
                  <p>Strict Zero Plastic Policy</p>
                </div>
              </div>

              <div class="col-sm-3 col-6">
                <div class="animated_box text-center d-flex flex-column align-items-center gap-3" data-tilt data-tilt-max="25" data-tilt-speed="500">
                  <div class="large_icon_div p-0 shadow-none">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/story_icon2.png')}}" alt="" class="w-100">
                  </div>
                  <p>Bird Watching Paradise</p>
                </div>
              </div>

              <div class="col-sm-3 col-6">
                <div class="animated_box text-center d-flex flex-column align-items-center gap-3" data-tilt data-tilt-max="25" data-tilt-speed="500">
                  <div class="large_icon_div p-0 shadow-none">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/story_icon3.png')}}" alt="" class="w-100">
                  </div>
                  <p>3 hrs From The International Airport</p>
                </div>
              </div>

              <div class="col-sm-3 col-6">
                <div class="animated_box text-center d-flex flex-column align-items-center gap-3" data-tilt data-tilt-max="25" data-tilt-speed="500">
                  <div class="large_icon_div p-0 shadow-none">
                    <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/story_icon4.png')}}" alt="" class="w-100">
                  </div>
                  <p>Unique Design Concept</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- welcome sec end -->

    <!-- bg image section start  -->
    <div class="parallax-section d-flex align-items-center justify-content-center">
      <div class="parallax-bg " style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/our_story_parallax1.jpg')}}');"
        id="parallax-bg-1"></div>
    </div>
    <!-- bg image section end  -->

    <!-- Contents start  -->
    <div class="container sec_padding pb-3">
      <div class="row justify-content-center">
        <div class="col-12 col-xxl-10 mb-4">
          <div class="mb-5">
            <div class="text-center">
              <h2 class="sec_heading" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">About Wilpattu</h2>
              <p>Declared a wildlife sanctuary in 1905, it wasn’t until 1938 that Wilpattu was named a national park, and 
                with a staggering span of 131,693 hectares, Wilpattu National Park is not only the oldest but also the largest national park on the island. Located on the northwest coast of the island, this dry zone forest has a distinctive feature that gives it its name. Home to over 50 villus (natural rainwater filled lakes), a translation of Wilpattu would give you, The Land of Lakes. 
              </p>    
              <p>Over 30 species of mammals call this sanctuary home as the mixture of dense shrub forest, grasslands, rocky outcrops and vast sand dunes provides the needed environment for them to survive. The coastal belt and the rich villus call over an array of resident and migratory aquatic birds flock in the thousands, while the thick jungle homes a wider variety of forest birds. Another unique feature of this regal forest is that it is also home to both species of crocodiles found in Sri Lanka – the marsh and estuarine crocodiles. 
                The only other place that these reptiles can be found together is at Yala National Park in the deep South.</p>      
            </div>
            <div class="row mt-4">
              <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-md-0 mb-4">
                <div>
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory_image_1.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-md-0 mb-4">
                <div>
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory_image_2.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-md-0 mb-4">
                <div>
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory_image_3.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>

          <div class="pt-md-5">
            <div class="text-center">
              <h2 class="sec_heading" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">The Management</h2>
              <p>A brainchild of veteran tea planters and a team from various industries, The Backwaters you see today is a result of creating a unique space for tourists while having a low impact on the environment. Making use of the abundant flora and fauna of Wilpattu, this team created a simple but luxury holiday experience. 
                Aptly named based on its location, this beautiful site lets you reconnect with nature while enjoying luxury comforts.
              </p>    
            </div>
            <div class="row my-4">
              <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-md-0 mb-4">
                <div>
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory_image_4.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-md-0 mb-4">
                <div>
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory_image_5.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-md-0 mb-4">
                <div>
                  <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory_image_6.jpg')}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="text-center">
              <p>The main focus during conceptualising was to create a space that blends with the forest instead of destroying it to create the needed space. With attention focused on using the forest itself to support the design,
                 The Backwaters successfully emerged through the forest canopy with close to zero damage to nature.</p>
              <p>Sustainably preserving this incredible environment, 
                The Backwaters achieved its objective of protecting and promoting this spectacular location.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contents end  -->

    <!-- bg image section start  -->
    <div class="parallax-section d-flex align-items-center justify-content-center">
      <div class="parallax-bg " style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/ourstory_paralalx_2.jpg')}}');"
        id="parallax-bg-1"></div>
    </div>
    <!-- bg image section end  -->

@include('frontend.includes.footer')