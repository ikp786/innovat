@extends('front.layouts.app')
@push('styles')
    <style>
        @media (min-width: 991px) {
		.right_side_bar {
			padding-left: 25px;
		}
	}

	.page_content ol {
		list-style: decimal;
	}

	.page_content ul {
		list-style: disc;
	}

	ol, ul {
		margin-left: 25px;
	}

	.page_content ul > li::marker, .page_content ol > li::marker {
		font-family: 'Poppins', sans-serif;
		color: #222222;
	}

	.page_content a {
		color: #0064ff;
	}

	.bordered {
		border: 1px solid #dedede;
		padding: 25px;
	}

	@media (max-width: 990px) {
		.right_side_bar {
			padding-top: 15px;
		}
	}

	@media (max-width: 600px) {
		.category-block {
			display: none;
		}
	}

	.search_input {
		padding-top: 14px !important;
		color: #000 !important;
	}

	.small-form {
		background-color: transparent;
		padding: 8px 17px;
		font-size: 13px;
		font-weight: 500;
		width: 100%;
		color: #000 !important;
		border: 1px solid #848484;
		margin-bottom: 10px;
	}
	p{
		color: #222222;
	}

	.small-submit {
		background-color: #ed1e24;
		color: #ffffff;
		border: none;
		padding: 5px 15px;
	}
	.social_share{
		background-color: #ed1e24;
		display: inline-block;
		width: 25px;
		height: 25px;
		text-align: center;
		cursor: pointer;
		border-radius: 50%;
		padding-top: 1px;
		margin-right: 6px;
	}
	.social_share:hover{
		background-color: #222222;
	}
</style>
    </style>
@endpush
@push('content')
    <section>
        <div class="container mt-30 mb-30 pt-30 pt-sm-0 pb-30">
            <div class="row">
                <div class="col-md-12 col-lg-8 page_content">
                    <div class="blog-posts single-post">
                        <h1 class="text-black font-Poppins text-justify mt-0 font-30 font-weight-700">
                            {{ $news->title }}
                        </h1>
                        {{-- <p class="text-black"><b>By BMS AUDITING</b></p> --}}
                        <div class="text-black">
                            <div class="social_share"
                                onclick="facebook_share({{ route('news', $news->slug) }})">
                                <img src="{{ asset('front/upload/icons/facebook.svg')}}" width="15" height="15"
                                    alt="share in facebook">
                            </div>
                            <div class="social_share"
                                onclick="twitter_share({{ route('news', $news->slug) }})">
                                <img src="{{ asset('front/upload/icons/twitter.svg')}}" width="15" height="15" alt="share in twitter">
                            </div>
                            <div class="social_share"
                                onclick="linkedin_share({{ route('news', $news->slug) }})">
                                <img src="{{ asset('front/upload/icons/linkedin.svg')}}" width="15" height="15"
                                    alt="share in linkedin">
                            </div>
                            <a class="social_share"
                                href="mailto:?subject=UAE Clarifies Corporate Tax Registration and Application for Exemption&amp;body=Check out this news : {{ route('news', $news->slug) }}">
                                <img src="{{ asset('front/upload/icons/mail-filled.svg')}}" width="15" height="15"
                                    alt="share in email">
                            </a>
                            <a class="social_share"
                                href="whatsapp://send?text={{ route('news', $news->slug) }}"
                                data-action="share/whatsapp/share">
                                <img src="{{ asset('front/upload/icons/whatsapp-filled.svg')}}" width="15" height="15"
                                    alt="share in whatsapp">
                            </a>
                        </div>

                        <p class="text-black text-justify font-20 font-weight-600 pb-10 pt-10">
                            {{$news->sort_description}}
                        </p>
                        <img src="{{ asset('uploads/news_images/' . $news->image) }}"
                            alt="{{ $news->title }}">
                            <div class="mt-20">
                                {!! $news->description !!}
                            </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 sidebar right_side_bar">
                    <div class="widget contact-form-wrapper mb-20 bordered">
                        <form id="smallContactform" class="mb-0" method="post"
                            action="https://www.bmsauditing.com/info/search_results" style="padding: 0px;">
                            <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">Get
                                Free Consultation</h5>
                            <input class="small-form" type="text" name="fullname" placeholder="Name">
                            <input class="small-form" type="text" name="email" placeholder="Email Address">
                            <input class="small-form" type="text" name="mobile" placeholder="Mobile Number">
                            <textarea class="small-form" placeholder="Message" name="message" rows="3"></textarea>
                            <input id="small_contact_submit_bth" class="small-submit" type="submit">
                            <div class="pt-10 text-black" id="small_cnt_status"></div>
                        </form>
                    </div>
                    <div class="widget bordered mb-20">
                        <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">Latest
                            Blogs</h5>
                        <div class="latest-posts">
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="../blogs/the-power-of-feasibility-studies-in-mitigating-investment-risks.html">Decoding
                                            Success: The Power of Feasibility Studies in Mitigating Investment Risks</a>
                                    </h5>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="../blogs/uae-aed-10000-penalty-late-corporate-tax-registration.html">UAE
                                            Introduces AED 10,000 Penalty for Late Corporate Tax Registration: Insights from
                                            BMS Auditing</a>
                                    </h5>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="../blogs/decoding-ZATCAs-proposed-vat-amendments.html">Decoding ZATCA's
                                            Proposed VAT Amendments: Your Roadmap to Retroactive Recovery with BMS Auditing
                                            Insight</a>
                                    </h5>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="../blogs/complete-guide-to-joint-venture-planning.html">A Complete Guide
                                            to Joint Venture Planning</a>
                                    </h5>
                                </div>
                            </article>

                        </div>
                    </div>
                    <div class="widget bordered mb-20">
                        <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">Latest
                            News</h5>
                        <div class="latest-posts">
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="oman-tax-authority-urges-to-submit-tax-returns.html">Oman: Tax Authority
                                            urges to submit tax returns by end of this month</a>
                                    </h5>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="oman-signs-double-tax-treaty-with-russia-to-avoid-double-taxation.html">Oman
                                            Signs Double Tax Treaty with Russia</a>
                                    </h5>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="uae-clarifies-corporate-tax-on-individuals-doing-a-business-activity.html">UAE
                                            clarifies corporate tax on Residents undertaking a business or business
                                            activity</a>
                                    </h5>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-25" style="font-family: Poppins,sans-serif;">
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                            style="font-family: Poppins,sans-serif;"
                                            href="uae-clarifies-corporate-tax-registration-and-application-for-exemption.html">UAE
                                            Clarifies Corporate Tax Registration and Application for Exemption</a>
                                    </h5>
                                </div>
                            </article>

                        </div>
                    </div>
                    <div class="widget bordered category-block" style="display: none">
                        <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">
                            Categories</h5>
                        <div class="categories">
                            <ul class="list ml-0">
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/audit.html">Audit <span> (2)</span></a></li>
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/business.html">Business <span> (1)</span></a></li>
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/corporate-tax.html">Corporate Tax <span> (8)</span></a></li>
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/dubai.html">Dubai <span> (1)</span></a></li>
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/taxations.html">Taxations <span> (1)</span></a></li>
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/uae.html">UAE <span> (3)</span></a></li>
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/vat.html">VAT <span> (3)</span></a></li>
                                <li style="padding-left: 0;"><a style="font-weight: 400" class="font-15 text-black"
                                        href="category/vat-in-oman.html">VAT in Oman <span> (1)</span></a></li>
                            </ul>
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