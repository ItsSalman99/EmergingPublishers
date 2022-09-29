@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header')

        <section class="banner banner-style-5" style="background-image: url('assets/frontend/media/bg5.jpg')">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="banner-content text-center">
                            <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                                Turn Good Writing Into A Great Book
                                <br>
                                <span>
                                    Hire Us Now!
                                </span>
                            </h1>
                            <p class="text-white">
                                Book editors make sure your writing is compelling and fluent, as well as all of your Is and
                                Ts are crossed. The best method to ensure your book is flawless before publishing is to
                                spend money on editing services from a reputable company.
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
                            <h5 style="width: 100%!important;">
                                Book Formatting
                            </h5>
                            <p>
                                Expert language editors may turn writings into books with a clear, grammatically correct,
                                and native-English tone after being chosen and trained for their attention to detail. Our
                                language editors are also subject-matter specialists, so they will ensure that any
                                terminology or grammatical constructions used in your work are accurate.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="200">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Syntax Correction</h5>
                            <p>
                                Your manuscript can be reviewed several times for a price that works for you. When you have
                                considered our editor's advice and want us to perform one more check before submitting it to
                                the publication, we advise using this service.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="300">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Development Editing</h5>
                            <p>
                                The more extensive elements of your book, such as the story, characters, ideas, and tone,
                                are closely examined during developmental editing. Before you get into the specifics of each
                                line, a developmental editor ensures that these "big picture" components are solid.
                            </p>
                            <button type="submit" class="btn btn-service" name="submit-btn" onclick="openPop()">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="service-container" style="border: 2px solid #eee;">
                            <h5 style="width: 100%!important;">Rewrites & Paraphasing</h5>
                            <p>
                                Do you have any concerns regarding the safety of your unpublished work? Our language editors
                                and subject matter experts sign a non-disclosure agreement in addition to a secure online
                                submission mechanism since we understand your worry. To protect your interests, we are also
                                happy to sign a confidentiality agreement with you.
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
                                Why Trust Us To Edit Your Book?
                            </h1>
                            <p>
                                The network of editors at Emerging Publishers has experience with various fiction novels,
                                from romance to science fiction, and nonfiction publications like academic journals and
                                biographies. Many seasoned experts have collaborated with bestselling authors across
                                numerous genres and a few publishing firms.
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
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                            data-sal-delay="300">
                            <h1 class="title h2">
                                Finding The Right Book Editor
                            </h1>
                            <p>
                                The romantic notion of an author working on a polished book alone in their chamber is simply
                                that—a myth. Although writing might be a solitary endeavor, the best books result from
                                teamwork. Professional book editors are essential collaborators since they have the
                                expertise, talent, and revising abilities to turn your book from a draught into a
                                bestseller!
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
                    <div class="col-lg-5 col-xl-5">
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
                    <div class="col-lg-6 col-xl-6">
                        <img src="{{ asset('assets/frontend/media/hero-book2.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                            data-sal-delay="300">
                            <h1 class="title h2">
                                Emerging Publishers Understand the Complexities of Book Editing
                            </h1>
                            <p>
                                Book editing demands attention to detail, which Emerging Publishers, a book editing firm,
                                comprehends well. In addition to the usual grammar and accuracy checks, it necessitates
                                managing and resolving numerous intricate style and content-related problems.
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
                        <h2 class="title">Not Sure What Type Of Book Editing Service You Need?</h2>
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
