@extends('front.layouts.app')
@push('content')
<section class="inner-header divider"
style="background-image: url('{{asset('front/upload/files/Contact Us.png')}}'); background-size: cover;">
<div class="container banner_text">
    <!-- Section Content -->
    <div class="section-content" style="visibility: hidden;">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-theme-colored2 font-26">Contact us:</h1>
                <h6 class="text-white">Your Trusted partner for Business and According Services</h6>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <div class="container" style="padding-top: 50px">
        <div class="section-content">
            <div class="row  ess_block">
                <div class="country_part" id="country_9">
                    <div class="col-md-6 contact_page_details">
                        <div class="volunteer- ess bg-light" style="min-height: 580px; padding: 20px;">
                            <table>
                                <tr class="mb-20">
                                    <td class="pb-10"><img src="{{ asset('front/upload/icons/mail-red.svg') }}"
                                        style="width: 25px;max-width: 25px;" alt="Innovate Accounts Email"></td>
                                        <td class="pb-10">
                                            <p class="m-0 pl-10"><a style="color: #006EBB"
                                                href="mailto:teams@innovateaccounts.com">teams@innovateaccounts.com</a>
                                            </p>
                                            <p class="m-0 pl-10"><a style="color: #006EBB"
                                                href="mailto:Innovate.team@outlook.com">Innovate.team@outlook.com</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-10"><img src="{{ asset('front/upload/icons/mobile-red.svg') }}"
                                            style="width: 27px;max-width: 27px;" alt="Innovate Accounts Mobile"></td>
                                            <td class="pb-10">
                                                <p class="m-0 pl-10"><a href="tel:{{config('constants.locations.dubai.phone')}}">{{config('constants.locations.dubai.phone')}}</a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pb-10"><img src="{{ asset('front/upload/icons/whatsapp-red.svg') }}"
                                                style="width: 23px;max-width: 23px;" alt="Innovate Accounts WhatsApp"></td>
                                                <td class="pb-10">
                                                    <p class="m-0 pl-10">{{config('constants.locations.dubai.phone')}}<span
                                                        class="label label-success ml-10 whats"><a
                                                        href="https://api.whatsapp.com/send?phone={{config('constants.locations.dubai.phone')}}&amp;text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services."
                                                        style="color: #ffff">Message us</a></span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pb-10"><img src="{{ asset('front/upload/icons/location.svg') }}"
                                                        style="width: 30px;max-width: 30px;" alt="Innovate Accounts Location"></td>
                                                        <td class="pb-10">
                                                            <p class="m-0 pl-10"><a href="https://maps.app.goo.gl/D197cMsXrDv1Gybg8"
                                                                target="_blank"> Innovate Accountings & Auditing LLC
                                                                <br>
                                                                Aspin Commercial Tower, 3rd Floor, Office 304, Trade Center 1st, Sheikh
                                                                Zayed Road,
                                                            Dubai, United Arab Emirates </a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td class="pl-10"> <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.8297742995614!2d55.272498399999996!3d25.208962500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f428853023db3%3A0x6e63a9fe6b2d7cfe!2sAspin%20Commercial%20Tower%20-%20106%20Sheikh%20Zayed%20Rd%20-%20Trade%20Centre%20-%20Trade%20Centre%201%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1717617546610!5m2!1sen!2sin"
                                                        width="100%" height="270" frameborder="0" style="border:0"></iframe>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 country_address">
                                        <section id="quick_enq_block">
                                            <div id="response">We will get back to you soon. Thank you!</div>
                                            <div class="border-1px" style="min-height: 580px; padding: 25px;">
                                                <h4 class="text-theme-colored text-uppercase m-0 line-bottom-theme-colored2">Free
                                                Consultation</h4>
                                                <div class="line-bottom mb-5"></div>
                                                <p class="text-black text-justify">Looking for audit, accounting, VAT, or tax services?
                                                    Contact Innovate Accounts Dubai. Our accountants, auditors, and tax experts are
                                                committed to providing quality and timely services</p>
                                                <form id="contact_us_form"  action="{{ route('save-contact') }}" name="" class="mt-30" method="POST">
                                                    @csrf
                                                    
                                                    <div id="success_msg" class="p-5 mb-5 pt-10 pb-10" style="background: linear-gradient(to right, #006ebb, #e1e7d5);color: white;border-radius: 2px;display: none;text-align: center;font-weight: 600;"></div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-10">
                                                                <input id="name" name="name" class="form-control captchaValid"
                                                                type="text" placeholder="Full Name" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-10">
                                                                <input id="contact_number" name="contact_number" class="form-control captchaValid"
                                                                type="number" placeholder="Contact Number" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-10">
                                                                <input id="email" name="email" class="form-control" type="text"
                                                                placeholder="Email id" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-10">
                                                                <select id="location" name="location" class="form-control captchaValid" >
                                                                    <option value="">Location</option>
                                                                    @foreach (config('constants.locations') as $locationKey => $location)
                                                                    <option value="{{ $location['name'] }}">
                                                                    {{ ucfirst($location['name']) }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group mb-10">
                                                                <select id="service_id" name="service_id" class="form-control captchaValid" >
                                                                    <option value="">Service</option>
                                                                    @foreach ($services as $services)
                                                                    <option value="{{ $services->id }}">
                                                                        {{($services->title) }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-10">
                                                            <textarea id="message" name="message" class="form-control captchaValid" placeholder="Enter Message" rows="5" ></textarea >
                                                        </div>
                                        <!--<div class="g-recaptcha"
                                            data-sitekey="6LfWeZUnAAAAAAQsFGy1sHO08NkGD4MFpjsWNwOv"></div>-->
                                            <div class="form-group mb-0 mt-20">
                                                <button type="submit" id="btn_submit" class="btn btn-dark btn-theme-colored"
                                                >Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endpush

    