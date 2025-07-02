
@include('frontend.includes.header')

   <div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url('{{ asset(env('ASSETS_PATH') . '/frontend/images/contactus_banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white text-uppercase">Connect with Nature</h4>
                <h1 class="text-white animated fadeInLeft">
                  Contact Us
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- main slider end -->

    <!-- Contact info sec start -->
    <div class="container sec_padding pb-4">
      <div class="row justify-content-center">
        <div class="col-xxl-10">

          <div class="row justify-content-center mb-4">
            <div class="col-xxl-6 col-lg-8 text-center">
              <h1 class="sec_heading mb-4" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Contact us to book your
                jungle experience today!</h1>
            </div>
          </div>

          <!-- Contact info  -->
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
              <div class="icon_box text-center" data-tilt data-tilt-max="25" data-tilt-speed="500">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/location.png')}}" alt="" class="mb-4">
                <h3>Address</h3>
                <p>The Backwaters Lodge
                  Old Mannar road,New Eluwankuluma
                  Puttalam</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
              <div class="icon_box text-center" data-tilt data-tilt-max="25" data-tilt-speed="500">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/call.png')}}" alt="" class="mb-4">
                <h3>Phone Number</h3>
                <p><a href="tel:+94763313119" class="contact_link">+94 763 313119</a></p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
              <div class="icon_box text-center" data-tilt data-tilt-max="25" data-tilt-speed="500">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/icons/email.png')}}" alt="" class="mb-4">
                <h3>Email Address</h3>
                <p><a href="mailto:thebackwaters.lk@gmail.com" class="contact_link">thebackwaters.lk@gmail.com</a></p>
              </div>
            </div>
          </div>
          <!-- Contact info  -->
        </div>
      </div>
    </div>
    <!-- Contact info sec end -->


    <!-- Our Packages Start  -->
    <div class="container py-5">
      <div class="row justify-content-center mx-auto">
        <div class="col-xxl-10">
          <div class="text-center package_art">
            <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/line_art.png')}}" alt="" class="img-fluid">
            <div class="pt-5 pb-3">
              <h4 data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">LET US DO THE WORK</h4>
              <h2 class="sec_heading" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">Our Packages</h2>
            </div>
          </div>

          <!-- Package List  -->
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-5" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">
              <div class="package_card">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/contact_image_1.jpg')}}" class="img-fluid">
                <div class="p-4">
                  <h3 class="mb-2">One-night</h3>
                  <p class="font_14">Enjoy a perfect wildlife safari at Wilpattu National Park in the afternoon
                      paired with
                      an
                      evening boat ride.</p>
                  <p class="font_14"><span class="text-dark fw-bold">Price:</span><span class="ms-1 fst-italic">Free</span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-5" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">
              <div class="package_card">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/contact_image_2.jpg')}}" class="img-fluid">
                <div class="p-4">
                  <h3 class="mb-2">Two-nights</h3>
                  <p class="font_14">Take a full-day wildlife safari at Wilpattu National Park and wrap up the
                      day with a fun
                      dinner experience.</p>
                  <p class="font_14"><span class="text-dark fw-bold">Price:</span><span class="ms-1 fst-italic">Free</span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">
              <div class="package_card">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/contact_image_3.jpg')}}" class="img-fluid">
                <div class="p-4">
                  <h3 class="mb-2">Three-nights</h3>
                  <p class="font_14">Explore Wilpattu National Park, visit the whales in Kalpitiya and dip into
                      some out other fun
                      things to do.</p>
                  <p class="font_14"><span class="text-dark fw-bold">Price:</span><span class="ms-1 fst-italic">Free</span></p>
                </div>
              </div>
            </div>
          </div>
          <!-- Package List  -->
        </div>
      </div>
    </div>  
    <!-- Our Packages end  -->
  
    <!-- Inquiry Form start  -->
    <div class="container py-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="text-center">
            <h2 class="sec_heading"data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-up')}}">Inquiries</h2>
            <p data-aos="{{ asset(env('ASSETS_PATH') . '/frontend/css/aos.css/fade-down')}}">For reservations please call Tarique or complete the form below</p>

            <!-- Contact Details -->
            <div class="my-4">
              <a href="https://wa.me/94763313119" target="_blank"><img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/watsapplogo.png')}}" alt="" style="width: 44px; height: auto;" class="mb-2"></a>
              <p class="my-1">Tel: <a href="tel:+94763313119" class="contact_link">+94 763 313119</a></p>
              <p>Email: <a href="mailto:thebackwaters.lk@gmail.com" class="contact_link">thebackwaters.lk@gmail.com</a></p>
            </div>
            <!-- Contact Details -->

            <!-- Contact Form start -->
            <div class="text-start">
              <div class="padding_box" style="background-color: #f8f8f8;">

                <form id="contactForm" action="{{route('contact-us.store')}}" method="POST">
                  @csrf

                  <div id="form-messages" class="mb-3"></div>

                  <div class="row custom_form">
                    <div class="col-lg-6 col-12 mb-3">
                      <div class="form-floating position-relative">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" class="form-control" id="fullName" name="name" placeholder="Full Name">
                        <label for="fullName">Full Name</label>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                      <div class="form-floating position-relative">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        <label for="email">Email Address</label>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                      <div class="form-floating position-relative">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                        <label for="country">Country</label>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12 mb-3">
                      <div class="form-floating position-relative">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="datepicker_input form-control datepicker-input" id="checkInDate" name="check_in_date" placeholder="Check in date">
                        <label for="checkInDate">Check in date</label>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-12 mb-3">
                      <div class="form-floating position-relative">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="datepicker_input form-control datepicker-input" id="checkOutDate" name="check_out_date" placeholder="Check out date">
                        <label for="checkOutDate">Check out date</label>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-12 mb-3">
                      <div class="form-floating position-relative">
                        <i class="fa-solid fa-pen"></i>
                        <textarea class="form-control" placeholder="Message" id="message" name="message" style="height: 200px"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                  </div>

                  <!-- Turnstile Widget -->
                        <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
                  <div class="row mt-4">
                    <div class="col-md-3 col-xxl-3 d-xxl-block d-none"></div>
                    <div class="col-xxl-3 col-md-4 col-sm-6" style="padding-bottom:15px">
                      <button type="submit" id="submitBtn" class="form_btn px-xl-5 px-4">SEND MESSAGE</button>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6" style="padding-bottom:15px">
                      <button type="button" class="form_btn px-xl-5 px-4" data-bs-toggle="modal" data-bs-target="#tourModal">TOUR PLANNER</button>
                    </div>
                    <div class="col-xxl-3 col-md-4">
                      <a href="https://www.booking.com/Share-97dJJb" class="fw-bold" style="color: #a7ac75;" target="_blank" rel="nofollow noopener">BOOKING.COM</a>
                    </div>
                  </div>
                </form>
                <div class="modal fade custom_modal" id="tourModal" tabindex="-1" aria-labelledby="tourModalLabel" aria-hidden="true">
                    </div>

              </div>
            </div>
            <!-- Contact Form end -->
          </div>
        </div>
      </div>
    </div>
    <!-- Inquiry Form end  -->

    <!-- bg image section start  -->
    <div class="parallax-section d-flex align-items-center justify-content-center" style="height: 360px;">
      <div class="parallax-bg " style="background-image: url('{{ asset(env('ASSETS_PATH') . '/frontend/images/contactus_bottom_image.jpg')}}');"
        id="parallax-bg-1"></div>
    </div>

@include('frontend.includes.footer')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const formMessages = document.getElementById('form-messages');

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // --- UI Feedback: Show loading state
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = 'Sending...';
        submitBtn.disabled = true;
        clearErrors();

        const formData = new FormData(contactForm);

        fetch(contactForm.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
        })
        .then(response => {
            // Convert response to JSON regardless of status
            return response.json().then(data => ({ status: response.status, body: data }));
        })
        .then(({ status, body }) => {
            if (status === 200) {
                // --- Handle SUCCESS (HTTP 200)
                formMessages.innerHTML = `<div class="alert alert-success">${body.message}</div>`;
                contactForm.reset(); // Clear the form fields
            } else if (status === 422) {
                // --- Handle VALIDATION ERRORS (HTTP 422)
                formMessages.innerHTML = `<div class="alert alert-danger">Please correct the errors below.</div>`;
                displayErrors(body.errors);
            } else {
                // --- Handle OTHER ERRORS (e.g., 500)
                formMessages.innerHTML = `<div class="alert alert-danger">${body.message || 'An unexpected error occurred.'}</div>`;
            }
        })
        .catch(error => {
            // --- Handle NETWORK or other unexpected errors
            console.error('Submission Error:', error);
            formMessages.innerHTML = `<div class="alert alert-danger">A network error occurred. Please try again.</div>`;
        })
        .finally(() => {
            // --- UI Feedback: Reset button state
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
        });
    });

    function displayErrors(errors) {
        for (const field in errors) {
            const input = document.querySelector(`[name="${field}"]`);
            if (input) {
                input.classList.add('is-invalid');
                const errorContainer = input.parentElement.querySelector('.invalid-feedback');
                if (errorContainer) {
                    errorContainer.textContent = errors[field][0];
                }
            }
        }
    }

    function clearErrors() {
        formMessages.innerHTML = '';
        const invalidFields = contactForm.querySelectorAll('.is-invalid');
        invalidFields.forEach(field => {
            field.classList.remove('is-invalid');
            const errorContainer = field.parentElement.querySelector('.invalid-feedback');
            if (errorContainer) {
                errorContainer.textContent = '';
            }
        });
    }
});
</script>