@extends('front.layouts.app')
@push('content')
    <section class="inner-header divider"
        style="background-image: url('{{asset('front/upload/files/blog-banner.html')}}'); background-size: cover;">
        <div class="container banner_text">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-26">Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  <section>
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('blog', $blog->slug) }}">
                                <article class="post mb-30">
                                    <div class="post-thumb position-relative">
                                        <img src="{{ asset('uploads/blog_images/' . $blog->image) }}"
                                            alt="{{ $blog->title }}" style="height: 238px" class="img-fullwidth"
                                            alt="{{ $blog->title }}">
                                        <span>{{ date('d f Y', strtotime($blog->created_at)) }}</span>
                                    </div>
                                    <div class="post-description border-1px p-20">
                                        <h3 class="post-title font-weight-600 mt-0 mb-15" style="height: 70px"
                                            title="{{ $blog->title }}">
                                            @if (strlen($blog->title) > 50)
                                                {!! substr($blog->title, 0, 50) . '...' !!}
                                            @else
                                                {!! $blog->title !!}
                                            @endif
                                        </h3>
                                        <p class="mb-20 text-black"style="min-height: 48px;">
                                            @if (strlen($blog->description) > 100)
                                                {!! substr($blog->description, 0, 100) . '...' !!}
                                            @else
                                                {!! $blog->description !!}
                                            @endif
                                        </p>
                                        <p style="display: inline-block" class="blog-read-more text-theme-colored2 font-15">
                                            Read
                                            More</p>
                                    </div>
                                </article>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>  --}}


    <section>
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="blog-wrapper" id="blog-wrapper">
                    @include('front.blog.pagination', ['blogs' => $blogs])
                </div>
                <div id="loading" style="display: none;">
                    {{--  <p>Loading more blog...</p>  --}}
                </div>
            </div>
        </div>
    </section>
@endpush

@push('scripts')
    <script>
        var page = 1;

        function loadMoreNews() {
            page++;
            $.ajax({
                    url: '{{ route('blog') }}?page=' + page,
                    type: 'get',
                    beforeSend: function() {
                        $('#loading').show();
                    }
                })
                .done(function(data) {
                    if (data.trim().length == 0) {
                        {{--  $('#loading').html("No more blog to load");  --}}
                        return;
                    }
                    $('#loading').hide();
                    $('#blog-wrapper').append(data);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    // alert('Server error');
                });
        }

        $(window).scroll(function() {
            // alert('s')
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                loadMoreNews();
            }
        });
    </script>
@endpush
