<!DOCTYPE html>
<html lang="en">
<head>

@php

use App\Helpers\HeaderHelper;

        switch ($meta) {
            case 1:
                $meta_details = HeaderHelper::getMeta('Home');
                break;
                
            case 2:
                $meta_details = HeaderHelper::getMeta('Our Story');
                break;
            case 3:
                $meta_details = HeaderHelper::getMeta('Responsibility');
                break;
            case 4:
                $meta_details = HeaderHelper::getMeta('Rooms');
                break;
            case 5:
                $meta_details = HeaderHelper::getMeta('Blogs');
                break;
            case 6:
                $meta_details = HeaderHelper::getMeta('Gallery');
                break;
            case 7:
                $meta_details = HeaderHelper::getMeta('Contact Us');
                break;

            case 8:
                $meta_details = HeaderHelper::getMeta('Blog Details');
                break;

            default:
                $meta_details = HeaderHelper::getMeta('Home');
                break;
        }
        $ogTitle = $meta_details->og_title; // Original title
        $card_title = preg_replace('/[^\w]+/', '_', $ogTitle);
        $card_title = trim($card_title, '_');
@endphp

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="description"
        content="{{ $meta_details->description }} @if (isset($subTitle)) | {{ $subTitle }} @endif"" />
    <meta name="keywords"
        content="{{ $meta_details->keywords }} @if (isset($subTitle)) | {{ $subTitle }} @endif"">
    <meta property="og:url" content="{{ $meta_details->og_url }}" />
    <meta property="og:type" content="{{ $meta_details->og_type }}" />
    <meta property="og:title"
        content="{{ $meta_details->og_title }} @if (isset($subTitle)) | {{ $subTitle }} @endif | Backwaters" />
    <meta property="og:description"
        content="{{ $meta_details->og_description }} @if (isset($subTitle)) | {{ $subTitle }} @endif"/>
    <meta property="og:image"
         content="{{ asset(env('ASSETS_PATH') . 'meta_tags/' . $meta_details->og_image) }}">
    <meta name="og:site_name" content="{{ $meta_details->og_sitename }}" />
    <meta name="og:email" content="{{ $meta_details->og_email }}" />
    <meta name="twitter:card" content="{{ $card_title }}" />

    <meta name="twitter:title" content="{{ $meta_details->og_title }}">
    <meta name="twitter:description" content="{{ $meta_details->og_description }}">
   <meta name="twitter:image"
      content="{{ asset(env('ASSETS_PATH') . 'meta_tags/' . $meta_details->og_image) }}">

        

    <?php $current_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
    <link rel="canonical" href="{{ $current_url }}" />

    

            <title>{{ $meta_details->page_title }} @if (isset($subtitle)) | {{ $subtitle }} @endif
           | Backwaters</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset(env('ASSETS_PATH').'/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset(env('ASSETS_PATH').'/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset(env('ASSETS_PATH').'/frontend/css/mediaquery.css') }}" rel="stylesheet">
    <!-- Custom CSS -->

    <title>Backwaters</title>

    <!--favicon-->
    <link rel="shortcut icon" href="{{ asset(env('ASSETS_PATH').'/frontend/images/favicon.png')}}" />
    <!--favicon-->

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Add icon library -->

   

    <!-- Link Swiper's CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>

    <!-- loading effect -->
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'/frontend/css/loading_styles.css')}}">
    <!-- loading effect -->

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'/frontend/gallery/fancybox.min.css')}}">
    <!-- Fancybox CSS -->

    <!-- date picker -->
    <link rel='stylesheet' href="{{ asset(env('ASSETS_PATH').'/frontend/date_picker/bootstrap-datepicker.min.css')}}">
    <link src="{{ asset(env('ASSETS_PATH').'/frontend/date_picker/date_picker.css') }}"></link>
    <!-- date picker -->

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Animate CSS  -->

    <!--scroll bar style-->
    <style>

      ::-webkit-scrollbar {
        background: #000000;
        height: 5px;
        width: 5px;
      }

      ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 2px #73A9AD;
      }

      ::-webkit-scrollbar-thumb {
        background: #73A9AD;
        border-radius: 2px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #73A9AD; 
      }
    </style>
    <!--scroll bar style-->


  </head>
  <body>

    <!-- Discounts Button -->
    <button class="disc_btn position-fixed text-uppercase d-lg-none d-block" style="z-index: 999;">
      <i class="fa-solid fa-gift me-sm-2"></i><span>Discounts</span>
    </button>
    <!-- Discounts Button -->

    <!-- Promotional Ad -->
    <div class="promotion-ad-wrapper">
      <div class="row">
        <div class="col-4 bg_img d-lg-block d-none" style="background-image: url('{{ asset(env('ASSETS_PATH').'/frontend/images/gallery_hag_image_1.jpg') }}');">
        </div>
        <div class="col-lg-8 col-12">
          <div class="promo-close-btn">
            <i class="fa-solid fa-xmark"></i> </div>
      
          <div class="promo-content text-lg-start text-center position-relative">
              <div class="text-center d-lg-none d-block">
                <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/gallery_hag_image_1.jpg') }}" alt="" class="img-fluid">
              </div>
              <h5 class="fw-bold mb-3">Early Booker Offer</h5>
              <p class="mb-1 text-dark" style="line-height: 1.2; font-size: 13px;">Book the Lowest rate when you book direct!</p>
              <p style="line-height: 1.2; font-size: 12px;">A minimum of 30% advance payment is necessary</p>
              <a href="booking.html" class="promo-link-btn">BOOK NOW</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Promotional Ad -->

    <!-- main slider start -->
    <header style="overflow-x: hidden;">

      <!-- menu section -->
      <div class="nav_bar">
        <div class="container-fluid position-relative nav_col">  
          <div class="container">
           
            <div class="row align-items-center">
            
              <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-5 col-5 position-relative">
                <div class="header_logo position-relative">
                  <a href="index.html">
                    <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/logo_header.png') }}" alt="" class="">
                  </a>

                  <div class="row logo_info_card position-absolute mx-auto">
                    <div class="col-6">
                      <div class="header_logo text-center">
                        <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/logo_header.png') }}" class="mb-3">

                        <p class="font_14 text-center text-dark p-2 fw-bold">
                            The Backwaters – Wilpattu, bringing to you a luxury experience in the wild
                            like no other.
                        </p>
                      </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex gap-2">
                            <div class="small_icon">
                                <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/black_phone.png')}}" alt="">
                            </div>
                            <div class="text">
                                <p class="mb-0 font_14 text-dark"><strong>Call Us:</strong></p>
                                <p class="font_14"><a href="#">+94 763 313119</a></p>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                          <div class="small_icon">
                              <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/black_email.png')}}" alt="">
                          </div>
                          <div class="text">
                              <p class="mb-0 font_14 text-dark"><strong>Email:</strong></p>
                              <p class="font_14"><a href="#">thebackwaters.lk@gmail.com</a></p>
                          </div>
                        </div>

                        <div class="d-flex gap-2">
                          <div class="small_icon">
                              <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/black_map.png')}}" alt="">
                          </div>
                          <div class="text">
                              <p class="mb-0 font_14 text-dark"><strong>Location:</strong></p>
                              <p class="font_14 mb-0 text-dark">Wilpattu National Park Hotel Road, Eluwankulama 61308</p>
                              <p class="font_14"><a href="#">Open in Google Maps</a></p>
                          </div>
                        </div>

                        <!-- Social icons -->
                         <div class="d-flex gap-4 mt-3">
                            <div>
                              <a href="https://www.facebook.com/WilpattuNationalPark/">
                                <i class="fa-brands fa-facebook-f"></i>
                              </a>
                            </div>
                            <div>
                              <a href="#">
                                <i class="fa-brands fa-pinterest-p"></i>
                              </a>
                            </div>
                            <div>
                              <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                              </a>
                            </div>
                         </div>
                        <!-- Social icons -->
                    </div>

                  </div>
                </div>
              </div>
  
              <!-- ================ -->
  
              <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-8 col-sm-7 col-7 pe-4 d-flex justify-content-end align-items-center gap-4">
                
                <div>
                  
                  <nav class="navbar navbar-expand-lg d-none d-lg-block">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ request()->path() === 'ourstory' ? 'active' : '' }}" href="{{ url('/ourstory') }}">Our Story</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ request()->path() === 'responsibility' ? 'active' : '' }}" href="{{ url('/responsibility') }}">Responsibility</a>
                        </li>
            
                        <li class="nav-item">
                          <a class="nav-link {{ request()->path() === 'rooms' ? 'active' : '' }}" href="{{ url('/rooms') }}">Rooms</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ request()->path() === 'blogs' ? 'active' : '' }}" href="{{ url('/blogs') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ request()->path() === 'gallery' ? 'active' : '' }}" href="{{ url('/gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ request()->path() === 'contactus' ? 'active' : '' }}" href="{{ url('/contactus') }}">Contact Us</a>
                        </li>
                      </ul>
                    </div>
                  </nav>

                  <!-- Mobile menu start -->
                  <div class="d-lg-none d-block mobile_menu">
                    <button class="btn shadow-none mobile_menu_btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#customOffcanvas" aria-controls="customOffcanvas">
                      <img src="{{ asset(env('ASSETS_PATH').'/frontend/images/hamburger-menu.png') }}" alt="">
                    </button>
  
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="customOffcanvas" aria-labelledby="customOffcanvasLabel">
    
                      <button type="button" class="btn-close mobile_menu_close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    
                      <div class="offcanvas-body p-0">
                        
                        <ul class="navbar-nav offcanvas-nav mt-5">
                          <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                          <li class="nav-item"><a class="nav-link {{ request()->path() === 'ourstory' ? 'active' : '' }}"href="{{ url('/ourstory') }}">Our Story</a></li>
                          <li class="nav-item"><a class="nav-link {{ request()->path() === 'responsibility' ? 'active' : '' }}" href="{{ url('/responsibility') }}">Responsibility</a></li>
                          <li class="nav-item"><a class="nav-link {{ request()->path() === 'rooms' ? 'active' : '' }}" href="{{ url('/rooms') }}">Rooms</a></li>
                          <li class="nav-item"><a class="nav-link {{ request()->path() === 'blogs' ? 'active' : '' }}" href="{{ url('/blogs') }}">Blog</a></li>
                          <li class="nav-item"><a class="nav-link {{ request()->path() === 'gallery' ? 'active' : '' }}" href="{{ url('/gallery') }}">Gallery</a></li>
                          <li class="nav-item"><a class="nav-link {{ request()->path() === 'contactus' ? 'active' : '' }}" href="{{ url('/contactus') }}">Contact Us</a></li>
                        </ul>
                    
                        <div class="offcanvas-contact-info">
                          <div class="d-flex gap-2 align-items-center mb-4">
                            <div class="small_icon">
                              <i class="fa-solid fa-phone text-white"></i>
                            </div>
                            <div>
                                <p class="mb-0 font_14"><strong>Call Us:</strong></p>
                                <p class="font_14 mb-0"><a href="#">+94 763 313119</a></p>
                            </div>
                          </div>

                          <div class="d-flex gap-2 align-items-center">
                            <div class="small_icon">
                              <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <p class="mb-0 font_14"><strong>Email:</strong></p>
                                <p class="font_14 mb-0"><a href="#">thebackwaters.lk@gmail.com</a></p>
                            </div>
                          </div>
                        </div>
                    
                      </div>
                    </div>
                  </div>
                  <!-- Mobile menu end -->
                </div>
  
              </div>
  
            </div>
          </div>
          
        </div>
      </div>
      <!-- menu section -->
</head>
    
