@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header')

        <section class="banner banner-style-5" style="background-image: url('assets/frontend/media/bg6.jpg')">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="banner-content text-center">
                            <h2 class="text-white" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                                Make Your Book Prominent By Utilizing Our Leading
                                <span>
                                    Book Marketing Services
                                </span>
                            </h2>
                            <p class="text-white">
                                An online presence is crucial in the current era of digitization. The Emerging Publishers
                                assist you in going big in the digital arena for yourself and your brand by utilizing the
                                talents of top marketing gurus in the field. Effective and tried-and-true methods for
                                guaranteeing outcomes are provided with the aid of the greatest book marketing strategy
                                strategies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-padding-2" style="z-index: 2;">
            <div class="container">
                <div class="row service-gap">
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Author Website</h5>
                            <p>
                                To determine your launching methods, engage the best book marketing company available. We
                                create your author website in a way that distinguishes you from the competition.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="200">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Book Cover Design</h5>
                            <p>
                                We create book cover designs for your book, which will make sure that your book is different
                                from others and entice your readers before even thinking to read it.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="300">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Custom Book Illustration</h5>
                            <p>
                                We are delighted to tell you that our illustrators are pros at their work, and they ensure
                                that your requirements are being met at all costs. So you don't have to be distressed about
                                that.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Book Trailer</h5>
                            <p>
                                Trust us on this when we tell you that your book trailer will make your readers go crazy and
                                leave a strong impact on their minds about your book.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                Executing an Efficient Marketing Plan for Book
                            </h1>
                            <p>
                                Your book has already been released, but sales aren't what you expected. You can still reach
                                your objectives with our viable marketing strategies! Advertising your book with these
                                helpful book promotion suggestions is never too late.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4" style="margin-left: 200px;">
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
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                            data-sal-delay="300">
                            <h1 class="title h2">
                                A Leading Book Marketing Company
                            </h1>
                            <p>
                                We have not only the best book promotion ideas but also the know-how, know-how, experience,
                                and intellect to carry them out successfully.
                                Let us contact the appropriate journalists, write press releases, and keep cordial
                                relationships with the media to ensure your book is marketed on the appropriate channels and
                                receives the acclaim it deserves.
                            </p>
                            <ul>
                                <li>
                                    Qualified Writers
                                </li>
                                <li>
                                    Unlimited Revisions
                                </li>
                                <li>
                                    24/7 Support
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4" style="margin-left: 200px;">
                        <img src="{{ asset('assets/frontend/media/books.png') }}" alt="">
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

        <section class="section section-padding-2" style="margin-bottom: 200px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <img src="{{ asset('assets/frontend/media/hero-book2.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 col-xl-6" style="margin-left: 200px;">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                            data-sal-delay="300">
                            <h1 class="title h2">
                                Sales-Centric Marketing for all your Published Books
                            </h1>
                            <p>
                                Do you find it difficult to rate yourself on the search engine? Is your brand not receiving
                                the attention it merits? Or do you lack the time necessary to devote to your digital
                                marketing campaign? Your entire digital marketing puzzle can be solved by using Emerging
                                Publisher's book marketing services.
                            </p>
                            <div class="d-flex">
                                <button class="btn btn-primary" style="margin-right: 50px;" onclick="openPop()">
                                    Get Free Qoute
                                </button>
                                <button class="btn btn-primary" onclick="openPop()">
                                    Chat Support
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">
                            Pondering Over How to Market Books?
                        </h2>
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
