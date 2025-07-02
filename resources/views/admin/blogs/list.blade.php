@extends('layouts.master')

@section('title', 'Blog List')

@section('content')
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Blog List <span class='fw-300'></span>
            </h1>

            <div class="row" style="margin-left:auto; margin-right:auto; gap: 12px">
                <a href=" {{ route('blog.create') }}">
                    <button type="button" class="btn btn-sm btn-primary">
                        <span class="mr-1 fal fa-plus"></span>
                        Add New
                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Blog <span class="fw-300"><i>List</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 15%;">Title</th>
                                    <th style="width: 15%;">Edit</th>
                                    <th style="width: 10%;">Status</th>
                                    <th style="width: 15%;">Delete</th>
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
            var table = $('#dt-basic-example').DataTable({
                processing: true,
                serverSide: true,
                ordering: false,
                ajax: {
                    url: "{{ route('blog.get-blog') }}",
                    dataSrc: function(json) {
                        var searchTerm = table.search().toLowerCase();

                        if (searchTerm.length > 0) {
                            json.data.sort(function(a, b) {
                                var aStartsWith = a.name.toLowerCase().startsWith(searchTerm);
                                var bStartsWith = b.name.toLowerCase().startsWith(searchTerm);

                                if (aStartsWith && bStartsWith) return 0;

                                return aStartsWith ? -1 : 1;
                            });
                        }
                        return json.data;
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id',
                        className: 'text-center',
                         width: '5%'
                    },
                    {
                        data: 'title',
                        name: 'title',
                        className: 'text-center',
                        orderable: false,
                         width: '15%'
                    },
                    {
                        data: 'edit',
                        name: 'edit',
                        className: 'text-center',
                        orderable: false,
                        searchable: false,
                         width: '10%'
                    },
                    {
                        data: 'activation',
                        name: 'activation',
                        className: 'text-center',
                        orderable: false,
                        searchable: false,
                         width: '10%'
                    },
                    {
                        data: 'delete',
                        name: 'delete',
                        className: 'text-center',
                        orderable: false,
                        searchable: false,
                         width: '10%'
                    },
                ],
                // Make sure table width remains consistent
                scrollX: true,
                scrollCollapse: true,
                autoWidth: false
            });
        });

        function submitDeleteForm(form) {
            new Swal({
                    title: "Are you sure?",
                    text: "to delete this blog ?",
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
    </script>
@stop
