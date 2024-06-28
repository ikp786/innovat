@extends('front.layouts.app')
@push('styles')
    @push('content')
        <section class="inner-header divider"
            style="background-image: url('{{asset('front/uploads/files/Careers Page.png')}}'); background-size: cover;">
            <div class="container banner_text">
                <div class="section-content" style="visibility: hidden;">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-theme-colored2 font-30">Careers</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" style="padding-top: 50px">
                <div class="row">
                    <div class="col-md-12">
                        <div id="response_3"></div>
                        <div class="border-1px p-25">

                            <div class="border-1px p-25">
                                <h3 class="text-uppercase title mt-0">LOOK within. And impact<span class="text-theme-colored2">
                                        everything around you.</span></h3>
                                <p class="text-black font-15 pb-5" style="text-align: justify;">Innovate&rsquo;s impact can be as
                                    large or as small as our people make it. No more, no less. So we seek professionals who see
                                    differently, who find opportunity where others don&rsquo;t, who look within themselves and
                                    know that with the right support and team they can impact the world</p>
                                <div class="line-bottom-theme-colored2 mb-10">&nbsp;</div>
                                <p class="text-black font-15 pb-10" style="text-align: justify;">Join <span
                                        style="text-decoration: underline;"><a href="index.html"><span
                                                style="color: #006EBB; text-decoration: underline;">Innovate
                                                Auditing</span></a></span> Explore Your Fit. Get your custom guide to explore
                                    opportunities. The impact you&rsquo;ll make through your career begins by finding work that
                                    inspires you and puts your strengths front and center. We have thousands of possibilities at
                                    Innovate Auditing which ones fit you? Looking for career opportunities? Find Jobs in <span
                                        style="color: #000000;"><a style="color: #000000;" href="index.html">Innovate
                                            Auditing</a></span>, We open the door for professional growth and development.
                                    Please share your resume to <a href="mailto:careers@innovateaccounts.com"><span
                                            style="color: #006EBB;"><span
                                                style="text-decoration: underline;">careers@innovateaccounts.com</span></span></a>
                                </p>
                            </div>
                            <form id="career_form" name="career_form" class="mt-30" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-10">
                                            <input id="con_fullname" name="con_fullname" class="form-control captchaValid"
                                                type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-10">
                                            <input id="con_email" name="con_email" class="form-control captchaValid"
                                                type="text" placeholder="Email id">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-10">
                                            <input id="con_phone" name="con_phone" class="form-control captchaValid"
                                                type="number" placeholder="Mobile Number">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-10 white-select2">
                                            <select id="country" name="country" class="form-control captchaValid">
                                                <option value="">Select Country</option>
                                                <option value="dubai">Dubai</option>
                                                <option value="mumbai">Mumbai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-10">
                                            <select id="department" name="department" class="form-control captchaValid">
                                                <option value="">Select Department</option>
                                                <option value="Audit">Audit</option>
                                                <option value="Accounting">Accounting</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Admin">Admin</option>
                                                <option value="HR">HR</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Marketing">Marketing</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-10">
                                            <input id="con_resume" name="con_resume" class="form-control captchaValid"
                                                type="file" placeholder="Resume">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="g-recaptcha" data-sitekey="6LdR4PcfAAAAACxvYx2wGVzGsq3pcWwhxfZ_ruiL"></div>
                                    </div>

                                </div>

                                <!-- <div class="form-group mb-10">
                                          <textarea id="con_message" name="con_message" class="form-control" placeholder="Enter Message" rows="5"></textarea>
                                        </div> -->

                                <div class="form-group mb-20 mt-20 loading_block">
                                    <button type="submit" class="btn btn-dark btn-theme-colored"
                                        id="career_form_btn">Submit</button>
                                    <img id="wait" class="wd3" src="{{asset('front/design/web_design/assets/images/loading.gif')}}" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endpush
    @push('scripts')
        <script></script>
    @endpush
