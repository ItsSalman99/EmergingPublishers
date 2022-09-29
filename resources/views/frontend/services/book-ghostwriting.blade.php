@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header')

        <section class="banner banner-style-5" style="background-image: url('assets/frontend/media/bg7.jpg')">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="banner-content text-center">
                            <h2 class="text-white" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                                Find a Ghostwriter for Your Next Book.
                                <br>
                                <span>
                                    Hire a Ghostwriter Now!
                                </span>
                            </h2>
                            <p class="text-white">
                                Do you want to commission a book from a ghostwriter? Give your narrative to one of our
                                experienced ghostwriters. Let our ghostwriters stir our magical concoction of powerful words
                                to produce a book that will serve as an inventive elixir for you.
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
                            <h5 style="width: 100%!important;">Sub Genres</h5>
                            <p>
                                We provide you with book ghostwriting services that include writing for the subgenres. You
                                pick it, and we will write it for you.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="200">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Unmatched Writing Style</h5>
                            <p>
                                Our book ghostwriters are truly the experts when it comes to writing style. Our writing
                                style is truly different from other companies, and we make sure to provide you with quality
                                work.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="300">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Immaculate Content</h5>
                            <p>
                                Our writers are experienced, and they always deliver perfect content which is free of errors
                                and grammatically correct with the perfect sentence structuring.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Swift Turnaround</h5>
                            <p>
                                Our company is famous for our swift turnarounds as we always satisfy our clients and ensure
                                they are happy with our services.
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
                <div class="">
                    <div class="">
                        <div class="section-heading" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                            <h1 class="title h2">
                                What Can You Expect From Us
                            </h1>
                            <p>
                                Our staff of ghostwriters has a knack for writing, and because of their excellent
                                ghostwriting abilities have frequently been highlighted by reputable media sites like The
                                New York Times. By creating a book, our ghostwriters have successfully assisted our clients
                                in becoming well-known authors.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion" data-sal="slide-up" data-sal-duration="800"
                                data-sal-delay="100">
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                            1. Professional Writers
                                        </button>
                                    </h6>
                                    <div id="faq1" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Our primary specialties are expert ghostwriting services. We have developed
                                                the ability to manage even completed tasks quickly after working on more
                                                than 600 writing jobs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            2. Authoritative Content
                                        </button>
                                    </h6>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                We take full responsibility for the content we create, secure the sources
                                                for every article we publish, and cite them in the references.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            3. Finest Illustration
                                        </button>
                                    </h6>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                We can give you high-quality illustrations for picture books for kids or
                                                novels that call for a graphic or visuals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            4. Full Authorship
                                        </button>
                                    </h6>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                You can obtain ghostwriting services there without having them ghostwrite
                                                you. By acquiring copyrights in your name, we provide you complete
                                                authority.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                            aria-controls="faq5">
                                            5. Original Content
                                        </button>
                                    </h6>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                We have fiction lovers, history specialists, and many more who can provide
                                                unique and thoroughly researched content to your publications.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false"
                                            aria-controls="faq6">
                                            6. Proper Formatting
                                        </button>
                                    </h6>
                                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                Your ebook's formatting becomes important for publication and printing,
                                                something we can ideally handle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                The Most Proficient Ghostwriting Services in the Business
                            </h1>
                            <p>
                                Hire a ghostwriter for your assignment through our site to avoid the concern that drains
                                your thoughts. All the storylines are brought to life by our ghostwriters' excellent book
                                writing abilities. Our authors can handle any topic, whether it's a narrative of rags to
                                riches, a historical account, or the tale of a mythical realm.
                            </p>
                            <div class="d-flex">
                                <div>
                                    <button type="submit" class="axil-btn " style="margin-right: 10px;"
                                        name="submit-btn" onclick="openPop()">
                                        Get A Free Quote
                                    </button>
                                </div>
                                <div>
                                    <a href="{{ route('contact') }}">
                                        <button class="axil-btn" name="submit-btn">
                                            Contact Us
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 text-center" style="">
                        <img src="{{ asset('assets/frontend/media/hero-book4.jpg') }}" style=" border-radius: 50px;"
                            alt="">
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
                                Have a Story in Mind? Need help?
                            </h1>
                            <p>
                                If so, join us in finding your voice. Let us put your ideas into words and weave them into a
                                compelling book that will hold readers' attention until the very last page is turned. We
                                have skilled writers who use these narrative structures and tactics to make a biography
                                sound heroic.
                            </p>
                            <div class="d-flex">
                                <button class="btn btn-primary" style="margin-right: 50px;">
                                    Get Free Qoute
                                </button>
                                <button class="btn btn-primary">
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
                        <h2 class="title">Fraught to Write a Book on Your Own?</h2>
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
