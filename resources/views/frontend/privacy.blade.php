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
                        <li><a href="/">Home</a></li>
                        <li class="active">Privacy & Policy</li>
                    </ul>
                    <h1 class="title h2">Privacy & Policy</h1>
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
        <!--=    Privacy Policy Area Start      =-->
        <!--=====================================-->
        <section class="section-padding privacy-policy-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="privacy-policy-content">
                            <div class="section-title">
                                <h5 class="title">This Privacy & Policy was last updated on {{ date('F j, Y') }}.</h5>
                            </div>
                            <h4>
                                PRIVACY POLICY
                            </h4>
                            <p>
                                At Emerging Publishers, one of our principal needs is the protection of our guests. This
                                Security Strategy report contains data gathered and recorded by Emerging Publishers and how
                                we use it.
                                <br>
                                Assuming you have additional inquiries or require more data about our Protection Strategy,
                                make sure to us.
                                <br>
                                This Protection Strategy applies just to our web-based exercises. It is legitimate for
                                guests to our Site concerning the data they shared and gathered in Emerging Publishers. This
                                arrangement isn't material to any data gathered disconnected or through channels other than
                                this Site.
                            </p>
                            <h4>
                                Consent
                            </h4>
                            <p>
                                By applying to our Site, you thus agree to our Protection Strategy and consent to its terms.
                            </p>
                            <h4>Information We Collect</h4>
                            <p>
                                The discrete data you are approached to give, and the justifications for why you are
                                approached to give it, will be clarified at the point we request that you give your data.
                                If you reach us straightforwardly, we might get extra data about you, for example, your
                                name, email address, telephone number, the items in the message or potential connections you
                                might send us, and some other data you might decide to give.
                                At the point when you register for a Record, we might request your contact data, including
                                things such as example, name, organization name, address, email address, and phone number.
                            </p>
                            <h4>How we use your information</h4>
                            <p>
                                We apply the data we gather in different ways, including:
                            </p>
                            <ul>
                                <li>
                                    Contribute, work, and maintain our website
                                </li>
                                <li>
                                    Enhance, personalize, and expand our website
                                </li>
                                <li>
                                    Understand and look into how you use our Site.
                                </li>
                                <li>
                                    Promote novel products, services, features, and utility
                                </li>
                                <li>
                                    Speak with you, either straightforwardly or through one of our accomplices, including
                                    for
                                    client assistance, to furnish you with refreshes and other data connecting with the Site
                                    and
                                    for showcasing and limited-time purposes
                                </li>
                                <li>
                                    Send you messages
                                </li>
                                <li>
                                    Find and forestall misrepresentation
                                </li>
                            </ul>
                            <h4>Log Files</h4>
                            <p>
                                Emerging Publishers observe a guideline method of utilizing log records. These documents log
                                guests when they visit sites. All facilitating organizations do this and a piece of
                                facilitating administrations' examination. The data gathered by log documents incorporate
                                web convention (IP) addresses, program type, Web access Supplier (ISP), date and time stamp,
                                alluding/leave pages, and potentially the number of snaps. These are not connected to any
                                data that is recognizable. The reason for the data is for breaking down patterns, overseeing
                                the webpage, following clients' development on the Site, and assembling segment data.
                            </p>
                            <h4>Third Party Privacy Policies</h4>
                            <p>
                                Emerging Publisher's Protection Strategy doesn't significantly affect different publicists
                                or sites. Consequently, we encourage you to counsel the individual Security Strategies of
                                these outsider promotion servers for more nitty gritty data. It might incorporate their
                                practices and directions about how to quit specific choices.
                                You can decide to disable cookies through your singular program choices. The board with
                                explicit internet browsers may be found at the programs' individual sites to know more
                                point-by-point data about cookies.
                            </p>
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
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="{{ asset('assets/frontend/media/others/chat-group.png') }}"
                                alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img class="paralax-image"
                                    src="{{ asset('assets/frontend/media/others/laptop-poses.png') }}" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
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
