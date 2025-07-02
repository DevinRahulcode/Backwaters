@extends('layouts.master')

@section('title', 'Update User')

@section('headerStyle')
    <style>
        .sleek-toggle {
            display: flex;
            width: 220px;
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            border-radius: 2rem;
            padding: 3px;
            position: relative;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08), inset 0 1px 2px rgba(0, 0, 0, 0.03);
        }
        
        .toggle-option {
            flex: 1;
            text-align: center;
            padding: 8px 0;
            font-size: 0.85rem;
            font-weight: 500;
            color: #343a40;
            background: transparent;
            border: none;
            cursor: pointer;
            position: relative;
            z-index: 2;
            transition: color 0.3s ease, transform 0.2s ease;
        }
        
        .toggle-option:hover {
            color: #212529;
            transform: translateY(-1px);
        }
        
        .toggle-option.active {
            color: #ffffff;
            font-weight: 600;
        }
        
        .sleek-toggle::before {
            content: '';
            position: absolute;
            top: 3px;
            bottom: 3px;
            width: 50%;
            background: linear-gradient(145deg, #0d6efd, #0a58ca);
            border-radius: 1.5rem;
            box-shadow: 0 2px 5px rgba(13, 110, 253, 0.3);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1;
            transform: translateX(0); /* Default: slide to left ("All") */
        }
        
        .sleek-toggle.active-own::before {
            transform: translateX(100%); /* Slide to right ("Own") */
        }
        
        .toggle-option i {
            font-size: 0.9rem;
            vertical-align: middle;
            transition: transform 0.3s ease;
        }
        
        .toggle-option.active i {
            transform: scale(1.1);
        }
        
        .toggle-option:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.2);
        }
    </style>
@stop

