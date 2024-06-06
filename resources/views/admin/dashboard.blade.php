@extends('admin.layouts.app')
@push('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Service -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Total services</h5>
                                    <p class="card-text font-small-3"></p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="{{ route('admin.services.index') }}">{{$services}}</a>
                                    </h3>
                                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary">View Services</a>

                                </div>
                            </div>
                        </div>
                        <!--/ Service -->

                         <!-- Page -->
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Total Pages</h5>
                                    <p class="card-text font-small-3"></p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="{{ route('admin.pages.index') }}">{{$pages}}</a>
                                    </h3>
                                    <a href="{{ route('admin.pages.index') }}" class="btn btn-primary">View Pages</a>

                                </div>
                            </div>
                        </div>
                        <!--/ Page -->

                         <!-- Page -->
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Total News</h5>
                                    <p class="card-text font-small-3"></p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="{{ route('admin.newses.index') }}">{{$news}}</a>
                                    </h3>
                                    <a href="{{ route('admin.newses.index') }}" class="btn btn-primary">View News</a>

                                </div>
                            </div>
                        </div>
                        <!--/ Page -->

                        <!-- Page -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Total Blogs</h5>
                                    <p class="card-text font-small-3"></p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="{{-- route('admin.blogs.index') --}}">{{@$blogs ?? 0}}</a>
                                    </h3>
                                    <a href="{{-- route('admin.newses.index') --}}" class="btn btn-primary">View Blogs</a>

                                </div>
                            </div>
                        </div>
                        <!--/ Page -->

                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->
            </div>
        </div>
    </div>
@endpush
