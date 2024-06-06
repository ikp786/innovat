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

                            <h4 class="card-title">{{ isset($banner->id) ? 'Edit banner' : 'Create banner' }}</h4>
                            <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                <div class="dt-buttons">
                                    <a href="{{ route('admin.banners.index') }}">
                                        <button class="btn btn-primary waves-effect waves-light"
                                            type="button">List</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! html()->form('POST', isset($banner->id) ? route('admin.banners.update', $banner->id) : route('admin.banners.store'))->class('auth-login-form mt-2')->id('bannerForm')->attribute('enctype', 'multipart/form-data')->open() !!}
                            @isset($banner->id)
                                @method('PUT')
                                {!! html()->hidden('id')->value($banner->id) !!}
                            @endisset
                            <div class="row">
                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Title', 'title')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->text('title')->class('form-control')->id('title')->placeholder('Title')->value(old('title', $banner->title ?? '')) !!}
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Button Name', 'button_name')->class('form-label') !!}
                                    {!! html()->text('button_name')->class('form-control')->id('button_name')->placeholder('Button Name')->value(old('button_name', $banner->button_name ?? '')) !!}
                                    @error('button_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Url', 'url')->class('form-label') !!}
                                    {!! html()->text('url')->class('form-control')->id('url')->placeholder('Url')->value(old('url', $banner->url ?? '')) !!}
                                    @error('url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Image', 'image')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->file('image')->class('form-control')->id('image') !!}
                                    @isset($banner->image)
                                        <img src="{{ asset('uploads/banner_images/' . $banner->image) }}" alt="image"
                                            width="100" height="100">
                                    @endisset
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Status', 'status')->class('form-label') !!} <span class="text-danger">*</span>
                                    <div class="form-check form-check-primary form-switch">
                                        {!! html()->checkbox('status', isset($banner) ? $banner->status : false)->class('form-check-input')->id('status') !!}
                                    </div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {!! html()->label('Description', 'description')->class('form-label') !!}<span class="text-danger">*</span>

                                <div class="col-sm-12 col-12 mb-3">
                                    <div id="full-wrapper">
                                        <div id="full-container">
                                            <div class="editor" style="height: 200px;" id="description_content">
                                                {!! $banner->description !!}
                                            </div>
                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Hidden input to store Quill editor content -->
                                {!! html()->hidden('description')->class('form-control')->id('description')->value(old('description', $banner->description ?? '')) !!}
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

    <!-- BEGIN: Banner Vendor JS-->
    <script src="{{ asset('admin/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/js/editors/quill/quill.min.js') }}"></script>
    <!-- END: Banner Vendor JS-->
    <!-- BEGIN: Banner JS-->
    <script src="{{ asset('admin/js/scripts/forms/form-quill-editor.js') }}"></script>


    <!-- END: Banner Vendor JS-->
    <script>
        $(document).ready(function() {
            $("#bannerForm").on("submit", function() {
                $("#description").val($(".ql-editor").html());
            })
        })
    </script>
@endpush
