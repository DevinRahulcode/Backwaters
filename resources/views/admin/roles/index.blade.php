@extends('layouts.master')

@section('title', 'Create Roles')

@section('headerStyle')
    {{-- <link rel="stylesheet" media="screen, print" href="{{ url(env('ASSETS_PATH').'/back/css/miscellaneous/reactions/reactions.css') }}"> --}}
    <link rel="stylesheet" media="screen, print"
        href="{{ url(env('ASSETS_PATH').'/back/css/miscellaneous/fullcalendar/fullcalendar.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ url(env('ASSETS_PATH').'/back/css/miscellaneous/jqvmap/jqvmap.bundle.css') }}">
@stop

@section('content')
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Roles <span class='fw-300'></span>
            </h1>

            <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
                <a href="{{ route('roles-list') }}">
                    <button type="button" class="btn btn-sm btn-primary">
                        <span class="mr-1 fal fa-list-ul"></span>
                        View All
                    </button>
                </a>
                {{-- Submit button at the top --}}
                <button type="submit" class="btn btn-sm ml-auto btn btn-primary" form="role-form">
                    <span class="mr-1 fal fa-check"></span>
                    Submit Form
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Create <span class="fw-300"><i>role</i></span>
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
                            <div class="row">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                        </button>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <form action="{{ route('new-role') }}" enctype="multipart/form-data" method="post"
                                id="role-form" class="smart-form row needs-validation" autocomplete="off" novalidate>
                                @csrf
                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="simpleinput">Role Name <span style="color: red">*</span></label>
                                        <input type="text" id="simpleinput" name="name" class="form-control"
                                            maxlength="51" value="{{ old('name') }}" required>
                                        <div class="invalid-feedback">Name is required, you missed this one.</div>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                

                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="example-fileinput">User Manual</label>
                                        <div class="d-flex align-items-center" style="gap: 15px">
                                            <input type="file" id="simpleinput" name="user_manual"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                               <div class="col-lg-12 col-xl-12">
                                    <div class="panel-hdr" style="margin-bottom: 20px">
                                        <h2>
                                            Permissions
                                        </h2>
                                    </div>
                              

                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="row">
                                                @php
                                                    // --- Step 1: Create a lookup map for dynamic menu items ---
                                                    $menuMap = [];
                                                    foreach ($dynamicMenu as $menuItem) {
                                                        $menuMap[$menuItem->id] = [
                                                            'title' => $menuItem->title,
                                                            'is_parent' => $menuItem->is_parent,
                                                            'parent_id' => $menuItem->parent_id,
                                                        ];
                                                    }

                                                    // --- Step 2: Group permissions by their most direct parent menu title for cards ---
                                                    $cardGroups = [];

                                                    foreach ($permission as $permItem) {
                                                        $menuId = $permItem->dynamic_menu_id;

                                                        if (isset($menuMap[$menuId])) {
                                                            $menuTitle = $menuMap[$menuId]['title'];
                                                            // Ensure the group exists
                                                            if (!isset($cardGroups[$menuTitle])) {
                                                                $cardGroups[$menuTitle] = [];
                                                            }
                                                            $cardGroups[$menuTitle][] = $permItem;
                                                        } else {
                                                            // Fallback for permissions that don't directly map to a menu item (should ideally not happen)
                                                            if (!isset($cardGroups['Uncategorized Permissions'])) {
                                                                $cardGroups['Uncategorized Permissions'] = [];
                                                            }
                                                            $cardGroups['Uncategorized Permissions'][] = $permItem;
                                                        }
                                                    }

                                                    // --- Step 3: Optional - Order the card groups as desired (adjust titles as per your actual menu) ---
                                                    $desiredOrder = [
                                                        'User Management', 'Farm Management', 'Plant Management', 'Employee Management',
                                                        'Schedule Management', 'Task Management', 'Inventory Management', 'Report Management',
                                                        'Settings' // Add 'Settings' if it's a specific card title in your dynamic menu or to be handled separately
                                                    ];

                                                    $orderedCardGroups = [];
                                                    foreach ($desiredOrder as $title) {
                                                        if (isset($cardGroups[$title])) {
                                                            $orderedCardGroups[$title] = $cardGroups[$title];
                                                            unset($cardGroups[$title]); // Remove from original array to avoid duplicates
                                                        }
                                                    }
                                                    // Add any remaining groups (e.g., 'Uncategorized Permissions' or new menus)
                                                    $orderedCardGroups = array_merge($orderedCardGroups, $cardGroups);

                                                @endphp

                                                @foreach ($orderedCardGroups as $cardTitle => $cardPermissions)
                                                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4"> {{-- Responsive columns for the cards --}}
                                                        <div class="card border-0 shadow-sm rounded-lg h-100"> {{-- Card styling --}}
                                                            <div class="card-header bg-white py-3 px-4 border-bottom-0 rounded-top-lg">
                                                                <h5 class="mb-0 fw-600 text-dark">{{ $cardTitle }}</h5> {{-- Card Title --}}
                                                            </div>
                                                            <div class="card-body p-4 pt-2"> {{-- Padding and slightly less top padding --}}
                                                                <ul class="list-unstyled mb-0">
                                                                    @foreach ($cardPermissions as $permissionItem)
                                                                        <li class="mb-2">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input permission-checkbox"
                                                                                    id="perm-{{ $permissionItem->id }}"
                                                                                    name="permission[]"
                                                                                    value="{{ $permissionItem->name }}"
                                                                                    {{-- No 'checked' condition here as it's a create form --}}
                                                                                    >
                                                                                <label class="custom-control-label" for="perm-{{ $permissionItem->id }}">
                                                                                    {{ $permissionItem->name }}
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div> {{-- End row for permission cards --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div
                                        class="flex-row panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex">
                                        <button class="ml-auto btn btn-primary" id="js-submit-btn" type="submit">
                                             <span class="mr-1 fal fa-check"></span>
                                            Submit Form
                                        </button>
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
       $(document).ready(function() {
            $('.select2').select2();

            const form = document.getElementById('role-form');
            const policeBranchDiv = document.querySelector('.police_branch');
            const policeBranchSelect = document.getElementById('police_branch_id');

            function updatePoliceBranchRequired() {
                if (policeBranchDiv.style.display !== 'none') {
                    policeBranchSelect.setAttribute('required', 'required');
                } else {
                    policeBranchSelect.removeAttribute('required');
                    policeBranchSelect.classList.remove('is-invalid');
                    policeBranchSelect.value = "";
                }
            }

            if ($('#designationsId').val() == '14') {
                policeBranchDiv.style.display = 'block';
            } else {
                policeBranchDiv.style.display = 'none';
            }
            updatePoliceBranchRequired();


            $('#js-submit-btn').click(function(event) {
                event.preventDefault();

                updatePoliceBranchRequired();

                if (form.checkValidity() === false) {
                    event.stopPropagation();
                    form.classList.add('was-validated');

                    // Find the first invalid field and focus on it
                    const firstInvalid = form.querySelector(':invalid');
                    if (firstInvalid) {
                        firstInvalid.focus();
                        // For select2 elements, you might need to open them too
                        if ($(firstInvalid).hasClass('select2')) {
                            $(firstInvalid).select2('open');
                        }
                    }
                } else {
                    form.submit();
                }
            });

            // This ensures the top submit button also triggers the form validation and focus
            $('button[type="submit"][form="role-form"]').click(function(event) {
                event.preventDefault();
                $('#js-submit-btn').click(); // Trigger the click of the main submit button
            });


            $(document).on('change', '#officeId', function() {
                var officeId = $(this).val();

                if (officeId) {
                    $.ajax({
                        url: '{{ url('admin/get-designation-details') }}/' + officeId,
                        type: 'get',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            $('#designationsId').empty().append(
                                '<option value="">Select Designation</option>'
                            );

                            $.each(data, function(key, value) {
                                $('#designationsId').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });

                            $('#designationsId').trigger('change');
                        },
                        error: function() {
                            console.error('Error fetching designations. Please try again.');
                        }
                    });
                } else {
                    $('#designationsId').empty().append(
                        '<option value="">Select Designation</option>'
                    ).trigger('change');
                }
            });

            $('#designationsId').on('change', function () {
                if ($(this).val() == '14') { // Assuming '14' is the ID for the designation that requires police branch
                    policeBranchDiv.style.display = 'block';
                } else {
                    policeBranchDiv.style.display = 'none';
                }
                updatePoliceBranchRequired();
            });

            $('#select-all').on('change', function() {
                let checkboxes = $('input[name="permission[]"]');
                checkboxes.prop('checked', this.checked);
            });

            $('#reset-btn').on('click', function() {
                let checkboxes = $('input[name="permission[]"]');
                checkboxes.prop('checked', false);
                $('#select-all').prop('checked', false);
            });
        });
    </script>
@stop