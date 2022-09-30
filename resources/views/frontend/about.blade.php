@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header2')

        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                            data-sal-delay="300">
                            <h1 class="title h2">
                                A Better Way Of
                                <span style="border-bottom: 2px solid red;">
                                    Publishing
                                </span>
                            </h1>
                            <p>
                                The largest U.S.-based business solely dedicated to providing pre-press editorial and
                                production services to publishers of books, journals, textbooks, and white papers is
                                Emerging Publishers. Since we are not a printer, we can devote all of our skills and
                                resources to taking your projects from the manuscript stage to the final print-ready and
                                digital files
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <img src="{{ asset('assets/frontend/media/hero-book2.png') }}" alt="">
                    </div>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/frontend/media/others/bubble-9.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('assets/frontend/media/others/bubble-22.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{ asset('assets/frontend/media/others/line-4.png') }}" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       About  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="{{ asset('assets/frontend/media/hero-book3.png') }}" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Who we are</span>
                                <h2 class="title">Our Vission</h2>
                                <p>
                                    Emerging Publishers offers choices that reduce costs and enable you to expand your
                                    publishing program. By managing production work for clients through Publishing Services,
                                    we ensure that your projects receive the meticulous attention to detail and excellent
                                    quality you need.
                                </p>
                                <a href="#" class="axil-btn btn-fill-primary btn-large">Read More</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="10">10</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Years on the market</span>
                                </div>
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="1500">1500</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Projects delivered so far</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=       About  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="{{ asset('assets/frontend/media/books.png') }}" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Who we are</span>
                                <h2 class="title">Our Mission</h2>
                                <p>
                                    Since Emerging Publishers is dedicated to providing excellence with every title we
                                    publish, we have developed dependable relationships that have lasted for many years and
                                    thousands of publications.
                                </p>
                                <a href="#" class="axil-btn btn-fill-primary btn-large">Read More</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="10">10</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Years on the market</span>
                                </div>
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count" data-count="1500">1500</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Projects delivered so far</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=       Work Process Area Start     =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-light pb--70">
            <div class="container">
                <div class="section-heading mb--90">
                    <span class="subtitle">OUR PROCESS</span>
                    <h2 class="title">PROVIDING THE IDEAL BOOK PUBLISHING PROCESS</h2>
                    <p>
                        One of the top publishing companies, Emerging Publishers, specializes in all genres, formats, and
                        publication platforms.
                    </p>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-1.png') }}" width="70%" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step One</span>
                        <h3 class="title">Discover</h3>
                        <p>
                            Whether it is a fiction work, a biography, or a business publication, we have a team of
                            knowledgeable book publishing agents experienced with the nuances of many publishing platforms;
                            this book publishing agency assures excellent quality and unmatched service.
                        </p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000"
                    data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-2.png') }}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Two</span>
                        <h3 class="title">Schedule A FREE Consutation</h3>
                        <p>
                            We endeavor to match your expectations when you provide a preliminary draught along with the
                            project-specific instructions and offer suggestions for improvement and then schedule a session
                            with you.
                        </p>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-3.png') }}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Three</span>
                        <h3 class="title">Get Onboard With Us</h3>
                        <p>
                            We'll assign an accomplished book publishing agent to your project based on your specifications.
                            We are one of the top publishing firms for good work and punctuality because they consider all
                            of your requests, build a publication plan, and implement it in the allotted period.
                        </p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000"
                    data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/frontend/media/others/process-4.png') }}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step four</span>
                        <h3 class="title">Getting Work Done</h3>
                        <p>
                            Your unedited manuscripts go through a rigorous proofreading process by our proofreaders. For
                            perfect outcomes, we still run them via named programs like Grammarly, White smoke, and
                            Copyscape. We make sure to get the work done.
                        </p>
                    </div>
                </div>
            </div>
            <ul class="shape-group-17 list-unstyled">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-24.png') }}"
                        alt="Bubble"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-23.png') }}"
                        alt="Bubble"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/line-4.png') }}"
                        alt="Line"></li>
                <li class="shape shape-4"><img src="{{ asset('assets/frontend/media/others/line-5.png') }}"
                        alt="Line"></li>
                <li class="shape shape-5"><img src="{{ asset('assets/frontend/media/others/line-4.png') }}"
                        alt="Line"></li>
                <li class="shape shape-6"><img src="{{ asset('assets/frontend/media/others/line-5.png') }}"
                        alt="Line"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Speak With One Of Our Knowledgeable Executives About Your Questions Regarding Book Publishing</h2>
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

        @include('frontend.partials.faq')

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
