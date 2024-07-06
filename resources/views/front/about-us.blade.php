@extends('front.layouts.app')
@push('content')
    <section class="inner-header divider"
        style="background-image: url('{{ asset('front/upload/files/About Us.png')}}'); background-size: cover;">
        <div class="container banner_text pb-60">
            <!-- Section Content -->
            <div class="section-content" style="visibility: hidden;">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-26">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container dynamic_page pt-60 pt-sm-20 pb-30">
            <div class="row">
                <div class="col-md-12  col-lg-12 page_content">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('front/upload/files/about.png') }}" loading="lazy"class="img-responsive"alt="">
                        </div>
                        <div class="col-md-7">

                            <h2>ABOUT US</h2>
                            <h5 style="color: #006ebb;">We manage your accounts & operations,
                            while you focus on expanding your business.</h5>
                            <p style="text-align: justify;"><span style="color: #000000; font-size: 13pt;">Innovate Accounting and Auditing LLC was founded by a team of vibrant and
                            dedicated professionals having vast experience in Middle East and India
                            Region. The founding partners / associates / team of the firm have been
                            working in this profession for the last 14 years serving various clients from all
                            the industries.</span></p>
                            <ul class="font-15 text-black mb-10 mt-30">
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px; right:6px;position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Approved Audit Firm in all UAE Free Zones"> 
                                            Highly experinced professional
                                    </p>                                    
                                </li>
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px;right:6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}" alt="Registered Tax Agent">
                                        Technical advanced operations
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px;right:6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="DMCC Approved Auditors">
                                        proactive advices and consulting
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px;right:6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Registered Auditing Firm in all the Banks"> 
                                            cost effective solutions
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px;right:6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Registered Auditing Firm in all the Banks"> 
                                            Accurate & efficient book-keeping
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px;right:6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Registered Auditing Firm in all the Banks"> 
                                            High returns on investments
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px;right:6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Registered Auditing Firm in all the Banks"> 
                                            Easily accessible team
                                    </p>
                                </li>
                                <li>
                                    <p class="text-black hover_red d-flex">
                                        <img width="14" style="top: 6px;right:6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Registered Auditing Firm in all the Banks"> 
                                            Hear & Learn from feedback
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    
                     

                    <section class="layer-overlay overlay-theme-colored-9 mt-30"
                        style="background-image: url('{{ asset('front/upload/files/Main/achievements-cover.jpg') }}'); background-size: cover;">
                        <div class="container pt-90 pb-90">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="mb-40 text-theme-colored2 text-center">Our Achievements</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                        <div class="funfact text-center mt-10">
                                            <div class="odometer-animate-number text-theme-colored2 font-42 font-weight-600 mt-0 "
                                                data-value="5250" data-theme="minimal">100+</div>
                                            <h5 class="text-white text-uppercase mb-0 mt-0"> Happy Clients</h5>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                        <div class="funfact text-center mt-10">
                                            <div class="odometer-animate-number text-theme-colored2 font-42 font-weight-600 mt-0"
                                                data-value="11" data-theme="minimal">17+</div>
                                            <h5 class="text-white text-uppercase mb-0 mt-0"> Years of Experience</h5>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                        <div class="funfact text-center mt-10">
                                            <div class="odometer-animate-number text-theme-colored2 font-42 font-weight-600 mt-0"
                                                data-value="7000" data-theme="minimal">250+</div>
                                            <h5 class="text-white text-uppercase mb-0 mt-0"> Cases completed</h5>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                                        <div class="funfact text-center mt-10">
                                            <div class="odometer-animate-number text-theme-colored2 font-42 font-weight-600 mt-0"
                                                data-value="200" data-theme="minimal">15+</div>
                                            <h5 class="text-white text-uppercase mb-0 mt-0"> Employees</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <h3><span style="font-size: 14pt;"><strong><span style="color: #006EBB;">Our
                                    Mission</span></strong></span></h3>
                    <p style="text-align: justify; color: #000000; font-size: 13pt;">
                        We are committed to delivering exceptional professional services to our clients and community. By embracing continuous improvement and leveraging the latest technologies, we ensure top-tier performance that meets industry standards.
                    </p>
                    <p style="text-align: justify; color: #000000; font-size: 13pt;">
                        Our audit firm boasts a diverse team of skilled auditors and chartered accountants from various regions and backgrounds, fluent in multiple languages. This diversity ensures that our clients receive high-quality service and tangible results every day. 
                        <span  style="color: #006EBB;">Innovate Accounts</span> stands as the premier auditing firm in 
                        <span style="color: #000000;">Dubai</span>, 
                        <span style="color: #000000;">Mumbai</span>. 
                        
                    </p>

                </div>
            </div>
        </div>
    </section>
@endpush
