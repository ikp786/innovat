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

                            <h4 class="card-title">{{ isset($setting->id) ? 'Edit Setting' : 'Create Setting' }}</h4>
                        </div>
                        <div class="card-body">
                            {!! html()->form('POST', route('admin.settings.update'))->id('settingForm')->class('auth-login-form mt-2')->attribute('enctype', 'multipart/form-data')->open() !!}
                            @isset($setting->id)
                                {!! html()->hidden('id')->value($setting->id) !!}
                            @endisset
                            <div class="row">
                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Facebook Link', 'facebook_url')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->text('facebook_url')->class('form-control')->id('facebook_url')->placeholder('Facebook Link')->value(old('facebook_url', $setting->facebook_url ?? '')) !!}
                                    @error('facebook_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Linkedin Url', 'facebook_url')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->text('linkedin_url')->class('form-control')->id('linkedin_url')->placeholder('Linkedin Url')->value(old('linkedin_url', $setting->linkedin_url ?? '')) !!}
                                    @error('linkedin_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Twitter Link', 'twitter_url')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->text('twitter_url')->class('form-control')->id('twitter_url')->placeholder('Twitter Link')->value(old('twitter_url', $setting->twitter_url ?? '')) !!}
                                    @error('twitter_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Instagram Link', 'twitter_url')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->text('instagram_url')->class('form-control')->id('instagram_url')->placeholder('Instagram Link')->value(old('instagram_url', $setting->instagram_url ?? '')) !!}
                                    @error('instagram_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Youtube Link', 'facebook_url')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->text('youtube_url')->class('form-control')->id('youtube_url')->placeholder('Youtube Link')->value(old('youtube_url', $setting->youtube_url ?? '')) !!}
                                    @error('youtube_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Brochure Link', 'brochure_url')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->file('brochure_url')->class('form-control')->id('brochure_url')->placeholder('Brochure Link') !!}
                                    @error('brochure_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}

                                <div class="col-sm-6 col-12 mb-3">
                                    {!! html()->label('Brochure Link', 'brochure_url')->class('form-label') !!}<span class="text-danger">*</span>
                                    {!! html()->file('brochure_url')->class('form-control')->id('brochure_url') !!}
                                    {{-- @dd($setting) --}}
                                    @isset($setting->brochure_url)
                                        <a download href="{{ asset('uploads/brochure_images/' . $setting->brochure_url) }}" alt="brochure_url"
                                            width="50" height="50"><i data-feather="download"></i> </a>
                                    @endisset
                                    @error('brochure_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {!! html()->button('Submit')->class('btn btn-primary')->type('submit') !!}
                                {!! html()->closeModelForm() !!}
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endpush
