@extends('front.layouts.app')
@push('content')
    <section class="inner-header divider"
        style="background-image: url('{{ asset('front/upload/files/news.html') }}'); background-size: cover;">
        <div class="container banner_text">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-26">News</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section>
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="news-wrapper">
                    @forelse($news as $key => $value)
                        <a class="text-black" href="{{ route('news', $value->slug) }}">
                            <div class="row mb-20">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative">
                                        <img src="{{ asset('uploads/news_images/' . $value->image) }}"
                                            alt="Oman: Tax Authority urges to submit tax returns by end of this month">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="post-description border-1px p-20">
                                        <h3 class="post-title font-weight-600 mt-0 mb-15 font-Poppins">
                                            {{ $value->title }}</h3>
                                        <p class="text-black">{{ date('d F Y', strtotime($value->created_at)) }}
                                            <!-- <span class="text-theme-colored2">
                                                BMS Auditing Oman </span> -->
                                        </p>
                                        <p class="mb-20 text-black">{{ $value->sort_description }}</p>
                                        <a href="{{ route('news', $value->slug) }}">
                                            <p style="display: inline-block" class="blog-read-more text-theme-colored2 font-15">Read More</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                    <div class="row mb-20">
                        <h4>News Not Found</h4>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section> --}}

    <section>
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="news-wrapper" id="news-wrapper">
                    @include('front.news.pagination', ['news' => $news])
                </div>
                <div id="loading" style="display: none;">
                    <p>Loading more news...</p>
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
                    url: '{{ route('news') }}?page=' + page,
                    type: 'get',
                    beforeSend: function() {
                        $('#loading').show();
                    }
                })
                .done(function(data) {
                    if (data.trim().length == 0) {
                        $('#loading').html("No more news to load");
                        return;
                    }
                    $('#loading').hide();
                    $('#news-wrapper').append(data);
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
