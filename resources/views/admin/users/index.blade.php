@extends('layouts.master')

@section('title', 'Create Users')


@section('content')
<!-- the #js-page-content id is needed for some plugins to initialize -->
<main id="js-page-content" role="main" class="page-content">

    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-area'></i> Users <span class='fw-300'></span>
        </h1>

        <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
            {{-- <a href="{{ route('create-users') }}">
                <button type="button" class="btn btn-lg btn-primary">
                    <span class="mr-1 fal fa-plus"></span>
                    Add New
                </button>
            </a> --}}
            <a href="{{ route('users-list') }}">
                <button type="button" class="btn btn-sm btn-primary">
                    <span class="mr-1 fal fa-list-ul"></span>
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
                        Create <span class="fw-300"><i>user</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        {{-- <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button> --}}
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        {{-- <div class="panel-tag">
                            Be sure to use an appropriate type attribute on all inputs (e.g., code <code>email</code> for email address or <code>number</code> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
                        </div> --}}
                        <form action="{{ route('new-user') }}" enctype="multipart/form-data" method="post" id="user-form" class="smart-form row" autocomplete="off">
                            @csrf
                            <div class="mb-3 col-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name <span style="color: red">*</span></label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                                    <div class="invalid-feedback">Name is required, you missed this one.</div>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-3 col-6">
                                <div class="form-group">
                                    <label class="form-label" for="example-email-2">Email <span style="color: red">*</span></label>
                                    <input type="email" id="example-email-2" name="email" class="form-control" data-parsley-type="email" autocomplete="off" required>
                                    <div class="invalid-feedback">Email is required, you missed this one.</div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-3 col-6">
                                <div class="form-group">
                                    <label class="form-label" for="password">Password <span style="color: red">*</span></label>
                                    <div class="input-group">
                                        <input type="password" id="password" class="form-control" name="password"
                                            value="" autocomplete="off" required minlength="8"> {{-- Added minlength --}}
                                        <button class="btn btn-outline-secondary password-toggle" type="button" data-target="password">
                                            <i class="fal fa-eye"></i>
                                        </button>
                                        <div class="invalid-feedback" id="password-feedback">Password is required and must be at least 8 characters.</div>
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 col-6">
                                <div class="form-group">
                                    <label class="form-label" for="confirm_password">Confirm Password <span style="color: red">*</span></label>
                                    <div class="input-group">
                                        <input type="password" id="confirm_password" name="confirm_password"
                                            class="form-control" value="" required> {{-- Confirm password doesn't need minlength, but should match --}}
                                        <button class="btn btn-outline-secondary password-toggle" type="button" data-target="confirm_password">
                                            <i class="fal fa-eye"></i>
                                        </button>
                                        <div class="invalid-feedback" id="confirm_password-feedback">Confirm Password is required and must match the password.</div>
                                    </div>
                                    @error('confirm_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 col-6">
                                <div class="form-group">
                                    <label class="form-label" for="example-select">Roles <span style="color: red">*</span></label>
                                    <select class="form-control select2"  id="example-select" name="roles" required>
                                        <option value="" selected disabled>Select Role</option>
                                        @foreach ($roles as $x => $val)
                                        <option value="{{ $val }}">{{ $val }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Roles is required, you missed this one.</div>

                                </div>



                            </div>
                            <div class="col-12">
                                <div class="flex-row panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex">
                                    <button id="js-login-btn" class="ml-auto btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
@section('footerScript')
    <script>

            $('.password-toggle').on('click', function() {
                const targetId = $(this).data('target');
                const passwordInput = $('#' + targetId);
                const icon = $(this).find('i');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('fal fa-eye').addClass('fal fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('fal fa-eye-slash').addClass('fal fa-eye');
                }
            });
           $("#js-login-btn").click(function(event) {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#user-form")

                if (form[0].checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });
    </script>
@stop
