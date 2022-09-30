@extends('frontend.layout.main')

@section('content')
    <div id="main-wrapper" class="main-wrapper">

        @include('frontend.partials.header2')

        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">Our Portfolio</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, consectetur culpa. Ratione
                        assumenda voluptatem ex aliquid, hic ut ad vitae veniam id distinctio modi nemo quaerat quam dolor
                        cupiditate odit?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero dolore doloribus asperiores
                        veritatis minus eos perferendis excepturi, corrupti rerum sed. Aut veniam quidem deleniti corporis
                        natus! Impedit, delectus quos.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione cumque exercitationem minus
                        tempora provident a dolor tenetur placeat obcaecati eum ipsam, accusantium, quia dignissimos hic
                        repellat rem sint quisquam vel.
                    </p>
                    <div class="d-flex">
                        <div>
                            <button onclick="openPop()" class="btn btn-danger" style="">
                                Get Started Now
                            </button>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">

                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/frontend/media/others/line-1.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('asset   s/frontend/media/others/bubble-29.png') }}" alt="Bubble">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       Projects  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding-equal project-column-4 pt--200 pt_md--80 pt_sm--60">
            <div class="container-fluid plr--30">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-1.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-2.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-3.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-4.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-5.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-1.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-2.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-6.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-3.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-4.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-6.png') }}" alt="project">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a>
                                    <img src="{{ asset('assets/frontend/media/project/project-5.png') }}" alt="project">
                                </a>
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
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="{{ asset('assets/frontend/media/others/chat-group.png') }}" alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800"
                                data-sal-delay="400">
                                <img class="paralax-image" src="{{ asset('assets/frontend/media/others/laptop-poses.png') }}" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800"
                                data-sal-delay="300">
                                <img class="paralax-image" src="{{ asset('assets/frontend/media/others/bill-pay.png') }}" alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="{{ asset('assets/frontend/media/others/bubble-12.png') }}" alt="Comments"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/frontend/media/others/bubble-13.png') }}" alt="Comments"></li>
                <li class="shape shape-4"><img src="{{ asset('assets/frontend/media/others/bubble-14.png') }}" alt="Comments"></li>
                <li class="shape shape-5"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-6"><img src="{{ asset('assets/frontend/media/others/bubble-15.png') }}" alt="Comments"></li>
                <li class="shape shape-7"><img src="{{ asset('assets/frontend/media/others/bubble-16.png') }}" alt="Comments"></li>
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