@section('content')
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Update User <span class='fw-300'></span>
            </h1>

            <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
                <a href=" {{ route('create-users') }}">
                    <button type="button" class="btn btn-sm btn-primary">
                        <span class="mr-1 fal fa-plus"></span>
                        Add New
                    </button>
                </a>
                <a href=" {{ route('users-list') }}">
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
                            Update <span class="fw-300"><i>user</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <form action="{{ route('save-user', $user->id) }}" enctype="multipart/form-data" method="post"
                                id="user-form" class="smart-form row" autocomplete="off" data-parsley-validate>
                                @csrf
                                @method('put')

                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="simpleinput">Name <span style="color: red">*</span></label>
                                        <input type="text" id="simpleinput" name="name"
                                            @if (isset($user->name)) value="{{ $user->name }}" @endif
                                            class="form-control"  required>
                                        <div id="simpleinput-feedback" class="invalid-feedback">Name must be less than 100 characters.</div>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email <span style="color: red">*</span></label>
                                        <input type="email" id="email" name="email"
                                            @if (isset($user->email)) value="{{ $user->email }}" @endif
                                            class="form-control" required>
                                        <div id="email-feedback" class="invalid-feedback">Invalid email format.</div>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-12"> <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="changePasswordToggle">
                                        <label class="form-check-label" for="changePasswordToggle">Change Password?</label>
                                    </div>
                                </div>

                                <div class="mb-3 col-6 password-fields" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <input type="password" id="password" class="form-control" name="password"
                                                value="" autocomplete="off" minlength="8"> {{-- Added minlength --}}
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

                                <div class="mb-3 col-6 password-fields" style="display: none;">
                                  <div class="form-group">
                                        <label class="form-label" for="confirm-password">Confirm Password <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <input type="password" id="confirm-password" name="confirm-password"
                                                class="form-control" value="" > {{-- Confirm password doesn't need minlength, but should match --}}
                                            <button class="btn btn-outline-secondary password-toggle" type="button" data-target="confirm-password">
                                                <i class="fal fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback" id="confirm-password-feedback">Confirm Password is required and must match the password.</div>
                                        </div>
                                        @error('confirm-password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @php
                                    $selectedRole = old('roles', $selectedRole->name ?? ''); // adjust to your column name
                                @endphp

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="roleId">Roles <span
                                            style="color: red">*</span></label>
                                    <select class="form-control select2" id="roleId" name="roleId" required>
                                        <option value="" disabled>Select Roles</option>
                                        @if (count($roles))

                                            @foreach ($roles as $key => $value)
                                                <option value="{{ $key }}"
                                                    {{ collect(old('roleId'))->contains($key) ? 'selected' : '' }}
                                                    {{ isset($user) && $user->roles->pluck('name')->contains($key) ? 'selected' : '' }}>
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        @endif

                                    </select>
                                    <div class="invalid-feedback">Roles is required, you missed this one.</div>
                                    @error('roleId')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div
                                    class="flex-row panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex">
                                    <button id="js-submit-btn" class="ml-auto btn btn-primary" type="submit">Submit
                                        form</button>
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


        $("#js-submit-btn").click(function(event) {

            var form = $("#user-form")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
        });

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

        $(document).ready(function() {

            $(document).on('change', '#roles', function () {
                if ($(this).val() == 'IO') {
                    $('.police_branch').show();
                } else {
                    $('.police_branch').hide();
                }
            });

            const userRoleId = {{ $user->role_id ?? 'null' }}; // Pass role_id from Blade to JS

            const policeBranchDiv = document.getElementById('policeBranchDiv');

            if (userRoleId === 31) {
                policeBranchDiv.style.display = 'block';
            } else {
                policeBranchDiv.style.display = 'none';
            }

            var selectedRole = @json($selectedRole); // Laravel-safe JS encoding

            var baseUrl = "{{ route('get-role', ['officeId' => '__ID__']) }}";

            function loadRoles(officeId) {
                if (!officeId) {
                    $('#roles').empty().append('<option value="">Select Role</option>');
                    return;
                }

                let url = baseUrl.replace('__ID__', officeId);

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        $('#roles').empty().append('<option value="">Select Role</option>');

                        $.each(response, function (index, role) {
                            let selected = role.name === selectedRole ? 'selected' : '';
                            $('#roles').append('<option value="' + role.name + '" ' + selected + '>' + role.name + ' (' + role.office_name + ')</option>');
                        });
                    },
                    error: function () {
                        alert('Failed to load roles.');
                    }
                });
            }

            $('#officeId').on('change', function () {
                let officeId = $(this).val();
                selectedRole = ""; // clear selected role if office changes manually
                loadRoles(officeId);
            });

            // Trigger load on page load if editing
            let initialOfficeId = $('#officeId').val();
            if (initialOfficeId) {
                loadRoles(initialOfficeId);
            }
        });
    
        document.addEventListener('DOMContentLoaded', () => {
            const toggles = document.querySelectorAll('.sleek-toggle');
        
            toggles.forEach(toggle => {
                const hiddenInput = toggle.querySelector('#access_scope');
                
                if (!hiddenInput) {
                    console.error('Hidden input #access_scope not found in .sleek-toggle:', toggle);
                    return;
                }
                
                toggle.querySelectorAll('.toggle-option').forEach(button => {
                    button.addEventListener('click', () => {
                        toggle.querySelectorAll('.toggle-option').forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');
                        toggle.classList.remove('active-own');
                        if (button.getAttribute('data-value') === 'own') {
                            toggle.classList.add('active-own');
                        }
                        hiddenInput.value = button.getAttribute('data-value');
                    });
                });
            });
        });

      document.addEventListener("DOMContentLoaded", function () {
            const nameInput = document.getElementById("simpleinput");
            const emailInput = document.getElementById("email");
            const passwordInput = document.getElementById("password");
            const confirmPasswordInput = document.getElementById("confirm-password");
            const roleIdSelect = document.getElementById("roles");
            const policeBranchSelect = document.getElementById("police_branch_id");
            const accessScopeInput = document.getElementById("access_scope");
            const accessScopeToggle = document.querySelector(".sleek-toggle");
            const form = document.getElementById("user-form");

            const changePasswordToggle = document.getElementById("changePasswordToggle");
            const passwordFields = document.querySelectorAll(".password-fields"); 

            const IO_ROLE_VALUE = 'IO';

            function validateEmail(emailVal) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(emailVal).toLowerCase());
            }

            function validateWordCount(str) {
                return str.trim().split(/\s+/).filter(Boolean).length;
            }

            function validateSelect(selectElement) {
                return selectElement.value !== "";
            }

            function validateAccessScope(value) {
                return value === 'all' || value === 'own';
            }

            function showFeedback(element, message, isValid) {
                const feedback = document.getElementById(element.id + "-feedback");

                if (!feedback) {
                    return;
                }

                if (!isValid) {
                    feedback.style.display = "block";
                    feedback.textContent = message;
                    element.classList.add("is-invalid");
                    element.setCustomValidity(message); 
                } else {
                    feedback.style.display = "none";
                    element.classList.remove("is-invalid");
                    element.setCustomValidity(""); 
                }
            }

            nameInput.addEventListener("input", function () {
                const isValidWordCount = validateWordCount(nameInput.value) <= 100;
                const isValidCharCount = nameInput.value.length <= 100;
                let isValid = isValidWordCount && isValidCharCount;
                showFeedback(nameInput, "Name must be less than 100 characters.", isValid);
            });

            emailInput.addEventListener("input", function () {
                showFeedback(emailInput, "Invalid email format.", validateEmail(emailInput.value));
            });

            changePasswordToggle.addEventListener("change", function() {
                if (this.checked) {
                    passwordFields.forEach(field => field.style.display = "block");
                    passwordInput.value = "";
                    confirmPasswordInput.value = "";
                    showFeedback(passwordInput, "Password must be at least 8 characters.", false); 
                    showFeedback(confirmPasswordInput, "Passwords do not match.", false); 
                } else {
                    passwordFields.forEach(field => field.style.display = "none");
                    passwordInput.value = "";
                    confirmPasswordInput.value = "";
                    showFeedback(passwordInput, "", true);
                    showFeedback(confirmPasswordInput, "", true);
                }
            });

            passwordInput.addEventListener("input", function () {
                if (changePasswordToggle.checked) {
                    showFeedback(passwordInput, "Password must be at least 8 characters.", passwordInput.value.length >= 8);
                    const match = confirmPasswordInput.value === passwordInput.value;
                    showFeedback(confirmPasswordInput, "Passwords do not match.", match);
                }
            });

            confirmPasswordInput.addEventListener("input", function () {
                if (changePasswordToggle.checked) {
                    const match = confirmPasswordInput.value === passwordInput.value;
                    showFeedback(confirmPasswordInput, "Passwords do not match.", match);
                }
            });

            $(roleIdSelect).on('change', function () {
                if ($(this).val() === IO_ROLE_VALUE) {
                    $('.police_branch').show();
                    const isValidPoliceBranch = validateSelect(policeBranchSelect);
                    showFeedback(policeBranchSelect, "Please select a police branch.", isValidPoliceBranch);
                } else {
                    $('.police_branch').hide();
                    showFeedback(policeBranchSelect, "", true);
                }
            });

            $(policeBranchSelect).on('change', function() {
                if ($('.police_branch').is(':visible')) {
                    const isValid = validateSelect(this); 
                    showFeedback(this, "Please select a police branch.", isValid);
                }
            });

            if (accessScopeToggle) {
                accessScopeToggle.addEventListener("click", function(event) {
                    const clickedButton = event.target.closest('.toggle-option');
                    if (clickedButton) {
                        const value = clickedButton.dataset.value;
                        accessScopeInput.value = value;

                        // Update active classes
                        accessScopeToggle.querySelectorAll('.toggle-option').forEach(btn => {
                            btn.classList.remove('active');
                        });
                        clickedButton.classList.add('active');

                        const isValid = validateAccessScope(accessScopeInput.value);
                        showFeedback(accessScopeInput, "Access scope is required.", isValid);
                    }
                });
            }

            if (form) {
                form.addEventListener('submit', function(event) {
                    let formIsValid = true;

                    const nameIsValid = (validateWordCount(nameInput.value) <= 100) && (nameInput.value.length <= 100);
                    showFeedback(nameInput, "Name must be less than 100 words and 100 characters.", nameIsValid);
                    if (!nameIsValid) formIsValid = false;

                    const emailIsValid = validateEmail(emailInput.value);
                    showFeedback(emailInput, "Invalid email format.", emailIsValid);
                    if (!emailIsValid) formIsValid = false;

                    if (changePasswordToggle.checked) {
                        const passwordIsValid = passwordInput.value.length >= 8;
                        showFeedback(passwordInput, "Password must be at least 8 characters.", passwordIsValid);
                        if (!passwordIsValid) formIsValid = false;

                        const confirmPasswordIsValid = confirmPasswordInput.value === passwordInput.value;
                        showFeedback(confirmPasswordInput, "Passwords do not match.", confirmPasswordIsValid);
                        if (!confirmPasswordIsValid) formIsValid = false;
                    } else {
                        showFeedback(passwordInput, "", true);
                        showFeedback(confirmPasswordInput, "", true);
                    }

                    const roleIsValid = validateSelect(roleIdSelect);
                    showFeedback(roleIdSelect, "Please select a role.", roleIsValid);
                    if (!roleIsValid) formIsValid = false;

                    if ($('.police_branch').is(':visible')) {
                        const policeBranchIsValid = validateSelect(policeBranchSelect);
                        showFeedback(policeBranchSelect, "Please select a police branch.", policeBranchIsValid);
                        if (!policeBranchIsValid) formIsValid = false;
                    }

                    const accessScopeIsValid = validateAccessScope(accessScopeInput.value);
                    showFeedback(accessScopeInput, "Access scope is required.", accessScopeIsValid);
                    if (!accessScopeIsValid) formIsValid = false;

                    if (!formIsValid) {
                        event.preventDefault();
                        event.stopPropagation(); 
                    }
                });
            }

            if ($(roleIdSelect).val() === IO_ROLE_VALUE) { 
                $('.police_branch').show(); 
                const initialPoliceBranchIsValid = validateSelect(policeBranchSelect);
                showFeedback(policeBranchSelect, "Please select a police branch.", initialPoliceBranchIsValid);
            } else {
                $('.police_branch').hide(); 
                showFeedback(policeBranchSelect, "", true); 
            }


            const initialAccessScopeIsValid = validateAccessScope(accessScopeInput.value);
            showFeedback(accessScopeInput, "Access scope is required.", initialAccessScopeIsValid);

            changePasswordToggle.checked = false;
        });
    </script>

@stop
