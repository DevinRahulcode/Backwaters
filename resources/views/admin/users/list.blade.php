@extends('layouts.master')

@section('title', 'Users')


@section('content')
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Users <span class='fw-300'></span>
            </h1>

            <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
                @can('user-create')
                <a href="{{ route('create-users') }}">
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
                            Users <span class="fw-300"><i>List</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 25%;">Name</th>
                                        <th style="width: 25%;">Email</th>
                                        <th style="width: 20%;">Role</th>
                                        @can('user-edit')
                                        <th style="width: 12%;">Edit</th>
                                        @endcan
                                        <th style="width: 12%;">Activation</th>
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
    <script>
        $(document).ready(function() {
            var table = $('#dt-basic-example').dataTable({
                processing: true,
                serverSide: true,
                ordering: false,
                searching: true,
                ajax: {
                    url: "{{ route('get-users-list') }}",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id',
                        orderable: true,
                        searchable: true,
                        className: 'text-center',
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: false,
                        searchable: true,
                        className: 'text-center',
                    },
                    {
                        data: 'email',
                        name: 'email',
                        orderable: false,
                        searchable: true,
                        className: 'text-center',
                    },
                    {
                        data: 'role',
                        name: 'roles.name',
                        orderable: false,
                        searchable: true,
                        className: 'text-center',
                    },                    
                    @can('user-edit')
                    {
                        data: 'edit',
                        name: 'edit',
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
                    },
                    @endcan
                    {
                        data: 'activation',
                        name: 'activation',
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
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

        function submitDeleteForm(form) {
            new Swal({
                    title: "Are you sure?",
                    text: "to delete this user ?",
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
