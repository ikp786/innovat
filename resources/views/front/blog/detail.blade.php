@extends('front.layouts.app')
@push('styles')
@endpush
@push('content')
    <section class="inner-header divider"
        style="background-image: url('{{ asset('uploads/blog_banner_images/' . $blog->banner_image) }}'); background-size: cover;">
        <div class="container banner_text">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-26">{{ $blog->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-12 col-lg-8 page_content">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="post-description pb-0">
                                {!! $blog->description !!}
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 right_side_bar">
                    <a style="color: #fff;" href="{{ route('our-locations', config('constants.locations.dubai.name')) }}">
                        <div class="mb-20" style="text-align: center;background: #006ebb;padding: 7px;">
                            <button
                                class="btn btn-outline-primary sear"style="border-radius: 0px;background: #006ebb;padding: 7px;">Contact
                            </button>
                        </div>
                    </a>
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget bordered mb-20">
                            <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">
                                Latest Blogs</h5>
                            <div class="latest-posts">
                                @foreach ($blogList as $blog)
                                    <article class="post media-post clearfix pb-0 mb-25"
                                        style="font-family: Poppins,sans-serif;">
                                        <div class="post-right">
                                            <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                                    style="font-family: Poppins,sans-serif;"
                                                    href="{{ route('blog', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h5>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget bordered mb-20">
                            <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">
                                Latest
                                News</h5>
                            <div class="latest-posts">
                                @foreach ($newsList as $news)
                                    <article class="post media-post clearfix pb-0 mb-25"
                                        style="font-family: Poppins,sans-serif;">
                                        <div class="post-right">
                                            <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                                    style="font-family: Poppins,sans-serif;"
                                                    href="{{ route('news', $news->slug) }}">
                                                    {{ $news->title }}
                                                </a>
                                            </h5>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush

@push('scripts')
    {!! Html::element('script')->attribute('src', asset('front/js/jsshare.js')) !!}
@endpush
