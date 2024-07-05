@extends('front.layouts.app')
@push('styles')
    <style>
        .service-grid {
            text-align: center;
            margin-bottom: 70px;
        }

        .service-grid h2 {
            font-size: 20px;
        }

        .service-grid p {
            font-size: 15px;
            color: #222222;
        }

        .service-grid p a {
            color: #222222 !important;
        }

        .service-grid h2 a {
            color: #e30d12 !important;
        }

        .service-grid img {
            width: 100%;
            max-width: 200px;
            border-radius: 50%;
        }
    </style>
@endpush
@push('content')
    <div class="main-content">
        <section class="inner-header divider"
            style="background-image: url('{{ asset('front/upload/files/services.html') }}'); background-size: cover;">
            <div class="container banner_text pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-theme-colored2 font-26">Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container dynamic_page pt-60 pt-sm-20 pb-30">
                <div class="row">
                    <div class="col-md-12  col-lg-12 page_content">
                        <section>
                            <div class="row">
                                @foreach ($services as $key => $service)
                                    <div class="col-md-3 col-sm-6">
                                        <div class="service-grid"><a href="{{ route('services', $service->slug) }}"
                                                target="_blank" rel="noopener"><img
                                                    src="{{ asset('uploads/service_images/' . $service->image) }}"
                                                    alt="" width="100%" /></a>
                                            <h2 id="h_1505462755821655287011242"><a
                                                    href="{{ route('services', $service->slug) }}" target="_blank"
                                                    rel="noopener">{{ $service->title }}</a></h2>
                                            <p><a href="{{ route('services', $service->slug) }}" target="_blank"
                                                    rel="noopener">
                                                    {{ substr(strip_tags($service->description), 0, 250) }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                {{--  <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="financial-audit-services.html" target="_blank"
                                            rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/financial-audit.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="financial-audit-services.html" target="_blank" rel="noopener">Financial
                                                Audit</a></h2>
                                        <p><a href="financial-audit-services.html" target="_blank" rel="noopener">Our
                                                financial audit add credibility to the performance of a business. Through
                                                financial audit services, a company can unlock valuable and worthy insights
                                                of business.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a title="Internal Audit" href="internal-audit-services.html"
                                            target="_blank" rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/internal-audit.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a title="Internal Audit" href="internal-audit-services.html" target="_blank"
                                                rel="noopener">Internal Audit</a></h2>
                                        <p><a href="internal-audit-services.html" target="_blank" rel="noopener">Our
                                                internal audit will amplify the growth of the company by evaluating and
                                                improving the performance, productivity, and effectiveness of risk
                                                management.&nbsp;</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="accounting-and-bookkeeping-services.html"
                                            target="_blank" rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/accounting.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="accounting-and-bookkeeping-services.html" target="_blank"
                                                rel="noopener">Accounting</a></h2>
                                        <p><a href="accounting-and-bookkeeping-services.html" target="_blank"
                                                rel="noopener">Our experienced and professional chartered accountants&nbsp;
                                                who aim to look into the broad picture of the client&rsquo;s business
                                                despite the size &amp; complexity of the figures.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="vat-services.html" target="_blank"
                                            rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/Vat-services.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="vat-services.html" target="_blank" rel="noopener">VAT Services</a></h2>
                                        <p><a href="vat-services.html" target="_blank" rel="noopener">We are covering all
                                                the elements of VAT such as VAT registration, VAT return, VAT refund, VAT
                                                audit, VAT consultancy and our objective is to ensure VAT compliance as per
                                                regulation.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="excise-tax-services.html" target="_blank"
                                            rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/excise-tax.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="excise-tax-services.html" target="_blank" rel="noopener">Excise Tax</a>
                                        </h2>
                                        <p><a href="excise-tax-services.html" target="_blank" rel="noopener">Our excise tax
                                                experts can help your business reduce its risk, enhance compliance and build
                                                a unified tax strategy. We are offering excise tax registration, excise tax
                                                filing and brandsync.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="corporate-tax-in-the-uae.html" target="_blank"
                                            rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/corporate-tax.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="corporate-tax-in-the-uae.html" target="_blank"
                                                rel="noopener">Corporate Tax</a></h2>
                                        <p><a href="corporate-tax-in-the-uae.html" target="_blank" rel="noopener">Our
                                                experts will help you navigate this new landscape &amp; ensure your business
                                                makes a smooth and seamless transition to Corporate Tax era by offering full
                                                scale CT services.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><img
                                            src="{{ asset('front/upload/files/Services/tax-agent.html') }}"
                                            alt="" width="100%" />
                                        <h2><span style="color: #ed1e24;">Tax Agent</span></h2>
                                        <p>We assist you in better planning of your taxes and differentiating between the
                                            Dos and Don&rsquo;ts. Being a Tax Agent in Dubai, UAE, We ensure VAT compliance
                                            to serve all businesses.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="business-consultancy-services.html"
                                            target="_blank" rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/business-consultancy.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="business-consultancy-services.html" target="_blank"
                                                rel="noopener">Business Consultancy</a></h2>
                                        <p><a href="business-consultancy-services.html" target="_blank"
                                                rel="noopener">Whether you&rsquo;re experiencing challenges with company
                                                culture, internal processes or need a new business strategy to reflect your
                                                envisioned future, we&rsquo;re here to help.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="feasibility-study-services.html" target="_blank"
                                            rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/feasibility-study.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="feasibility-study-services.html" target="_blank"
                                                rel="noopener">Feasibility Study</a></h2>
                                        <p><a href="feasibility-study-services.html" target="_blank" rel="noopener">Our
                                                team of feasibility consultants takes all the key parameters into
                                                consideration while assessing the situation &amp; obtain a deep insight into
                                                macroeconomic industry.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><a href="business-setup-services.html" target="_blank"
                                            rel="noopener"><img
                                                src="{{ asset('front/upload/files/Services/business-setup.html') }}"
                                                alt="" width="100%" /></a>
                                        <h2><a href="business-setup-services.html" target="_blank"
                                                rel="noopener">Business Set up</a></h2>
                                        <p><a href="business-setup-services.html" target="_blank" rel="noopener">We offer
                                                comprehensive company formation services to help investors &amp;
                                                entrepreneurs establish business operations anywhere in the GCC quickly
                                                &amp; in a hassle-free manner.</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-grid"><img
                                            src="{{ asset('front/upload/files/Services/technical-consultancy.html') }}"
                                            alt="" width="100%" />
                                        <h2><span style="color: #ed1e24;">Technology Consultancy</span></h2>
                                        <p>Technology goes beyond implementation. It can be complicated, but we help to
                                            simplify the process and maximise impact along your transformation journey.</p>
                                    </div>
                                </div>  --}}
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endpush
