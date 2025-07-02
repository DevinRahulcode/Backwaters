@extends('layouts.master')

@section('title', 'Edit Role')

@section('headerStyle')
    <link rel="stylesheet" media="screen, print"
        href="{{ url(env('ASSETS_PATH').'/back/css/miscellaneous/fullcalendar/fullcalendar.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ url(env('ASSETS_PATH').'/back/css/miscellaneous/jqvmap/jqvmap.bundle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
@stop

@section('content')
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Roles <span class='fw-300'></span>
            </h1>

            <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
                <a href="{{ route('create-roles') }}">
                    <button type="button" class="btn btn-sm btn-primary">
                        <span class="mr-1 fal fa-plus"></span>
                        Add New
                    </button>
                </a>
                <a href="{{ route('roles-list') }}">
                    <button type="button" class="btn btn-sm btn-primary">
                        <span class="mr-1 fal fa-list-ul"></span>
                        View All
                    </button>
                </a>
                {{-- Submit button at the top --}}
                <button type="submit" class="btn btn-sm btn-primary" form="role-form">
                    <span class="mr-1 fal fa-check"></span>
                    Update Role
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Update <span class="fw-300"><i>role</i></span>
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
                        
                            <form action="{{ route('update-role', $role->id) }}" enctype="multipart/form-data" method="post"
                                id="role-form" class="smart-form row needs-validation" autocomplete="off" novalidate>
                                @csrf
                                @method('PUT')

                                {{-- Hidden fields for initial values, useful for re-selecting after dynamic loads --}}
                                <input type="hidden" id="initialOfficeId" value="{{ $role->office_id }}">
                                <input type="hidden" id="initialDesignationId" value="{{ $role->designation_id }}">

                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="roleNameInput">Role Name <span style="color: red">*</span></label>
                                        <input type="text" id="roleNameInput" name="name" value="{{ old('name', $role->name) }}"
                                            class="form-control" maxlength="51" required>
                                        <div class="invalid-feedback">Role Name is required.</div>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="userManualInput">User Manual</label>
                                        <div class="d-flex align-items-center" style="gap: 15px">
                                            <input type="file" id="userManualInput" name="user_manual" class="form-control">
                                            {{-- Hidden input to signal removal --}}
                                            <input type="hidden" name="remove_user_manual" id="removeUserManualFlag" value="0">

                                            <div id="userManualExisting" class="d-flex align-items-center" style="gap: 10px;">
                                                @if ($role->user_manual)
                                                    <a href="{{ asset('storage/' . $role->user_manual) }}" target="_blank" title="View Current User Manual" id="viewUserManualLink">
                                                        <i class="bi bi-file-earmark-pdf" style="font-size: 2rem"></i>
                                                    </a>
                                                    <span>{{ basename($role->user_manual) }}</span>
                                                    <button type="button" class="btn btn-sm btn-danger" id="removeUserManualBtn" title="Remove User Manual">
                                                        <i class="fal fa-times"></i> 
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <small class="form-text text-muted" id="userManualHelpText">Upload a PDF file (max 2MB).</small>
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

                                                    // --- Step 2: Group permissions by their most direct parent menu title ---
                                                    // We'll prioritize putting permissions under their exact dynamic_menu_id's title.
                                                    // If that menu has a parent, we might group them under the parent's title,
                                                    // depending on how you want the cards to represent your hierarchy.
                                                    // For the screenshot's flat card structure, we'll try to map permissions directly to a relevant menu title for the card.
                                                    $cardGroups = [];

                                                    foreach ($permission as $permItem) {
                                                        $menuId = $permItem->dynamic_menu_id;

                                                        if (isset($menuMap[$menuId])) {
                                                            $menuTitle = $menuMap[$menuId]['title'];
                                                            // If this menu title already exists as a group, add the permission
                                                            if (!isset($cardGroups[$menuTitle])) {
                                                                $cardGroups[$menuTitle] = [];
                                                            }
                                                            $cardGroups[$menuTitle][] = $permItem;
                                                        } else {
                                                            // Fallback: If a permission's dynamic_menu_id doesn't directly map,
                                                            // it might belong to a broader category. You'd need a strategy here.
                                                            // For now, let's create a generic 'Uncategorized' card or
                                                            // try to find an ancestor menu to group it under.
                                                            // A more robust solution might involve tracing parent_id upwards.
                                                            // For simplicity, let's just create an "Uncategorized" section if it doesn't map directly.
                                                            if (!isset($cardGroups['Uncategorized Permissions'])) {
                                                                $cardGroups['Uncategorized Permissions'] = [];
                                                            }
                                                            $cardGroups['Uncategorized Permissions'][] = $permItem;
                                                        }
                                                    }

                                                    // --- Step 3: Optional - Order the card groups as desired ---
                                                    // For example, if you want specific cards first:
                                                    $desiredOrder = ['User Management', 'Farm Management', 'Plant Management', 'Employee Management',
                                                                    'Schedule Management', 'Task Management', 'Inventory Management', 'Report Management',
                                                                    'Settings', 'Uncategorized Permissions']; // Add all your expected card titles

                                                    $orderedCardGroups = [];
                                                    foreach ($desiredOrder as $title) {
                                                        if (isset($cardGroups[$title])) {
                                                            $orderedCardGroups[$title] = $cardGroups[$title];
                                                            unset($cardGroups[$title]); // Remove it from the original array
                                                        }
                                                    }
                                                    // Add any remaining groups (e.g., 'Uncategorized')
                                                    $orderedCardGroups = array_merge($orderedCardGroups, $cardGroups);

                                                @endphp

                                                @foreach ($orderedCardGroups as $cardTitle => $cardPermissions)
                                                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4"> {{-- Responsive columns for the cards --}}
                                                        <div class="card border-0 shadow-sm rounded-lg h-100"> {{-- Card styling similar to screenshot --}}
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
                                                                                    @if (in_array($permissionItem->id, $rolePermissions)) checked @endif>
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
                                        <button class="ml-auto btn btn-primary" type="submit">
                                            <span class="mr-1 fal fa-check"></span>
                                            Update form</button>
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

                  $('#select-all').on('change', function() {
                $('.permission-checkbox').prop('checked', this.checked);
            });

            $('.permission-checkbox').on('change', function() {
                if (!this.checked) {
                    $('#select-all').prop('checked', false);
                } else {
                    if ($('.permission-checkbox:checked').length === $('.permission-checkbox').length) {
                        $('#select-all').prop('checked', true);
                    }
                }
            });

            if ($('.permission-checkbox').length > 0 && $('.permission-checkbox:checked').length === $('.permission-checkbox').length) {
                $('#select-all').prop('checked', true);
            }
            

            $('#removeUserManualBtn').on('click', function() {
                const roleId = {{$role->id}}; // Get role ID from data attribute

                Swal.fire({
                    title: 'Are you sure?',
                    text: "This will immediately remove the user manual. This action cannot be undone!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, remove it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/admin/roles/${roleId}/remove-user-manual`, // Adjust this URL to your route
                            type: 'POST', // Use POST or DELETE, POST is often easier with forms
                            data: {
                                _token: '{{ csrf_token() }}', // Laravel CSRF token
                                _method: 'DELETE' // Spoof DELETE request if using POST
                            },
                             success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        title: 'Removed!',
                                        text: response.message,
                                        icon: 'success'
                                    }).then(() => {
                                        // Reload the page after the user dismisses the success SweetAlert
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        response.message,
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr) {
                                console.error('AJAX error:', xhr.responseText);
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while trying to remove the manual.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });

            // If a new file is selected, hide the existing manual display
            $('#userManualInput').on('change', function() {
                if ($(this).val()) { // If a file is selected
                    $('#userManualExisting').hide(); // Hide existing manual elements
                } else if (!$(this).val() && $('#viewUserManualLink').length > 0) {
                     // If input is cleared and there was an existing manual, show previous buttons again
                     $('#userManualExisting').show();
                }
            });

            // Initial check: if there's no existing manual, hide the existing div
            if ($('#viewUserManualLink').length === 0) {
                $('#userManualExisting').hide();
            }


            const form = document.getElementById('role-form');
            const policeBranchDiv = document.querySelector('.police_branch');
            const policeBranchSelect = document.getElementById('police_branch_id');
            const officeSelect = $('#officeId');
            const designationsSelect = $('#designationsId');

            const initialOfficeId = $('#initialOfficeId').val();
            const initialDesignationId = $('#initialDesignationId').val();

            function updatePoliceBranchRequired() {
                if (policeBranchDiv.style.display !== 'none') {
                    policeBranchSelect.setAttribute('required', 'required');
                    // Add is-invalid class if validation fails for this field
                    if (form.classList.contains('was-validated') && !policeBranchSelect.checkValidity()) {
                        $(policeBranchSelect).next('.select2-container').find('.select2-selection').addClass('is-invalid');
                    } else {
                        $(policeBranchSelect).next('.select2-container').find('.select2-selection').removeClass('is-invalid');
                    }
                } else {
                    policeBranchSelect.removeAttribute('required');
                    $(policeBranchSelect).next('.select2-container').find('.select2-selection').removeClass('is-invalid');
                    policeBranchSelect.value = ""; // Clear the value if not required
                }
            }

            function loadDesignations(officeId, designationToSelect = null) {
                if (officeId) {
                    $.ajax({
                        url: '{{ url('admin/get-designation-details') }}/' + officeId,
                        type: 'get',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            designationsSelect.empty().append(
                                '<option value="">Select Designation</option>'
                            );

                            let foundDesignationInNewData = false;
                            $.each(data, function(key, value) {
                                designationsSelect.append('<option value="' + value.id + '">' + value.name + '</option>');
                                if (designationToSelect && value.id == designationToSelect) {
                                    foundDesignationInNewData = true;
                                }
                            });

                            if (designationToSelect && foundDesignationInNewData) {
                                // Use a timeout to ensure Select2 is fully initialized before setting value
                                setTimeout(() => {
                                    designationsSelect.val(designationToSelect).trigger('change.select2');
                                }, 50);
                            } else {
                                designationsSelect.val('').trigger('change.select2'); // Clear if no designation to select or not found
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching designations. Status:', status, 'Error:', error, 'Response:', xhr.responseText);
                            designationsSelect.empty().append('<option value="">Error loading designations</option>').trigger('change.select2');
                        }
                    });
                } else {
                    designationsSelect.empty().append('<option value="">Select Designation</option>').trigger('change.select2');
                }
            }

            // Initial load of designations based on the role's office_id and designation_id
            if (initialOfficeId) {
                loadDesignations(initialOfficeId, initialDesignationId);
            } else {
                loadDesignations(null);
            }

            updatePoliceBranchRequired(); // Call initially to set correct required state and visibility

            // Event listener for all submit buttons associated with the form
            $('button[type="submit"][form="role-form"]').on('click', function(event) {
                event.preventDefault(); // Prevent default form submission

                updatePoliceBranchRequired(); // Update required status before validation

                if (form.checkValidity() === false) {
                    event.stopPropagation(); // Stop propagation of the event
                    form.classList.add('was-validated'); // Add class to show validation feedback

                    // Find the first invalid field and focus on it
                    const firstInvalid = form.querySelector(':invalid');
                    if (firstInvalid) {
                        firstInvalid.focus();
                        // For select2 elements, you need to open them too
                        if ($(firstInvalid).hasClass('select2')) {
                            $(firstInvalid).select2('open');
                        }
                    }
                } else {
                    form.submit(); // Submit the form if valid
                }
            });

            // Handle change on office selection
            $(document).on('change', '#officeId', function() {
                let officeId = $(this).val();
                loadDesignations(officeId, null); // Load designations, no specific one to select initially
            });

            // Handle change on designation selection
            $('#designationsId').on('change', function () {
                if ($(this).val() == '14') { // Assuming '14' is the ID for the designation that requires police branch
                    policeBranchDiv.style.display = 'block';
                } else {
                    policeBranchDiv.style.display = 'none';
                }
                updatePoliceBranchRequired(); // Update required status based on visibility
            });

            // Select/Deselect all permissions
            $('#select-all').on('change', function() {
                let checkboxes = $('input[name="permission[]"]');
                checkboxes.prop('checked', this.checked);
            });
        });
    </script>
@stop