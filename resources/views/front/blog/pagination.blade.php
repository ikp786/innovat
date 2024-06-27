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
                                            @if (strlen($blog->title) > 40)
                                                {!! substr($blog->title, 0, 40) . '...' !!}
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