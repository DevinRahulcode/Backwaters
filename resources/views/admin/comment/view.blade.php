@extends('layouts.master')

@section('title', 'View Comment')

@section('content')
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> View Comment <span class='fw-300'></span>
            </h1>

            <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
                <a href=" {{ route('blog.index') }}">
                    <button type="button" class="btn btn-sm btn-primary">
                        <span class="mr-1 fal fa-list"></span>
                        View All
                    </button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            View <span class="fw-300"><i>Comment Details</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">

                            {{-- Main Comment Content --}}
                            <div class="row mb-4">
                                {{-- Title --}}
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="comment_title">Blog Post Title</label>
                                        <input type="text" id="comment_title" name="comment_title" class="form-control form-control-lg" 
                                           @if(isset($comment->blog->title)) value="{{$comment->blog->title}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- Comment/Description --}}
                                <div class="col-12 mt-3">
                                    <div class="form-group">
                                        <label class="form-label" for="comment_description">Comment</label>
                                        <textarea id="comment_description" name="comment_description" class="form-control" rows="5" readonly>@if(isset($comment->comment)){{$comment->comment}}@endif</textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- Divider --}}
                            <hr>

                            {{-- User Details Section --}}
                            <h5 class="mb-3">Comment Author Details</h5>
                            <div class="row">
                                {{-- User Name --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_name">User Name</label>
                                        <input type="text" id="user_name" name="user_name" class="form-control" 
                                            @if(isset($comment->name)) value="{{$comment->name}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- User Email --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_email">User Email</label>
                                        <input type="email" id="user_email" name="user_email" class="form-control" 
                                            @if(isset($comment->email)) value="{{$comment->email}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- User Website --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_website">User Website</label>
                                        <input type="text" id="user_website" name="user_website" class="form-control" 
                                            @if(isset($comment->website)) value="{{$comment->website}}" @endif readonly>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        {{-- Panel Footer with Actions --}}
                        <div class="panel-content border-faded border-left-0 border-right-0 border-top-0 d-flex flex-row align-items-center">
                            {{-- You can add a link to go back to the comments list --}}
                            <a href="{{route('comment.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
