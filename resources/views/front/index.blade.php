@extends('front.layouts.app')
@push('content')
    <div class="main-content">
        <section class="splide home_slider" id="home_slider" aria-label="Home slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img width="100%" height="100%" loading="lazy"
                            src="{{ asset('front/upload/files/slider/tax.jpg') }}" alt="Corporate Tax in UAE" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">Corporate Tax in UAE</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">The Ministry of Finance has
                                announced a 9% federal corporate tax on business profits in the UAE, applicable to earnings
                                exceeding AED 375,000. Our dedicated team of corporate tax advisors is ready to assist you
                                with any questions and provide the necessary support regarding corporate tax compliance.

                            </p>
                            <a href="#" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Corporate Tax in UAE</a>
                            <div>
                                <a href="#contact_form" class="btn btn-dark btn-theme-colored3 btn-xl mr-10 thcolor">Book
                                    Free
                                    Corporate Tax Consultancy</a>
                            </div>
                        </div>

                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" style="object-position: right"
                            src="{{ asset('front/upload/files/slider/desktop/icv5e1f.html?v=2') }}"
                            alt="audit and assurance" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">ICV</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">As an ADNOC-approved ICV
                                Certification body in the UAE, we are dedicated to offering dependable ICV Audit and
                                Accounting services. Our goal is to assist businesses in obtaining ICV certification,
                                ensuring a competitive advantage in the market.</p>
                            <a href="#" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">ICV
                                Certificate</a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" style="object-position: right"
                            src="{{ asset('front/upload/files/slider/desktop/aml-compliance5e1f.html?v=2') }}"
                            alt="audit and assurance" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">AML Compliance</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">Ensuring AML compliance is
                                essential for businesses to fulfill their regulatory obligations and avoid penalties.
                                Through IDENFO direct verification, we provide reliable and high-quality AML Compliance
                                Services, delivering effective solutions for your needs!</p>
                            <a href="#" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">AML Compliance</a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" style="object-position: right"
                            src="{{ asset('front/upload/files/slider/desktop/audit-assurance5e1f.html?v=2') }}"
                            alt="audit and assurance" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">Audit & Assurance</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">Our audit procedures are customized
                                to meet the unique operations and reporting requirements of each business and industry.
                                Through our audit and assurance services, we provide valuable insights and promote
                                transparency.</p>
                            <a href="#" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Audit &
                                Assurance</a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" loading="lazy"
                            src="{{ asset('front/upload/files/slider/desktop/accounting-bookkeeping30f4.html?v=3') }}"
                            alt="Accounting & Bookkeeping" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">Accounting & Bookkeeping</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">Our professional chartered
                                accountants take a comprehensive view of our clients' businesses, regardless of size or
                                complexity. We assist clients in meeting their compliance obligations by adhering to
                                international standards.</p>
                            <a href="accounting-and-bookkeeping-services.html"
                                class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Accounting & Bookkeeping</a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" style="object-position: bottom right;" loading="lazy"
                            src="{{ asset('front/upload/files/slider/desktop/vat-services1bce.html?v=6') }}"
                            alt="VAT Services" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">VAT Services</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">VAT regulations can be intricate,
                                and their implications are often overlooked. Successful VAT implementation requires
                                meticulous planning. Our dedicated VAT team will guide you through every stage of the
                                implementation process and beyond.</p>
                            <a href="vat-services.html" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">VAT
                                Services</a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" loading="lazy"
                            src="{{ asset('front/upload/files/slider/desktop/tax-compliance3860.html?v=1') }}"
                            alt="Tax & Compliance" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">Tax & Compliance</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">Our globally coordinated tax
                                specialists provide integrated services across all tax disciplines to help you succeed in a
                                rapidly changing environment. We address diverse business needs and assist organizations in
                                aligning their operations to be more tax efficient.

                            </p>
                            <a href="tax-compliance-services.html" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Tax
                                & Compliance</a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" loading="lazy"
                            src="{{ asset('front/upload/files/slider/desktop/business-cosultancy5e1f.html?v=2') }}"
                            alt="business consultancy" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">Business Consultancy</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">Our business consultants are
                                expert practitioners who not only provide advice but also actively participate in delivering
                                solutions. We help you make better decisions, reduce costs, and build a more effective
                                organization, enabling your business to reach new heights.</p>
                            <a href="business-consultancy-services.html"
                                class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Business Consultancy</a>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img width="100%" height="100%" loading="lazy"
                            src="{{ asset('front/upload/files/slider/desktop/excise-tax3860.html?v=1') }}"
                            alt="Corporate Tax in UAE" />
                        <div class="home_slider_text">
                            <h2><span class="text-theme-colored2">Excise Tax Services</span></h2>
                            <p class="text-black text-justify" style="max-width: 500px;">The UAE government has
                                implemented an excise tax on carbonated drinks, tobacco products, and energy drinks. Our
                                dedicated excise tax team, with extensive experience, can assist you with excise tax
                                registration and filing.</p>
                            <a href="excise-tax-services.html" class="btn btn-dark btn-theme-colored2 btn-xl mr-10">Excise
                                Tax Services</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="clients bg-white" style="height: 90px; overflow-y: hidden">
            <div class="container pt-10 pb-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="splide country_contact" id="country_contact" role="group"
                            aria-label="country contact slide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    {{-- <li class="splide__slide">
                                        <div class="item getintouch">
                                            <h3 class="font-18 mt-10 mb-10"><a style="color: #006EBB; font-weight: bold;"
                                                    href="#">{{ ucfirst(config('constants.locations.dubai.name')) }}
                                                </a>
                                            </h3>
                                            <a href="tel:+971 52 940 2047" class="text-black">{{ ucfirst(config('constants.locations.dubai.phone')) }}</a>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item getintouch">
                                            <h3 class="font-18 mt-10 mb-10"><a style="color: #006EBB; font-weight: bold;"
                                                    href="#">{{ ucfirst(config('constants.locations.mumbai.name')) }}</a>
                                            </h3>
                                            <a href="tel:+971 52 997 4124" class="text-black">{{ ucfirst(config('constants.locations.dubai.phone')) }}</a>
                                        </div>
                                    </li> --}}

                                    @foreach (config('constants.locations') as $locationKey => $location)
                                        <li class="splide__slide">
                                            <div class="item getintouch">
                                                <h3 class="font-18 mt-10 mb-10">
                                                    <a style="color: #006EBB; font-weight: bold;" href="#">
                                                        {{ ucfirst($location['name']) }}
                                                    </a>
                                                </h3>
                                                <a href="tel:{{ $location['phone'] }}"
                                                    class="text-black">{{ $location['phone'] }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="bg-white" style="padding-top: 20px;">
            <div class="container pt-0 pb-20">
                <div class="row">
                    <div class="section-title mb-50">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2  text-center">
                                <h4 class="title text-uppercase" style="font-size: 2rem;font-weight: bold;">Our
                                    <span class="text-theme-colored2">Services</span>
                                </h4>
                                <p class="font-15 text-black">Innovate Accounts is a premier accounting and audit firm
                                    offering comprehensive services including audit, accounting, tax, and consulting. We
                                    strive to address our clients' most complex challenges and contribute to creating a
                                    better working world for everyone.</p>
                                <div class="line-bottom-centered"></div>
                            </div>
                        </div>
                    </div>

                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                @forelse($services as $key => $service)
                                    <div class="col-lg-3 col-md-4 col-sm-6 service_grid">
                                        <a href="{{ route('services', $service->slug) }}">
                                            <div
                                                class="service-box text-center pb-30 pt-30 mb-30 bg-silver-light hover-box-shadow">
                                                <i><img src="{{ asset('uploads/service_icons/' . $service->icon) }}"
                                                        width="50" height="50" loading="lazy" alt="Audit"></i>
                                                <h3 class="media-heading heading font-weight-600 pt-15 font-19">
                                                    {{ $service->title }}
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <h2>Service are not avaible</h2>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section style="background-color: #f2f3f7;">
            <div class="container purpose-container">
                <div class="section-content">
                    <h1 style="font-size: 24px;">Accounting and Audit Firm in Dubai, Mumbai
                        | <span class="text-theme-colored2">Innovate Accounts</span></h1>
                    <div class="row">
                        <div class="col-md-5 purpose_img">
                            <img src="{{ asset('front/upload/files/common/our-purpose.html') }}" loading="lazy"
                                style="min-height: 420px; object-fit: cover; width: 100%;" width="100%" height="590"
                                alt="our purpose">
                        </div>
                        <div class="col-md-7">
                            <p class="mb-0 font-18" style="color: #222222;">OUR PURPOSE</p>
                            <h5 class="text-uppercase title mt-0 text-black" style="font-size: 2rem;font-weight: bold;">
                                Building your <span class="text-theme-colored2">Business</span> Dreams</h5>
                            <div class="line-bottom-theme-colored2 mb-10"></div>
                            <p class="text-black font-15 pb-10 text-justify">Innovate Accounts is the best
                                <b>Accounting and
                                    Audit Firm in Dubai Mumbai
                                </b>.
                                Our services include Accounting Bookkeeping VAT and
                                more.
                            </p>
                            <p class="text-black font-15 pb-10 text-justify">Innovate Accounts is dedicated to delivering service excellence and quality in all our endeavors. We consistently bring our best to our clients, earning their trust through our high standards of professional and personal conduct.
                            </p>
                            <p class="text-black font-15 pb-10 text-justify">At Innovate Accounts, our mission is to nurture your business aspirations. Our services and insights are crafted to </p>
                            <ul class="font-15 text-black">
                                <li>
                                    <a class="text-black hover_red d-flex" href="audit-in-free-zones-uae.html">
                                        <img width="14" style="top: 6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Approved Audit Firm in all UAE Free Zones"> Approved Audit Firm in
                                        all UAE
                                        Free Zones
                                    </a>
                                </li>
                                <li>
                                    <a class="text-black hover_red d-flex" href="tax-agent-in-uae.html">
                                        <img width="14" style="top: 6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}" alt="Registered Tax Agent">
                                        Registered Tax Agent
                                    </a>
                                </li>
                                <li>
                                    <a class="text-black hover_red d-flex" href="dmcc-approved-auditors.html">
                                        <img width="14" style="top: 6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="DMCC Approved Auditors">
                                        DMCC Approved Auditors
                                    </a>
                                </li>
                                <li>
                                    <a class="text-black hover_red d-flex"
                                        href="blogs/approved-auditors-in-uae-banks.html">
                                        <img width="14" style="top: 6px; position: relative" height="14"
                                            src="{{ asset('front/upload/icons/check.svg') }}"
                                            alt="Registered Auditing Firm in all the Banks"> Approved Auditors in
                                        UAE Banks
                                    </a>
                                </li>
                            </ul>
                            <a class="btn btn-theme-colored2 pt-10 pb-10 mt-10" href=" {{route('about-us')}} ">More
                                about Innovate Accounts</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div style="width: 100vw;background-color: #006EBB; padding: 30px 0;">
            <div class="container">
                <div class="row" style="display: flex;align-items: end;">
                    <div class="col-md-7 col-sm-7">
                        <img src="{{ asset('front/upload/files/home/latest-insights.html') }}" loading="lazy"
                            width="100%" height="100%" alt="Innovate Accounts insights">
                    </div>
                    <div class="col-md-5 col-sm-5 insights-link-wrapper">
                        <a href="blogs.html" style="position: relative;bottom: 40px;color: #ffdb8e;"
                            class="insignts-banner-learn-more font-15">Read More Blogs</a>
                    </div>
                </div>
            </div>
        </div>

        <section id="blog">
            <div class="container pb-sm-40 pt-0">
                <div class="section-content pt-50">
                    <div class="splide" id="blog_list" role="group" aria-label="blog list">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <a href="blogs/the-power-of-feasibility-studies-in-mitigating-investment-risks.html">
                                        <div class="item">
                                            <article class="post">
                                                <div class="post-thumb position-relative">
                                                    <img src="{{ asset('front/upload/files/the-power-of-feasibility-studies-in-mitigating-investment-risks.png') }}"
                                                        width="100%" height="238" loading="lazy"
                                                        class="img-fullwidth"
                                                        alt="Decoding Success: The Power of Feasibility Studies in Mitigating Investment Risks">
                                                    <span>03 Apr 2024</span>
                                                </div>
                                                <div class="post-description border-1px p-20">
                                                    <h3 class="post-title font-weight-600 mt-0 mb-15" style="height: 70px"
                                                        title="Decoding Success: The Power of Feasibility Studies in Mitigating Investment Risks">
                                                        Decoding Success: The Power of Feas...</h3>
                                                    <p class="mb-20 text-black">The Power of Feasibility Studies in
                                                        Miti...</p>
                                                    <p style="display: inline-block"
                                                        class="blog-read-more text-theme-colored2 font-15 text-black">
                                                        Read
                                                        More</p>
                                                </div>
                                            </article>
                                        </div>
                                    </a>
                                </li>
                                {{-- <li class="splide__slide">
                                    <a href="blogs/uae-aed-10000-penalty-late-corporate-tax-registration.html">
                                        <div class="item">
                                            <article class="post">
                                                <div class="post-thumb position-relative">
                                                    <img src="{{ asset('front/upload/files/uae-aed-10000-penalty-late-corporate-tax-registration-feature.png') }}"
                                                        width="100%" height="238" loading="lazy"
                                                        class="img-fullwidth"
                                                        alt="UAE Introduces AED 10,000 Penalty for Late Corporate Tax Registration: Insights from Innovate Accounts">
                                                    <span>29 Feb 2024</span>
                                                </div>
                                                <div class="post-description border-1px p-20">
                                                    <h3 class="post-title font-weight-600 mt-0 mb-15" style="height: 70px"
                                                        title="UAE Introduces AED 10,000 Penalty for Late Corporate Tax Registration: Insights from Innovate Accounts">
                                                        UAE Introduces AED 10,000 Penalty f...</h3>
                                                    <p class="mb-20 text-black">UAE Corporate Tax Registration and
                                                        Penal...</p>
                                                    <p style="display: inline-block"
                                                        class="blog-read-more text-theme-colored2 font-15 text-black">
                                                        Read
                                                        More</p>
                                                </div>
                                            </article>
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="blogs/decoding-ZATCAs-proposed-vat-amendments.html">
                                        <div class="item">
                                            <article class="post">
                                                <div class="post-thumb position-relative">
                                                    <img src="{{ asset('front/upload/files/decoding-ZATCAs-proposed-vat-amendments.png') }}"
                                                        width="100%" height="238" loading="lazy"
                                                        class="img-fullwidth"
                                                        alt="Decoding ZATCA's Proposed VAT Amendments: Your Roadmap to Retroactive Recovery with Innovate Accounts Insight">
                                                    <span>03 Feb 2024</span>
                                                </div>
                                                <div class="post-description border-1px p-20">
                                                    <h3 class="post-title font-weight-600 mt-0 mb-15" style="height: 70px"
                                                        title="Decoding ZATCA's Proposed VAT Amendments: Your Roadmap to Retroactive Recovery with Innovate Accounts Insight">
                                                        Decoding ZATCA's Proposed VAT Amend...</h3>
                                                    <p class="mb-20 text-black">A proposed change regarding VAT
                                                        recovery...</p>
                                                    <p style="display: inline-block"
                                                        class="blog-read-more text-theme-colored2 font-15 text-black">
                                                        Read
                                                        More</p>
                                                </div>
                                            </article>
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="blogs/complete-guide-to-joint-venture-planning.html">
                                        <div class="item">
                                            <article class="post">
                                                <div class="post-thumb position-relative">
                                                    <img src="{{ asset('front/upload/files/complete-guide-to-joint-venture-planning.png') }}"
                                                        width="100%" height="238" loading="lazy"
                                                        class="img-fullwidth"
                                                        alt="A Complete Guide to Joint Venture Planning">
                                                    <span>02 Feb 2024</span>
                                                </div>
                                                <div class="post-description border-1px p-20">
                                                    <h3 class="post-title font-weight-600 mt-0 mb-15" style="height: 70px"
                                                        title="A Complete Guide to Joint Venture Planning">A
                                                        Complete Guide to Joint Venture P...</h3>
                                                    <p class="mb-20 text-black">Employing Innovate Accounts
                                                        Services to Unloc...</p>
                                                    <p style="display: inline-block"
                                                        class="blog-read-more text-theme-colored2 font-15 text-black">
                                                        Read
                                                        More</p>
                                                </div>
                                            </article>
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="blogs/establishing-100-percentage-foreign-owned-company-in-saudi-arabia.html">
                                        <div class="item">
                                            <article class="post">
                                                <div class="post-thumb position-relative">
                                                    <img src="{{ asset('front/upload/files/establishing-a-100-foreign-Owned-Company-in-Saudi-Arabia.png') }}"
                                                        width="100%" height="238" loading="lazy"
                                                        class="img-fullwidth"
                                                        alt="Unlocking Opportunities: Establishing a 100% Foreign-Owned Company in Saudi Arabia">
                                                    <span>01 Feb 2024</span>
                                                </div>
                                                <div class="post-description border-1px p-20">
                                                    <h3 class="post-title font-weight-600 mt-0 mb-15" style="height: 70px"
                                                        title="Unlocking Opportunities: Establishing a 100% Foreign-Owned Company in Saudi Arabia">
                                                        Unlocking Opportunities: Establishi...</h3>
                                                    <p class="mb-20 text-black">Establishing a 100% Foreign-Owned
                                                        Compan...</p>
                                                    <p style="display: inline-block"
                                                        class="blog-read-more text-theme-colored2 font-15 text-black">
                                                        Read
                                                        More</p>
                                                </div>
                                            </article>
                                        </div>
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="blogs/steps-to-obtaining-misa-license-in-saudi-arabia.html">
                                        <div class="item">
                                            <article class="post">
                                                <div class="post-thumb position-relative">
                                                    <img src="{{ asset('front/upload/files/Blog/steps-to-obtaining-misa-license-in-saudi-arabia.html') }}"
                                                        width="100%" height="238" loading="lazy"
                                                        class="img-fullwidth"
                                                        alt="Mastering MISA: Unleashing Opportunities with Innovate Accounts's Business Setup Mastery">
                                                    <span>30 Jan 2024</span>
                                                </div>
                                                <div class="post-description border-1px p-20">
                                                    <h3 class="post-title font-weight-600 mt-0 mb-15" style="height: 70px"
                                                        title="Mastering MISA: Unleashing Opportunities with Innovate Accounts's Business Setup Mastery">
                                                        Mastering MISA: Unleashing Opportun...</h3>
                                                    <p class="mb-20 text-black">Guide to Business Setup in Saudi
                                                        Arabia ...</p>
                                                    <p style="display: inline-block"
                                                        class="blog-read-more text-theme-colored2 font-15 text-black">
                                                        Read
                                                        More</p>
                                                </div>
                                            </article>
                                        </div>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="brochure_download" style="background-color: #006EBB; padding: 30px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="{{ asset('front/upload/files/home/tag_bms3860.html') }}" loading="lazy" width="100%"
                            height="100%" alt="Innovate Accounts Brochure">
                        <a class="down_brochure_btn"
                            href="{{ asset('front/upload/files/downloads/Innovate Accounts-Profile-2022.pdf') }}"
                            target="_blank">Download Brochure &nbsp;
                            <img src="{{ asset('front/upload/files/home/download.svg') }}" loading="lazy" width="20"
                                alt="Innovate Accounts brochure download">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('front/upload/files/home/bms-auditing-brochure.html') }}" loading="lazy"
                            width="100%" style="max-width: 500px;" height="100%"
                            alt="Innovate Accounts brochure preview">
                    </div>
                </div>
            </div>
        </div>

        <section class="layer-overlay overlay-theme-colored-9" id="quick_enq_block">
            <div class="container-fluid pt-0 pb-0">
                <div class="row bg-img-cover"
                    style="background-image: url('{{ asset('front/images/consult-banner2.html') }}')">
                    <div class="col-sm-6 col-md-6 pull-right home-contact-form xs-pull-none"
                        style="background-color: rgb(37, 42, 49) !important;">
                        <div class="home-form-container">
                            <div class="mt-sm-40">
                                <div id="response">We will get back to you soon. Thank you!</div>
                                <h3 class="text-white line-bottom-theme-colored2 font-30">Get a Free Consultation
                                </h3>
                                <form id="contact_form" name="contact_form" class="reservation-form form-transparent">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-20">
                                                <input placeholder="Full Name" id="fullname" name="fullname"
                                                    class="form-control captchaValid" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-20">
                                                <input placeholder="Contact Number" id="landline" name="landline"
                                                    class="form-control captchaValid" type="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-20">
                                                <div class="styled-select">
                                                    <select id="country" name="country"
                                                        class="form-control captchaValid">
                                                        <option value="">Country</option>
                                                        <option value="1">Dubai</option>
                                                        <option value="2">Mumbai</option>
                                                    </select>
                                                    <i class="fa fa-caret-down"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group mb-20">
                                                <input placeholder="Email-id" id="email" name="email"
                                                    class="form-control captchaValid" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea id="message" name="message" class="form-control captchaValid" rows="5"
                                                    placeholder="Enter Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="g-recaptcha"
                                                data-sitekey="6LdR4PcfAAAAACxvYx2wGVzGsq3pcWwhxfZ_ruiL"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0 mt-0">
                                                <button type="submit" class="btn btn-theme-colored2 pt-10 pb-10 mt-10"
                                                    id="contact_form_btn">Submit Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 p-0">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container pb-50 pb-sm-0 pt-40">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="font-30 font-weight-500 line-bottom-theme-colored2 mt-0 mb-20 mt-sm-0">
                                Client's <span class="text-theme-colored2">Testimonials</span></h3>

                            <div class="splide testimonials" id="testimonials" role="group" aria-label="testimonials">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <div class="testimonial">
                                                <div class="comment bg-lighter p-20">
                                                    <p class="font-15 text-black">Excellent team of professionals,
                                                        We
                                                        provide you utmost analysis of financial statements and
                                                        reviewing
                                                        fund flows and cash flow statements.</p>
                                                </div>
                                                <div class="content mt-30">
                                                    <div class="mr-20 mt-0">
                                                        <h4 class="author text-theme-colored2 font-weight-600 pt-5 mb-0">
                                                            Mashal ALZarooni</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="testimonial">
                                                <div class="comment bg-lighter p-20">
                                                    <p class="font-15 text-black">Our company has been working
                                                        with them
                                                        from last year and till date. They know what they're dealing
                                                        with,
                                                        and handled our inquiry with efficiency and effectiveness. I
                                                        will
                                                        recommend them for sure.</p>
                                                </div>
                                                <div class="content mt-30">
                                                    <div class="mr-20 mt-0">
                                                        <h4 class="author text-theme-colored2 font-weight-600 pt-5 mb-0">
                                                            Jer
                                                            Rmr Gmz</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="testimonial">
                                                <div class="comment bg-lighter p-20">
                                                    <p class="font-15 text-black">Best auditing firm. Had a good
                                                        experience
                                                        and with polite customer experience. Suggest you guys to
                                                        check with
                                                        them. Happy with the service. Good job guys</p>
                                                </div>
                                                <div class="content mt-30">
                                                    <div class="mr-20 mt-0">
                                                        <h4 class="author text-theme-colored2 font-weight-600 pt-5 mb-0">
                                                            Arun Kumar</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="testimonial">
                                                <div class="comment bg-lighter p-20">
                                                    <p class="font-15 text-black">Great audit firms in UAE!! :)
                                                        Innovate Accounts services
                                                        have an affordable fees. Mr. Ali helped me for every Qtr VAT
                                                        Return
                                                        Filing and he's team esp. Mr. Selvan easy to deal. God Bless
                                                        to
                                                        everyone!!!</p>
                                                </div>
                                                <div class="content mt-30">
                                                    <div class="mr-20 mt-0">
                                                        <h4 class="author text-theme-colored2 font-weight-600 pt-5 mb-0">
                                                            Euniel Pante</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .clients img {
                object-fit: contain;
            }
        </style>
        <section class="clients">
            <div class="container pt-0 pb-40">
                <div class="row">
                    <div class="col-md-12">
                        <div class="splide client_list" id="client_list" role="group" aria-label="client list">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/1.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">

                                        <div class="item"><img src="{{ asset('front/images/clients/2.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/bentley.html') }}"
                                                height="99" width="190" loading="lazy" alt="bentley">
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/careem.html') }}"
                                                height="99" width="190" loading="lazy" alt="careem">
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/3.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/4.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/5.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/6.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/7.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/8.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/9.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/10.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/11.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/12.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/13.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="item"><img src="{{ asset('front/images/clients/14.html') }}"
                                                height="99" width="190" loading="lazy"
                                                alt="Innovate Accounts clients"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endpush
