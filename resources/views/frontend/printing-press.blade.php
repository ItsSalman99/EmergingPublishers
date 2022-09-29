@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header')

        <section class="banner banner-style-5" style="background-image: url('assets/frontend/media/bg.jpg')">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="banner-content text-center">
                            <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                                Printing Press
                            </h1>
                            <p class="text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi natus assumenda expedita
                                vitae, vero eaque odio ipsam at cum iste cupiditate neque molestias a, officia doloremque
                                deleniti delectus earum totam!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, esse? Nesciunt quod delectus
                                modi voluptate, unde at explicabo culpa vel et nostrum vero labore quasi natus ea molestiae
                                quibusdam nulla.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-padding-2" style="z-index: 2; margin-bottom: 200px;">
            <div class="container">
                <div class="row justify-content-center service-gap">
                    <div class="col-xl-3 col-md-6 sal-animate" style="margin-bottom: 20px;" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="300">
                        <div class="press-container" style="border: 2px solid #eee;">
                            <img src="{{ asset('assets/frontend/media/icon/publisher.png') }}" alt="">
                            <br><br>
                            <h4>REVIEW OUR QUALITY</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" style="margin-bottom: 20px;" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="press-container" style="border: 2px solid #eee;">
                            <img src="{{ asset('assets/frontend/media/icon/pdf.png') }}" alt="">
                            <br><br>
                            <h4>FREE PDF REVIEW</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 sal-animate" style="margin-bottom: 20px;" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="press-container" style="border: 2px solid #eee;">
                            <img src="{{ asset('assets/frontend/media/icon/book.png') }}" alt="">
                            <br><br>
                            <h4>PUBLISH A BOOK</h4>
                        </div>
                    </div>
                </div>

                <div class="banner-content text-center">
                    <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                        WHAT IS INCLUDED IN OUR PRICING?
                    </h1>
                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi natus assumenda expedita
                        vitae, vero eaque odio ipsam at cum iste cupiditate neque molestias a, officia doloremque
                        deleniti delectus earum totam!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, esse? Nesciunt quod delectus
                        modi voluptate, unde at explicabo culpa vel et nostrum vero labore quasi natus ea molestiae
                        quibusdam nulla.
                    </p>
                    <button class="btn" onclick="openPop()" style="background-color: red; color: #fff; padding: 10px;">
                        Get Instant Pricing
                    </button>
                </div>

            </div>
        </section>

        <section class="section section-padding-2 bg-dark" style="z-index: 2; margin-bottom: 200px;">
            <div class="container">
                <h3 class="text-center text-white">Our Services</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="300">
                        <div class="our-service-container" style="background-color: #fff; border: 2px solid #eee;">
                            <h4>Digital Printing</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum dignissimos
                                repellat labore commodi. Voluptas modi dignissimos totam quasi fugit voluptatibus a delectus
                                perferendis suscipit et, iure laborum sed dolorem!
                            </p>
                            <div>
                                <button class="btn" onclick="openPop()">
                                    Get Instant Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="our-service-container" style="background-color: #fff; border: 2px solid #eee;">
                            <h4>Offset Printing</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum dignissimos
                                repellat labore commodi. Voluptas modi dignissimos totam quasi fugit voluptatibus a delectus
                                perferendis suscipit et, iure laborum sed dolorem!
                            </p>
                            <div>
                                <button class="btn" onclick="openPop()">
                                    Get Instant Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="our-service-container" style="background-color: #fff; border: 2px solid #eee;">
                            <h4>Cloting Services</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum dignissimos
                                repellat labore commodi. Voluptas modi dignissimos totam quasi fugit voluptatibus a delectus
                                perferendis suscipit et, iure laborum sed dolorem!
                            </p>
                            <div>
                                <button class="btn" onclick="openPop()">
                                    Get Instant Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100">
                        <div class="our-service-container" style="background-color: #fff; border: 2px solid #eee;">
                            <h4>Design Services</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum dignissimos
                                repellat labore commodi. Voluptas modi dignissimos totam quasi fugit voluptatibus a delectus
                                perferendis suscipit et, iure laborum sed dolorem!
                            </p>
                            <div>
                                <button class="btn" onclick="openPop()">
                                    Get Instant Quote
                                </button>
                            </div>
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
                                How is our Printing Press?
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt qui id suscipit
                                assumenda est porro consectetur sit! Perferendis commodi laudantium nam nihil totam optio
                                doloribus eius illo minima atque.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, nihil aliquid dolorum
                                asperiores beatae veritatis? Expedita sapiente a officia, id maxime voluptates excepturi
                                eligendi vel facilis? Nihil deserunt aut dicta.
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
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla
                                                laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac
                                                tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum
                                                blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                            aria-controls="faq2">
                                            2. Authoritative Content
                                        </button>
                                    </h6>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla
                                                laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac
                                                tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum
                                                blandit non.</p>
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
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla
                                                laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac
                                                tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum
                                                blandit non.</p>
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
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla
                                                laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac
                                                tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum
                                                blandit non.</p>
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
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla
                                                laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac
                                                tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum
                                                blandit non.</p>
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
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla
                                                laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac
                                                tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum
                                                blandit non.</p>
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
                                Why Choose Our Service?
                            </h1>
                            <p>
                                Our vision is to create a sanctuary for all indie authors—a place where they find everything
                                they
                                need to succeed in their journey as a writer. At mermaid publishers, we partner with writers
                                worldwide and help them get to the limelight they deserve.
                            </p>
                            <div class="d-flex">
                                <div>
                                    <button type="submit" class="axil-btn " style="margin-right: 10px;"
                                        name="submit-btn" onclick="openPop()">
                                        Get A Free Quote
                                    </button>
                                </div>
                                <div>
                                    <button type="submit" class="axil-btn" name="submit-btn" onclick="openPop()">Get
                                        Contact Us
                                    </button>
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

        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
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
