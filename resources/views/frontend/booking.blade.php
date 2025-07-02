@include('frontend.includes.header')
<div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/booking_banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white">Wild Escape</h4>
                <h1 class="text-white animated fadeInLeft">
                  Booking
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

     <div class="container-fluid sec_padding">
      <div class="container text-center">
        Form Loads Here
      </div>
    </div>

@include('frontend.includes.footer')