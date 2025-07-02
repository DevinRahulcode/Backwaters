@include('frontend.includes.header')

   <div class="inner_banner container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset(env('ASSETS_PATH') . '/frontend/images/blog_banner.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-3">
              <div class="inner_caption">
                <h4 class="text-white text-uppercase">A world of memories</h4>
                    @if(request('search'))
                 <h1 class="text-white animated fadeInLeft">
                  You searched for - {{request('search')}} - Backwaters - Official Site
                </h1>
                @else
                <h1 class="text-white animated fadeInLeft">
                  Blog
                </h1>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- main slider end -->

    <div class="container sec_padding">
      <div class="offset-xxl-1 col-xxl-10">
        <div class="row">
          <div class="col-lg-8 col-12">
            
            @if(isset($blogs) && count($blogs) > 0)
            <!-- Blog Card  -->
            @foreach ($blogs as $blog)
              <div class="mb-4">
                <div class="bg-white mb-5">
                  @if(!empty($blog->topImageUrl))
                    <img src="{{ $blog->topImageUrl }}" class="w-100">
                  @endif
                  <div class="card_content_div">
                    <div>
                      @if(!empty($blog->slug))
                      <div class="text-start mb-4">
                          <a href="{{ route('blogs.detail',  $blog->slug) }}">
                            <button type="button" class="btn blog_tag ">Backwaters</button>
                          </a>
                      </div>
                      @endif
                      @if(!empty($blog->title))
                        <div class="text-start">
                            <a href="{{ route('blogs.detail',  $blog->slug) }}">
                              <h2 class="sec_heading blog_title">
                                {{ $blog->title }}
                              </h2>
                            </a>
                        </div>
                      @endif
                    </div>
        
                    <div class="d-flex flex-sm-row gap-sm-5 flex-column gap-1 pt-3 mb-4">

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
      
                    @if(!empty($blog->top_description))
                      <p class="p_line_2">
                        {!! strip_tags($blog->top_description) !!} 
                      </p>
                    @endif
        
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        @if (!empty($blog->createdUser) && $blog->createdUser->profile_image_url || $blog->createdUser->name)
                          <div class="d-flex gap-2 align-items-center">
                            @if($blog->createdUser->profile_image_url)
                              <div class="auth_img">
                                <img src="{{ optional($blog->createdUser)->profile_image_url }}" alt="{{ optional($blog->createdUser)->name }}">
                              </div>
                            @endif
                            @if (!empty($blog->createdUser->name))
                              <div class="auth_name">By {{ optional($blog->createdUser)->name }}</div>
                            @endif
                          </div>
                        @endif
                        @if(!empty($blog->slug))
                          <a href="{{ route('blogs.detail',  $blog->slug) }}">
                            <p class="read_more_text mb-0">Read More <i class="fa-solid fa-arrow-right p-1"></i></p>
                          </a>
                        @endif
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            @else
                <h1 class="display-4 nothing-found-title">Nothing Found</h1>

                <p class="lead text-muted mt-3">
                    Sorry, but nothing matched your search terms. Please try again with some different keywords.
                </p>

                <div class="mt-4 search-form-nothing-found">
                    <form action="{{ route('blogs') }}" method="GET">
                        <div class="input-group input-group-lg">
                            <input type="text" name="search" class="form-control shadow-none" placeholder="Search..." value="{{ request('search') }}">
                            <button class="btn search_btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            @endif
            <!-- Blog Card  -->


            <!-- Pagination start  -->
            <div class="d-flex justify-content-center custom_pagination">
                {{ $blogs->links() }}
            </div>
            <!-- Pagination end  -->
          </div>

          <!-- Sidebar start  -->

          <div class="col-lg-4 col-12">

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
              <div class="padding_box bg-white mb-4">
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
            <div class="row">
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