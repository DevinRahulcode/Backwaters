@extends('layouts.master')

@section('title', 'Roles')

@section('headerStyle')
    <link rel="stylesheet" media="screen, print" href="{{ url(env('ASSETS_PATH').'/back/css/datagrid/datatables/datatables.bundle.css') }}">
@stop

@section('content')
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Roles <span class='fw-300'></span>
            </h1>

            <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
                @can('role-create')
                <a href=" {{ route('create-roles') }}">
                    <button type="button" class="btn btn-sm btn-primary">
                        <span class="mr-1 fal fa-plus"></span>
                        Add New
                    </button>
                </a>
                @endcan
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Roles <span class="fw-300"><i>List</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 15%;">Name</th>
                                        {{-- @can('role-edit') --}}
                                        <th style="width: 10%;">Edit</th>
                                        {{-- @endcan --}}





                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <!-- datatable end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@stop

@section('footerScript')
    <script src="{{ url(env('ASSETS_PATH').'/js/datagrid/datatables/datatables.bundle.js') }}"></script>
    <script>
        /* demo scripts for change table color */
        /* change background */
        $(function() {
            $(document).ready(function() {
                var table = $('#dt-basic-example').dataTable({
                    processing: true,
                    serverSide: true,
                    ordering: false,
                    searching: true,
                    ajax: {
                        url: "{{ route('roles-list') }}", // or '/users-list' for testing
                        type: 'GET',
                        dataType: 'json', // Ensure the response type is json
                        
                        // headers: {
                        //     'X-Requested-With': 'XMLHttpRequest' // Ensure this header is set for AJAX
                        // },
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    },
                    columnDefs: [{
                        "defaultContent": "-",
                        "targets": "_all"
                    }],
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'id',
                            className: 'text-center',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'name',
                            name: 'name',
                            className: 'text-center',
                            orderable: false,
                            searchable: true
                        },
                
                        {
                            data: 'edit',
                            name: 'edit',
                            className: 'text-center',
                            orderable: false,
                            searchable: false
                        },

                    ],
                });

                $('.js-thead-colors a').on('click', function() {
                    var theadColor = $(this).attr("data-bg");
                    console.log(theadColor);
                    $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
                });

                $('.js-tbody-colors a').on('click', function() {
                    var theadColor = $(this).attr("data-bg");
                    console.log(theadColor);
                    $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
                });

            });
        });

        function submitDeleteForm(form) {
            new Swal({
                    title: "Are you sure?",
                    text: "do you want to delete this?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes Delete",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            return false;
        }

        function confirmStatusChange(form) {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to change the status?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn-success',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });

            return false;
        }
    </script>
@stop
