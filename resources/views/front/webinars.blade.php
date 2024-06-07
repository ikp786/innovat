@extends('front.layouts.app')
@push('content')
    <section class="inner-header divider"
        style="background-image: url({{ asset('front/upload/files/cover/webinars.html') }}); background-size: cover;">
        <div class="container banner_text">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-26">Webinars</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-30 pb-40">
            <div class="section-content">
                <div class="news-wrapper">
                    <h3 class="text-center mb-50" style="font-weight: bold;"><span class="">Join our upcoming
                            webinars</span></h3>
                    <div class="latest-event">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="event-description">
                                    <h3 style="font-weight: 700;">Latest update on Corporate Tax implementation </h3>
                                    <ul style="list-style: disc; padding-left: 20px; color: #222222">
                                        <li>Corporate Tax Law & Executive Regulation 47 elaboration</li>
                                        <li>How the new changes effect your business</li>
                                        <li>Reshaping of accounts in compliance with Law</li>
                                        <li>Compliances</li>
                                    </ul>
                                    <p class="event-time">
                                        <span><img width="20" src="{{ asset('front/upload/icons/calender.svg') }}"
                                                alt=""> DATE: 17 Dec 2022 - Saturday</span>
                                        <span><img width="20" src="{{ asset('front/upload/icons/clock.svg') }}"
                                                alt=""> TIME: 10:00 AM to 11:00 AM</span>
                                        <span><img width="20" src="{{ asset('front/upload/icons/location.svg') }}"
                                                alt=""> LOCATION: Dubai, UAE</span>
                                    </p>
                                    <hr style="background-color: #e30a13; height: 5px">
                                    <div class="speakers">
                                        <h5> SPEAKERS: </h5>
                                        <p>
                                            <img width="20" src="{{ asset('front/upload/icons/user.svg') }}"
                                                alt="">
                                            <strong>Shehinsha KP ACCA CA MBA M.Com - CEO BMS Global
                                                -The Strategist</strong>
                                        </p>
                                        <p>
                                            <img width="20" src="{{ asset('front/upload/icons/user.svg') }}"
                                                alt="">
                                            <strong>Zulfiqar Rafique - Sr. Tax Manager- 15 years of experience in
                                                dealing Direct & Indirect taxes</strong>
                                        </p>
                                        <p>
                                            <img width="20" src="{{ asset('front/upload/icons/user.svg') }}"
                                                alt="">
                                            <strong>Gouri Nandan CA - Assistant Tax Manager </strong>
                                        </p>
                                        <p>
                                            <img width="20" src="{{ asset('front/upload/icons/user.svg') }}"
                                                alt="">
                                            <strong>Athira Geeta ACCA & M.Com - 4+ Years of
                                                experience handling US & UK taxes</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 align-middle">
                                <div>
                                    <a target="blank" href="#">
                                        <img src="{{ asset('front/upload/files/events/uae-corporate-tax-webinar.jpg') }}"
                                            class="wp-post-image" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
