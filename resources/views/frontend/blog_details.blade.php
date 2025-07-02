@include('frontend.includes.header')

 <!-- ========================== -->
    <!-- ========================== -->

      <div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/blog_banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white text-uppercase">A world of memories</h4>
                <h1 class="text-white animated fadeInLeft">
                  Blog
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- main slider end -->

    <div class="container sec_padding">
      <div class="offset-xxl-1 col-xxl-10">
        <div class="row mx-auto">
          <div class="col-xl-8 col-lg-8 col-12"> 
            
            <!-- Blog Detail  -->
            <div class="mb-4">
              @if(!empty($blog->title))
                <h2 class="mb-4">{{$blog->title ?? ''}} - Backwaters - Official Site</h2>
              @endif
              @if(!empty($blog->topImageUrl))
                <img src="{{ $blog->topImageUrl}}" class="w-100">
              @endif
              <div class="text-start my-4">
                  <button type="button" class="btn blog_tag">Backwaters</button>
              </div>
  
              <div class="d-flex flex-sm-row flex-column gap-sm-4 gap-1 mb-4 align-items-sm-center flex-wrap">   
                  <div class="d-flex gap-2 align-items-center">
                    <div class="auth_img">
                      <img src="{{ optional($blog->createdUser)->profile_image_url }}" alt="">
                    </div>
                    <p class="small_text fw-bold mb-0">By {{ optional($blog->createdUser)->name }}</p>
                  </div>
                  <div>
                      <p class="small_text fw-bold mb-0"><i class="fa-solid fa-eye fa-icon me-1"></i>{{ $blog->view_count ?? 0 }} views</p>
                  </div>
                  <div class="d-flex flex-row gap-1">
                      <p class="small_text fw-bold mb-0"><i class="fa-solid fa-calendar-days fa-icon me-1"></i>{{ $blog->created_at->format('F d, Y') }}</p>
                  </div>
                  <div class="d-flex flex-row gap-1">
                      <p class="small_text fw-bold mb-0"><i class="fa-solid fa-comments fa-icon me-1"></i>{{ $blog->count_comments ?? 0 }} comments</p>
                  </div>
              </div>

              <p> {!! html_entity_decode($blog->top_description) !!}</p>

            </div>
            <!-- Blog Detail  -->
            @php
                $shareUrl = url()->current(); 
                $shareText = urlencode($blog->title);
            @endphp

            <!-- Social share  -->
            <div class="d-flex gap-3 align-items-center my-5">
              <div>
                <h5 class="mb-0">Social Share</h5>
              </div>
              <div>
                <div class="footer_social">
        
                  <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareUrl) }}" target="_blank" title="Share on Facebook" aria-label="Share on Facebook">
                    <div class="link">
                      <i class="fab fa-facebook-f"></i>
                    </div>
                  </a>
                
                  <a href="https://www.instagram.com/thebackwaters.lk/" target="_blank" title="Follow us on Instagram" aria-label="Follow us on Instagram">
                    <div class="link">
                      <i class="fab fa-instagram"></i>
                    </div>
                  </a>
                
                  <a href="https://www.youtube.com/channel/UC9KfPExFMufLgHlpMv623Zg" target="_blank" title="Subscribe on YouTube" aria-label="Subscribe on YouTube">
                    <div class="link">
                      <i class="fab fa-youtube"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!-- Social share  -->

            <!-- Prev and Next Post  -->
            @if(!empty($blog->previousBlog) || !empty($blog->nextBlog))
            <div class="py-5 border-top border-bottom mb-5">
              <div class="row">
                @if(!empty($blog->previousBlog) && !empty($blog->previousBlog->slug))
                <div class="col-lg-6">
                  <a href="{{ route('blogs.detail',  $blog->previousBlog->slug) }}">
                    <div>
                      <p class="green_text font_14 fw-bold mb-1">Previous Post</p>
                      @if(!empty($blog->previousBlog->title))
                      <h5 class="single_line_text">{{$blog->previousBlog->title}}.</h5>
                      @endif
                    </div>
                  </a>
                </div>
                @endif
                @if(!empty($blog->nextBlog) && !empty($blog->nextBlog->slug))
                <div class="col-lg-6 mt-lg-0 mt-3">
                  <a href="{{ route('blogs.detail',  $blog->nextBlog->slug) }}">
                    <div>
                      <p class="green_text font_14 fw-bold mb-1">Next Post</p>
                      @if(!empty($blog->nextBlog->title))
                      <h5 class="single_line_text">{{$blog->nextBlog->title}}.</h5>
                      @endif
                    </div>
                  </a>
                </div>
                @endif
              </div>
            </div>
            @endif
            <!-- Prev and Next Post  -->

            <!-- Related Posts section  -->
            @if(isset($reletedBlogs) && count($reletedBlogs) > 0)
            <div class="mb-5">
              <h2 class="sec_heading mb-4">Related Posts</h2>
              <div class="row">
              
                @foreach($reletedBlogs as $relatedBlog)
                <div class="col-lg-6 col-md-6 col-12 mb-md-0 mb-4">
                  <div>
                    @if(!empty($relatedBlog->top_image_url))
                      <img src="{{$relatedBlog->top_image_url}}" alt="{{$relatedBlog->title}}" class="related_img w-100">
                    @endif
                    <a href="{{ route('blogs.detail',  $relatedBlog->slug) }}">
                      <button type="button" class="btn blog_tag py-1 my-3 font_14">Backwaters</button>
                    </a>
                    <a href="{{ route('blogs.detail',  $relatedBlog->slug) }}">
                      <div>
                        @if(!empty($relatedBlog->title))
                        <h3 class="single_line_text">{{$relatedBlog->title}}</h3>
                        @endif

                        @if(!empty($relatedBlog->listing_description))
                          <p class="p_line_3 font_14">{{$relatedBlog->listing_description}}</p>
                        @endif
                      </div>
                    </a>
                    <hr>
                    <div class="d-flex flex-row gap-4 mb-4 align-items-center">   
                      <div class="d-flex flex-row gap-1">
                          <p class="small_text fw-bold mb-0"><i class="fa-solid fa-calendar-days fa-icon me-1 green_text"></i>{{ $relatedBlog->created_at->format('F d, Y') }}</p>
                      </div>
                      <div class="d-flex flex-row gap-1">
                          <p class="small_text fw-bold mb-0"><i class="fa-solid fa-comments fa-icon me-1 green_text"></i>{{ $relatedBlog->count_comments ?? 0 }} comments</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
                @endforeach
                

              </div>
            </div>
            @endif
            <!-- Related Posts section  -->

            <!-- Comment Form  -->
            <div>
              <h2 class="sec_heading mb-4">Leave a Reply</h2>
              <div class="padding_box" style="background-color: #f8f8f8;">

                  {{-- Add a success message area --}}
                  @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif

                  <p>Your email address will not be published. Required fields are marked *</p>

                  {{-- The action attribute points to the route we will create in Step 2 --}}
                  <form method="POST" action="{{ route('comments.store') }}">
                      @csrf  {{-- Don't forget this! It protects your application --}}
                      <input type="hidden" class="form-control @error('name') is-invalid @enderror" id="nameId" name="blogId" placeholder="Name *" value="{{ $blog->id }}" >
                      <div class="row custom_form">
                          <div class="col-lg-6 col-12 mb-3">
                              <div class="form-floating position-relative">
                                  <i class="fa-solid fa-user"></i>
                                  {{-- Use old() to repopulate the form on validation error --}}
                                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="nameInput" name="name" placeholder="Name *" value="{{ old('name') }}">
                                  <label for="nameInput">Name *</label>
                                  @error('name')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-lg-6 col-12 mb-3">
                              <div class="form-floating position-relative">
                                  <i class="fa-solid fa-envelope"></i>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailInput" name="email" placeholder="Email Address *" value="{{ old('email') }}">
                                  <label for="emailInput">Email Address *</label>
                                  @error('email')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-lg-12 col-12 mb-3">
                              <div class="form-floating position-relative">
                                  <i class="fa-solid fa-globe"></i>
                                  <input type="text" class="form-control @error('website') is-invalid @enderror" id="websiteInput" name="website" placeholder="Website" value="{{ old('website') }}">
                                  <label for="websiteInput">Website</label>
                                  @error('website')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-lg-12 col-12 mb-3">
                              <div class="form-floating position-relative">
                                  <i class="fa-solid fa-pen"></i>
                                  <textarea class="form-control @error('comment') is-invalid @enderror" placeholder="Message" id="commentTextarea" name="comment" style="height: 200px">{{ old('comment') }}</textarea>
                                  <label for="commentTextarea">Message *</label>
                                  @error('comment')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                              </div>
                          </div>
                      </div>
                      <div class="form-check mt-3">
                          <input class="form-check-input shadow-none" type="checkbox" name="remember" id="flexCheckChecked" checked>
                          <label class="form-check-label" for="flexCheckChecked">
                              Save my name, email, and website in this browser for the next time I comment.
                          </label>
                      </div>
                      <button type="submit" class="form_btn mt-4 px-5">POST COMMENT</button>
                  </form>
              </div>
            </div>
            <!-- Comment Form  -->
          </div>

          <!-- Sidebar start  -->

          <div class="col-xl-4 col-lg-4 col-12 mt-lg-0 mt-4">

            <!-- search form  -->
            <div class="search_box mb-4 mt-lg-0 mt-4 py-0">
              <form action="{{ route('blogs') }}" method="GET">
                  <div class="input-group">
                      <input type="text" name="search" class="form-control shadow-none" placeholder="Search..." value="{{ request('search') }}">
                      <button class="btn search_btn" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
              </form>
            </div>
            <!-- search form  -->
            
            <!-- recent feed  -->
            @if(isset($recentlyAddedBlogs) && count($recentlyAddedBlogs)>0)
              <div class="padding_box bg-white mb-4 ">
                <h3 class="feed_title">Recent Feed</h3>
                <!-- ============== -->
                  @foreach($recentlyAddedBlogs as $recentBlog)
                    <div class="row feed_article align-items-center">
                      <div class="col-3 col-lg-4 col-md-2 col-sm-3">
                        @if(!empty($recentBlog->top_image_url))
                          <div class="blog_image" style="background-image: url('{{ $recentBlog->top_image_url}}');">
                          </div>
                        @endif
                      </div>
                      <div class="col-9 col-lg-8 col-md-10 col-sm-9">
                          @if(!empty($recentBlog->slug))
                          <a href="{{ route('blogs.detail',  $recentBlog->slug) }}" class="text-decoration-none">
                            @if(!empty($recentBlog->title))
                              <h3 class="mb-1 text-start rf-text">{{$recentBlog->title ?? ''}}</h3>
                            @endif
                          </a>
                          @endif
                          @if(!empty($recentBlog->created_at))
                            <p class="small_text fw-bold mb-0 mt-2"><i class="fa-solid fa-calendar-days fa-icon me-1"></i>{{ $recentBlog->created_at->format('F d, Y') }}</p>
                          @endif
                      </div>
                    </div>
                  @endforeach
                <!-- ============== -->
              </div>
            @endif
            <!-- recent feed  -->

            <!-- Banner Images  -->
            <div class="row p-4">
              <div class="mb-4 col-lg-12 col-md-6">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/blog_side_img_1.jpg')}}" class="w-100">
              </div>
  
              <div class="mb-4 col-lg-12 col-md-6">
                <img src="{{ asset(env('ASSETS_PATH') . '/frontend/images/blog_side_img_2.jpg')}}" class="w-100">
              </div>
            </div>
            <!-- Banner Images  -->

          </div>

          <!-- Sidebar end  -->
        </div>
      </div>
    </div>

@include('frontend.includes.footer')