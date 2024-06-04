@extends('front.layouts.app')
@push('content')
    <div class="main-content">
        @if ($modelName == 'service')
            <section class="inner-header divider"
                style="background-image: url('{{ asset('uploads/service_images/' . $data->image) }}'); background-size: cover;">
            @else
                <section class="inner-header divider"
                    style="background-image: url('{{ asset('uploads/page_images/' . $data->image) }}'); background-size: cover;">
        @endif
        <div class="container banner_text">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-26">{{ $data->title ?? '' }}</h1>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Section: Blog -->
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-12 col-lg-8 page_content">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                <div class="post-description pb-0">

                                    {!! $data->description !!}

                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 right_side_bar">
                        <a style="color: #fff;" href="../locations/bms-auditing-dubai-uae.html">
                            <div class="mb-20" style="text-align: center;background: #e03e2d;padding: 7px;">
                                <button
                                    class="btn btn-outline-primary sear"style="border-radius: 0px;background: #e03e2d;padding: 7px;">Get
                                    A Quote</button>
                            </div>
                        </a>

                        <div class="sidebar sidebar-left mt-sm-30">
                            <div class="widget bordered mb-20">
                                <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">
                                    Latest Blogs</h5>
                                <div class="latest-posts">
                                    
                                    {{-- <article class="post media-post clearfix pb-0 mb-25"
                                        style="font-family: Poppins,sans-serif;">
                                        <div class="post-right">
                                            <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                                    style="font-family: Poppins,sans-serif;"
                                                    href="the-power-of-feasibility-studies-in-mitigating-investment-risks.html">Decoding
                                                    Success: The Power of Feasibility Studies in Mitigating Investment
                                                    Risks</a>
                                            </h5>
                                        </div>
                                    </article> --}}
                                    
                                </div>
                            </div>
                            <div class="widget bordered mb-20">
                                <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">
                                    Latest
                                    News</h5>
                                <div class="latest-posts">
                                    @foreach ($news as $newsVal)
                                        <article class="post media-post clearfix pb-0 mb-25"
                                            style="font-family: Poppins,sans-serif;">
                                            <div class="post-right">
                                                <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                                        style="font-family: Poppins,sans-serif;"
                                                        href="#">{{ $newsVal->title }}</a>
                                                </h5>
                                            </div>
                                        </article>
                                    @endforeach

                                </div>
                            </div>
                            <div class="widget bordered category-block">
                                <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">
                                    Categories</h5>
                                <div class="categories">
                                    <div>
                                        <ul class="list ml-0">
                                            <li style="padding-left: 0;"><a style="font-weight: 400"
                                                    class="font-15 text-black" href="category/uae.html">Dubai <span>
                                                        (72)
                                                    </span></a></li>
                                            <li style="padding-left: 0;"><a style="font-weight: 400"
                                                    class="font-15 text-black" href="category/vat.html">Mumbai <span>
                                                        (46)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endpush
