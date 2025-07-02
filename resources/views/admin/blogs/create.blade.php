@extends('layouts.master')

@section('title', 'Create Discover Sri Lanaka')

@section('content')
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">

        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> Create Blog <span class='fw-300'></span>
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
                            Create <span class="fw-300"><i>blog</i></span>
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

                            <form action="{{ route('blog.store') }}" enctype="multipart/form-data"
                                method="post" id="user-form" class="smart-form row" autocomplete="off">
                                @csrf
                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Title <span
                                                style="color: red">*</span></label>
                                        <input type="text" id="title" name="title" class="form-control"
                                            value="{{ old('title') }}" required>
                                        <div class="invalid-feedback">Title is required, you missed this one.</div>
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="simpleinput"> Order </label>
                                        <input type="number" id="order" name="order"
                                            class="form-control" autocomplete="off" min="1" >
                                        <div class="invalid-feedback">Order  is required, you missed this one.
                                        </div>
                                        @error('order')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3 col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="example-email-2">Top Image <span
                                                style="color: red">*</span> : <span
                                                class="text-muted fw-normal small">Recommended Size: <strong>1200 * 800
                                                    px</strong></span></label>
                                        <input type="file" id="topImage" name="topImage" class="form-control"
                                            accept="image/*" required>
                                        <div class="invalid-feedback">Top Image is required, you missed this one.</div>
                                        @error('topImage')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <!-- Listing Description -->
                                <div class="mb-3 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="listingDescription">Listing Description <span
                                                style="color: red">*</span></label>
                                        <textarea id="listingDescription" name="listingDescription" class="form-control" required>{{ old('listingDescription') }}</textarea>
                                        <div class="invalid-feedback">Listing description is required, you missed this one.
                                        </div>
                                        @error('listingDescription')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="mb-3 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="topDescription">Description <span
                                                style="color: red">*</span></label>
                                        <textarea id="topDescription" name="topDescription" class="form-control" required>{{ old('topDescription') }}</textarea>
                                        <div class="invalid-feedback">Top description is required, you missed this one.
                                        </div>
                                        @error('topDescription')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-5 mb-3 col-6">
                                    <label class="form-label" for="multiple-label">Releted Blog</label>
                                    <select class="select2 form-control" multiple="multiple" id="reletedBlogId"
                                        name="reletedBlogId[]">
                                        @if (isset($blogs) && count($blogs) > 0)
                                            @foreach ($blogs as $blog)
                                                <option value="{{ $blog->id }}">{{ $blog->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div
                                        class="flex-row panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex">
                                        <button id="js-submit-btn" class="ml-auto btn btn-primary" type="submit">Submit Form</button>
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
            $('#topDescription').summernote({
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['font', ['strikethrough', 'clear', 'forecolor']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });


            $('#bottomDescription').summernote({
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['font', ['strikethrough', 'clear', 'forecolor']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
    });
</script>
@stop
