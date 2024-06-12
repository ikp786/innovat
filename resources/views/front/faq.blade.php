@extends('front.layouts.app')

@push('styles')
<style>
	.page_content section .container {
		width: 100% !important;
	}

	.page_content ul{
		list-style: disc;
	}
	
	.page_content ol {
		list-style: decimal;
	}

	.page_content a {
		color: #0064ff;
	}

	@media (min-width: 991px) {
		.right_border {
		}

		.right_side_bar {
			padding-left: 25px;
		}
	}

	.right_side_bar {
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

	.banner_text {
		padding-top: 120px;
		padding-bottom: 60px;
	}

	ol {
		margin-left: 15px;
	}

	.dynamic_page .row {
		margin-right: 0px !important;
		margin-left: 0px !important;
	}

	h5, h6 {
		font-size: 18px;
	}
	.head_form {
		border: 1px solid #848484;
	}
	.category-expanded {
		height: auto !important;
		transition: height 0.15s ease-out;
		overflow: hidden;
	}
</style>
<style>
    .floating_social_media {
        background-color: #222222;
        display: inline-block;
        position: fixed;
        top: 40vh;
        left: 0;
        z-index: 9;
    }
    .floating_social_media .styled-icons{
        margin-left: 0 !important;
    }

    .floating_social_media li {
        display: block;
    }

    .floating_social_media .styled-icons a {
        margin: 0 !important;
        height: 40px;
        padding-top: 5px;
    }
    @media screen and (max-width:1100px) {
        .floating_social_media {
            display: none;
        }
    }
    .floating_get-a-quote{
        background-color: #222222;
        padding: 10px 0px 0px 10px;
        display: inline-block;
        position: fixed;
        top: 40vh;
        right: 0;
        z-index: 9;
    }
    .floating_get-a-quote:hover {
        background-color:  #e32a2d;
    }
    @media screen and (max-width:1100px) {
        .floating_get-a-quote {
            display: none;
        }
    }
    .paradm {
        margin-left: 35px!important;
       }
    .paradm2 {
        margin-left: 20px!important;
        }
</style>
@endpush
@push('content')

<section class="inner-header divider"
			 style="background-image: url('{{ asset('front/upload/files/faq.html')}}'); background-size: cover;">
		<div class="container banner_text pb-60">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-6">
						<h1 class="text-theme-colored2 font-26">Frequently Asked Questions (FAQ) </h1>
					</div>
				</div>
			</div>
		</div>
	</section>

    
    <section>
        <div class="container dynamic_page pt-60 pt-sm-20 pb-30">
            <div class="row">
                <div class="col-md-9 right_border col-lg-8 page_content">
                    <div id="accordion6" class="panel-group accordion-theme-colored accordion-icon-right" role="tablist"
                        aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div id="headingOne6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="active" role="button" href="#collapseOne6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="true"
                                        aria-controls="collapseOne6"> Will samples be subject to excise tax? </a></h6>
                            </div>
                            <div id="collapseOne6" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne6">
                                <div class="panel-body">Samples of excise goods that are given away for free will also be
                                    subject to excise tax. Excise tax is not a transaction based tax so tax is due on the
                                    goods when they are released for consumption (i.e. enter free circulation) in the UAE,
                                    regardless of whether or not they are intended for sale.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingTwo6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseTwo6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseTwo6"> Which goods are subject to excise tax in the UAE? </a>
                                </h6>
                            </div>
                            <div id="collapseTwo6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo6">
                                <div class="panel-body">The following goods are subject to excise tax in UAE at the
                                    following rates of tax: Carbonated drinks &ndash; 50% Energy drinks &ndash; 100% Tobacco
                                    &ndash; 100%</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingThree6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseThree6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseThree6"> Who can or will be able to register for VAT? </a>
                                </h6>
                            </div>
                            <div id="collapseThree6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree6">
                                <div class="panel-body">A business must register for VAT if its taxable supplies and imports
                                    exceed the mandatory registration threshold of AED 375,000. A business must register for
                                    VAT if its taxable supplies and imports exceed the mandatory registration threshold of
                                    AED 375,000. Similarly, a business may register voluntarily if its expenses exceed the
                                    voluntary registration threshold. This latter opportunity to register voluntarily is
                                    designed to enable start-up businesses with no turnover to register for VAT.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingFour6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseFour6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseFour6"> Are refunds of Excise Tax available? </a></h6>
                            </div>
                            <div id="collapseFour6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFour6">
                                <div class="panel-body">Unlike VAT, excise tax is paid once in the supply chain and
                                    businesses that have purchased excise goods cannot obtain a refund of the excise tax
                                    paid on those goods. There are a limited number of cases where a refund of excise tax
                                    will be available. Those cases are: a) When excise tax has been paid on an excise good,
                                    which is then produced in to a &lsquo;new&rsquo; excise good, on which excise tax is
                                    again due; b) When excise tax has been paid on an excise good that is then exported
                                    outside the UAE; or c) When amounts have been paid to the FTA in error. In the above
                                    cases, a business registered for excise tax will be entitled to a refund of the excise
                                    tax paid. The refund will be granted by allowing a deduction of the refundable amount
                                    from the tax due in the next excise tax return period. There are also a limited number
                                    of cases where refunds will be available to people who are not registered for excise
                                    tax. Those cases are: a) Where excise tax has been paid by certain international
                                    governments, diplomatic missions and international organisations in the course of their
                                    official activities, where a reciprocal agreement is in place between the UAE and the
                                    entity&rsquo;s home country; and b) Where excise tax has been paid in the UAE by a
                                    person who is registered for excise tax in another GCC country that is implementing
                                    excise tax and who has then exported the excise goods out of the UAE and paid excise tax
                                    in that other GCC country.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingFive6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseFive6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseFive6"> What is Accounting? </a></h6>
                            </div>
                            <div id="collapseFive6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFive6">
                                <div class="panel-body">Accounting is the concept used to define an organization&rsquo;s
                                    financial activities in depth and routinely. There are also various kinds of businesses,
                                    audit accounts, administration accounts, policy accounting, and small to medium-sized
                                    firms. This is the way the company tracks the financial documents, organizes them, and
                                    knows them. Accounting services show you whether you earn a profit or not, what your
                                    cash balance is, how what the company&rsquo;s assets and liabilities really are worth,
                                    and which aspects of the corporation really generate profits.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingSix6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseSix6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseSix6"> What is VAT on online sales in UAE? </a></h6>
                            </div>
                            <div id="collapseSix6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingSix6">
                                <div class="panel-body">VAT on E-commerce sales in UAE depends on the location of supplier
                                    and recipient. 5% VAT will be applicable on online sales in UAE.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingSeven6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseSeven6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseSeven6"> Who will be responsible for issuing a Tax Invoice
                                        for my sales on Amazon? </a></h6>
                            </div>
                            <div id="collapseSeven6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingSeven6">
                                <div class="panel-body">As a seller on Amazon, it is your responsibility to comply with the
                                    VAT Law at all times. This includes issuing valid tax invoices for sales made to
                                    customers, collecting VAT (if applicable) and payment of VAT to the UAE Federal Tax
                                    Authority (&ldquo;FTA&rdquo;).It is your sole responsibility to comply with all legal
                                    and VAT requirements for issuing Tax Invoices to buyers in respect of your sales
                                    transactions. If you are unsure as to whether you have to issue a Tax Invoice to the
                                    buyer, we recommend that your consult with your tax advisor.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingEight6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseEight6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseEight6"> What are my VAT obligations relating to return
                                        orders? </a></h6>
                            </div>
                            <div id="collapseEight6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingEight6">
                                <div class="panel-body">In case of return orders for which a refund is authorized to the
                                    customer, you are required to provide the customer with a valid Tax credit note.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingNine6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseNine6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseNine6"> Do I need to register for VAT in the UAE as an
                                        International Seller? </a></h6>
                            </div>
                            <div id="collapseNine6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingNine6">
                                <div class="panel-body">Yes. If you are a non-UAE resident selling goods that are located
                                    in the UAE to a UAE customer, then you will be required to register for VAT irrespective
                                    of the level of turnover from such sales.A non-established business selling goods from
                                    the UAE shall be subject to a NIL VAT registration threshold. VAT registration will be
                                    effective from the date on which you started making sales in the UAE.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingTen6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseTen6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseTen6"> What are the benefits of hiring an audit firm? </a>
                                </h6>
                            </div>
                            <div id="collapseTen6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTen6">
                                <div class="panel-body">Your task is choosing the best audit firms in Dubai which makes a
                                    significant impact on your business&mdash;and certifies that your finances are
                                    well-managed&mdash;because that can make or break your business. Hiring a reliable,
                                    qualified, and reputable auditing firm is one of the best things you can do for
                                    protecting and promoting your business.Selecting your auditing firm is an important task
                                    and must be done carefully. You need to appoint an audit firm that adds value to your
                                    business by identifying wrongdoings, staff weaknesses, and internal control weaknesses.
                                    Most importantly, you need a firm that provides recommendations to address the issues
                                    identified during the audit.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingEleven6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseEleven6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseEleven6"> What are the VAT fines and penalties in UAE? </a>
                                </h6>
                            </div>
                            <div id="collapseEleven6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingEleven6">
                                <div class="panel-body">New VAT fines and penalties have been announced and the good new is
                                    that FTA has reduced them to help businesses to recover from the impact of COVID-19. FTA
                                    has reduced the penalties on VAT to motivate the businesses to avoid fines by ensuring
                                    VAT compliance. The amendments will be effective from 28 June 2021.Read more: VAT fines
                                    and penalties</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingTwelve6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseTwelve6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseTwelve6"> How to Treat Discounts under VAT in UAE? </a></h6>
                            </div>
                            <div id="collapseTwelve6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwelve6">
                                <div class="panel-body">Businesses are confused about how to treat discounts under VAT in
                                    UAE. As per FTA, VAT will be calculated on discounted prices in UAE. Discount is often
                                    used as a sales strategy by businesses to attract their customers. A Discount is
                                    referred as a reduction in price.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="headingThirteen6" class="panel-heading" role="tab">
                                <h6 class="panel-title"><a class="collapsed" role="button" href="#collapseThirteen6"
                                        data-toggle="collapse" data-parent="#accordion6" aria-expanded="false"
                                        aria-controls="collapseThirteen6"> Is it good to outsource accounting services for
                                        small business in Dubai </a></h6>
                            </div>
                            <div id="collapseThirteen6" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThirteen6">
                                <div class="panel-body">YES! Outsourced accounting services in UAE means hiring an
                                    accounting firm that provides a full accounting department experience. This usually
                                    comprises everything from the day-to-day transaction coding, accounts receivable,
                                    accounts payable, payroll and taxation to managing financial reporting.Small businesses
                                    in UAE face many challenges in the early stages of their business. Hiring a full time
                                    dedicated accountant is very costly in UAE because a business needs to provide the
                                    accountant with company visa, health insurance, travel ticket and monthly salary along
                                    with the integration of a suitable accounting software. Businesses in UAE can avoid all
                                    this cost by just outsourcing accounting services for their small business in Dubai,
                                    UAE.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  col-lg-4 right_side_bar">
                    <a style="color: #fff;" href="locations/bms-auditing-dubai-uae.html">
                        <div class="mb-20" style="text-align: center;background: #e03e2d;padding: 7px;">
                            <button
                                class="btn btn-outline-primary sear"style="border-radius: 0px;background: #e03e2d;padding: 7px;">Get
                                A Quote</button>
                        </div>
                    </a>
                    <div class="search-form-wrapper mb-20 bordered">
                        <form id="searchform" class="mb-0" method="post"
                            action="https://www.bmsauditing.com/info/search_results" style="padding: 0px;">
                            <div class="head_form">
                                <div class="m-0" style="display: flex; justify-content: end;">
                                    <input aria-label="search keyword" class="search_input" type="text"
                                        name="search_item" id="searchinput" placeholder="Search . . .">
                                    <button type="submit" id="searchform_btn" class="btn btn-outline-primary sear"
                                        style="background: #000000;color:#ffffff;border-radius: 0px;">Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget bordered">
                            <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">Latest
                                Blogs</h5>
                            <div class="latest-posts">
                                <article class="post media-post clearfix pb-0 mb-25"
                                    style="font-family: Poppins,sans-serif;">
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-0"><a class="font-15"
                                                style="font-family: Poppins,sans-serif;"
                                                href="#">Decoding
                                                Success: The Power of Feasibility Studies in Mitigating Investment Risks</a>
                                        </h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="widget bordered category-block">
                            <h5 class="widget-title font-20 text-black pt-0 line-bottom" style="font-weight: 600;">
                                Categories</h5>
                            <div class="categories">
                                <div>
                                    <ul class="list ml-0">
                                        
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/dubai.html">Dubai <span>
                                                    (43)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/audit.html">Mumbai <span>
                                                    (34)</span></a></li>
                                        
                                    </ul>
                                </div>
                                <div id="blog_category" style="height: 0; overflow:hidden;">
                                    <ul class="list ml-0">
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/finance.html">Finance
                                                Management <span> (12)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/abu-dhabi.html">Abu Dhabi
                                                <span> (9)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/tax-agent.html">Tax Agent
                                                <span> (8)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/vat-in-ksa.html">VAT in
                                                KSA <span> (8)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black"
                                                href="blogs/category/business-setup.html">Business Setup <span>
                                                    (6)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/qatar.html">Qatar <span>
                                                    (5)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/free-zones.html">Free
                                                Zones <span> (5)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/bahrain.html">Bahrain
                                                <span> (4)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/vat-in-oman.html">VAT in
                                                Oman <span> (4)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/usa.html">USA <span>
                                                    (4)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/excise-tax.html">Excise
                                                Tax <span> (3)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black"
                                                href="blogs/category/feasibility-study-in-qatar.html">Feasibility Study in
                                                Qatar <span> (2)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black"
                                                href="blogs/category/income-tax-in-oman.html">Income Tax in Oman <span>
                                                    (1)</span></a></li>
                                        <li style="padding-left: 0;"><a style="font-weight: 400"
                                                class="font-15 text-black" href="blogs/category/vat-in-bahrain.html">VAT
                                                in Bahrain <span> (1)</span></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endpush


@push('scripts')
    <script>
        function expand(id, btn) {
		if ($('#' + id).hasClass('category-expanded')) {
			$('#' + id).removeClass('category-expanded')
			$(btn).text('Show more categories');
		} else {
			$('#' + id).addClass('category-expanded')
			$(btn).text('Show less categories');
		}
	}
    </script>
    <!-- <script src="https://www.bmsauditing.com/design/web_design/assets/js/custom.js?v=6"></script> -->
    <script src=" https://www.bmsauditing.com/design/web_design/assets/js/jquery-2.2.4.min.js"></script>
    <script src=" https://www.bmsauditing.com/design/web_design/assets/js/jquery-ui.min.js"></script>
    <script src=" https://www.bmsauditing.com/design/web_design/assets/js/bootstrap.min.js"></script>
@endpush