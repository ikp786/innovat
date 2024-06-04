@forelse($news as $key => $value)
    <a class="text-black" href="{{ route('news', $value->slug) }}">
        <div class="row mb-20">
            <div class="col-md-4">
                <div class="post-thumb position-relative">
                    <img src="{{ asset('uploads/news_images/' . $value->image) }}" alt="{{ $value->title }}">
                </div>
            </div>
            <div class="col-md-8">
                <div class="post-description border-1px p-20">
                    <h3 class="post-title font-weight-600 mt-0 mb-15 font-Poppins">{{ $value->title }}</h3>
                    <p class="text-black">{{ date('d F Y', strtotime($value->created_at)) }}</p>
                    <p class="mb-20 text-black">{{ $value->sort_description }}</p>
                    <a href="{{ route('news', $value->slug) }}">
                        <p style="display: inline-block" class="blog-read-more text-theme-colored2 font-15">Read More
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </a>
@empty
    {{-- <div class="row mb-20">
        <h4>News Not Found</h4>
    </div> --}}
@endforelse
