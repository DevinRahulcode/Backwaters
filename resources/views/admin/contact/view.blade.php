@extends('layouts.master')

@section('title', 'View Comment')

@section('content')
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> View Contacts <span class='fw-300'></span>
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
                            View <span class="fw-300"><i>Contact Us</i></span>
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
                               
                                </div>

                

                            {{-- Divider --}}
                            <hr>

                            {{-- User Details Section --}}
                            <h5 class="mb-3">Messages</h5>
                            <div class="row">
                                {{-- User Name --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_name">Name</label>
                                        <input type="text" id="user_name" name="user_name" class="form-control" 
                                            @if(isset($contact->name)) value="{{$contact->name}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- User Email --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_email">User Email</label>
                                        <input type="email" id="user_email" name="user_email" class="form-control" 
                                            @if(isset($contact->email)) value="{{$contact->email}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- User Country --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_website">Country</label>
                                        <input type="text" id="user_website" name="user_website" class="form-control" 
                                            @if(isset($contact->country)) value="{{$contact->country}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- User Check in Date --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_website">Check in Date</label>
                                        <input type="text" id="user_website" name="user_website" class="form-control" 
                                            @if(isset($contact->check_in_date)) value="{{$contact->check_in_date}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- User Check Out Date --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_website">Check Out Date</label>
                                        <input type="text" id="user_website" name="user_website" class="form-control" 
                                            @if(isset($contact->check_out_date)) value="{{$contact->check_out_date}}" @endif readonly>
                                    </div>
                                </div>

                                {{-- User Message --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="user_website">Message</label>
                                        <input type="text" id="user_website" name="user_website" class="form-control" 
                                            @if(isset($contact->message)) value="{{$contact->message}}" @endif readonly>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        {{-- Panel Footer with Actions --}}
                        <div class="panel-content border-faded border-left-0 border-right-0 border-top-0 d-flex flex-row align-items-center">
                            {{-- You can add a link to go back to the comments list --}}
                            <a href="{{route('contact-us.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
