@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header2')

        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="list-unstyled">
                        <li><a href="index-1.html">Home</a></li>
                        <li class="active">PRICING AND PLANS</li>
                    </ul>
                    <h1 class="title h2">PRICING AND PLANS</h1>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/frontend/media/others/bubble-9.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('assets/frontend/media/others/bubble-11.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{ asset('assets/frontend/media/others/line-4.png') }}" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=        Pricing Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading mb-0">
                    <span class="subtitle">PRICING AND PLANS</span>
                    <h2 class="title">Have A Look At Our Pricing!</h2>
                    <p>
                        It is worthwhile to take a closer look at a price since it can shed light on noticeable and
                        potentially concerning anomalies in a book's marketing and sales strategy.
                        We created a pricing plan according to your budget. have a look!
                    </p>
                </div>
                <div class="pricing-billing-duration">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link active" id="yearly-plan-btn" type="button">Pay Yearly</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="monthly-plan-btn" type="button">
                                Pay Monthly
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Professional</h3>
                                <span class="subtitle">A beautiful, simple website</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, odio sapiente
                                            vel dicta odit cum consequatur ex quos, maiores provident consequuntur porro
                                            omnis. Sed consequuntur provident aliquam fuga minus eveniet?</p>
                                    </div>
                                    <div class="monthly-pricing">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, odio sapiente
                                            vel dicta odit cum consequatur ex quos, maiores provident consequuntur porro
                                            omnis. Sed consequuntur provident aliquam fuga minus eveniet?</p>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Standard</h3>
                                <span class="subtitle">Small Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, odio sapiente
                                            vel dicta odit cum consequatur ex quos, maiores provident consequuntur porro
                                            omnis. Sed consequuntur provident aliquam fuga minus eveniet?</p>
                                    </div>
                                    <div class="monthly-pricing">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, odio sapiente
                                            vel dicta odit cum consequatur ex quos, maiores provident consequuntur porro
                                            omnis. Sed consequuntur provident aliquam fuga minus eveniet?</p>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>50 Pages Responsive Website</li>
                                    <li>Unlimited PPC Campaigns</li>
                                    <li>Unlimited SEO Keywords</li>
                                    <li>Unlimited Facebook Camplaigns</li>
                                    <li>Unlimited Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">Ultimate</h3>
                                <span class="subtitle">Large Team</span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, odio sapiente
                                            vel dicta odit cum consequatur ex quos, maiores provident consequuntur porro
                                            omnis. Sed consequuntur provident aliquam fuga minus eveniet?</p>
                                    </div>
                                    <div class="monthly-pricing">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, odio sapiente
                                            vel dicta odit cum consequatur ex quos, maiores provident consequuntur porro
                                            omnis. Sed consequuntur provident aliquam fuga minus eveniet?</p>
                                    </div>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>10 Pages Responsive Website</li>
                                    <li>5 PPC Campaigns</li>
                                    <li>10 SEO Keywords</li>
                                    <li>5 Facebook Camplaigns</li>
                                    <li>2 Video Camplaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-4.png') }}"
                        alt="shape"></li>
            </ul>
        </section>

        @include('frontend.partials.faq')

        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Find The Right Publishing Company</h2>
                        <a href="{{ route('contact') }}" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="{{ asset('assets/frontend/media/others/chat-group.png') }}"
                                alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800"
                                data-sal-delay="400">
                                <img class="paralax-image"
                                    src="{{ asset('assets/frontend/media/others/laptop-poses.png') }}" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800"
                                data-sal-delay="300">
                                <img class="paralax-image" src="{{ asset('assets/frontend/media/others/bill-pay.png') }}"
                                    alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-12.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/bubble-13.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-4"><img src="{{ asset('assets/frontend/media/others/bubble-14.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-5"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-6"><img src="{{ asset('assets/frontend/media/others/bubble-15.png') }}"
                        alt="Comments"></li>
                <li class="shape shape-7"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}"
                        alt="Comments"></li>
            </ul>
        </section>

        @include('frontend.partials.footer')


        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index-1.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                        456-2790</a>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
