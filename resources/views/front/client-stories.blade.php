@extends('front.layouts.app')
@push('styles')
    <style type="text/css">
        .Main__Container-sc-1n4ud0o-0>a {
            display: none !important;
        }
    </style>
@endpush
@push('content')
    <section class="inner-header divider"
        style="background-image: url('{{ asset('front/upload/files/client-stories.html') }}'); background-size: cover;">
        <div class="container banner_text pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-theme-colored2 font-26">Client Stories</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container dynamic_page pt-60 pt-sm-20 pb-30">
            <div class="row">
                <div class="col-md-12  col-lg-12 page_content">
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-md-12 client-stories" style="text-align: justify;">
                            <p><span style="color: #006EBB;"><strong>Business Performance</strong></span></p>
                            <p><span style="color: #000000;">Achieving consistent and confident performance is a challenging
                                    task. As businesses prepare for the future, leaders must navigate rapid changes in
                                    technology, consumer expectations, and societal shifts. The pressure is on to craft
                                    strategies and restructure organizations to achieve sustainable, impactful results for
                                    all stakeholders.</span></p>
                            <p><span style="color: #000000;">We understand your business and know how to achieve results. We
                                    deliver outcomes that matter, supporting you every step of the way.</span></p>
                            <p><span style="color: #000000;">Our team collaborates with clients to optimize processes,
                                    enhance technology, and stay competitive in a digital world. Want to see how we do it?
                                    Discover our success stories here.</span></p>

                            <br>
                            <div class="elfsight-app-453ce103-dbea-4b8f-8b6b-ff0a9f762356" style="padding-top: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
