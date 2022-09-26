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
                        <li class="active">Contact</li>
                    </ul>
                    <h1 class="title h2">Contact</h1>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/frontend/media/others/bubble-9.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('assets/frontend/media/others/bubble-17.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{ asset('assets/frontend/media/others/line-4.png') }}" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       Contact  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-form-box shadow-box mb--30">
                            <h3 class="title">Get a free Keystroke quote now</h3>
                            <form method="POST" class="axil-contact-form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="contact-name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="contact-email">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" class="form-control" name="contact-company">
                                </div>
                                <div class="form-group mb--40">
                                    <label>How can we help you?</label>
                                    <textarea name="contact-message" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary"
                                        name="submit-btn">Get Pricing Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1">
                        <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                            <h4 class="title">Phone</h4>
                            <p>Our customer care is open from Mon-Fri, 10:00 am to 6:00 pm</p>
                            <h4 class="phone-number"><a href="tel:1234567890">(123) 456 7890</a></h4>
                        </div>
                        <div class="contact-info mb--30">
                            <h4 class="title">Email</h4>
                            <p>Our support team will get back to in 48-h during standard business hours.</p>
                            <h4 class="phone-number"><a href="mailto:info@example.com">info@example.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-12">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-2.png') }}" alt="Bubble"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-1.png') }}" alt="Bubble"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/circle-3.png') }}" alt="Circle"></li>
            </ul>
        </section>

        <!--=====================================-->
        <!--=       Location  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark overflow-hidden">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">Find Us</span>
                    <h2 class="title">Our office</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/frontend/media/others/location-1.png') }} " alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">Virginia-HQ</h4>
                                <p>435 Pouros Locks United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/frontend/media/others/location-2.png') }} " alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">Nevada</h4>
                                <p>46 Watsica Creek Suite 071 United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/frontend/media/others/location-3.png') }} " alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">Columbia</h4>
                                <p>7140 Wehner Tunnel Washington, D.C</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/frontend/media/others/location-4.png') }} " alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">New Mexico</h4>
                                <p>10 Maggie Valleys United States</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-11 list-unstyled">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/line-6.png') }} " alt="line"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/circle-3.png') }} " alt="line"></li>
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
