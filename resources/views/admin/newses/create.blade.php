@extends('admin.layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/plugins/forms/form-quill-editor.css') }}">
@endpush
@push('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <section class="validations">
            <div class="row">
                <div class="col-12">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="alert-body">
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="alert-body">
                                {{ session('error') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ isset($news->id) ? 'Edit News' : 'Create News' }}</h4>
                            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                <div class="dt-buttons">
                                    <a href="{{ route('admin.newses.index') }}">
                                        <button class="btn btn-primary waves-effect waves-light"
                                            type="button">List</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! html()->form('POST', isset($news->id) ? route('admin.newses.update', $news->id) : route('admin.newses.store'))->id('newsForm')->class('auth-login-form mt-2')->attribute('enctype', 'multipart/form-data')->open() !!}
                            @isset($news->id)
                                @method('PUT')
                                {!! html()->hidden('id')->value($news->id) !!}
                            @endisset
                            <div class="row">
                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Title', 'title')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->text('title')->class('form-control')->id('title')->placeholder('Title')->value(old('title', $news->title ?? '')) !!}
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Image', 'image')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->file('image')->class('form-control')->id('image') !!}
                                    @isset($news->image)
                                        <img src="{{ asset('uploads/news_images/' . $news->image) }}" alt="image"
                                            width="100" height="100">
                                    @endisset
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Sort Description', 'sort_description')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->textarea('sort_description')->class('form-control')->id('sort_description')->placeholder('Sort Description')->value(old('sort_description', $news->sort_description ?? '')) !!}
                                    @error('sort_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Status', 'status')->class('form-label') !!} <span class="text-danger">*</span>
                                    <div class="form-check form-check-primary form-switch">
                                        {!! html()->checkbox('status', isset($news) ? $news->status : false)->class('form-check-input')->id('status') !!}
                                    </div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {!! html()->label('Description', 'description')->class('form-label') !!}<span class="text-danger">*</span>
                                <div class="col-sm-12 col-12 mb-3">
                                    <div id="full-wrapper">
                                        <div id="full-container">
                                            <div class="editor">
                                                {!! old('description', $news->description ?? '') !!}
                                            </div>
                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Hidden input to store Quill editor content -->
                                {!! html()->hidden('description')->class('form-control')->id('description')->value(old('description', $news->description ?? '')) !!}
                                {!! html()->button('Submit')->class('btn btn-primary')->type('submit') !!}
                                {!! html()->closeModelForm() !!}
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endpush

@push('scripts')
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/js/editors/quill/quill.min.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/js/scripts/forms/form-quill-editor.js') }}"></script>


    <!-- END: Page Vendor JS-->
    <script>
        $(document).ready(function() {
            $("#newsForm").on("submit", function() {
                $("#description").val($(".ql-editor").html());
            })
        })
    </script>
@endpush
