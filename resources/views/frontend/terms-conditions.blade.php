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
                        <li class="active">Terms of Use</li>
                    </ul>
                    <h1 class="title h2">Terms of Use</h1>
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
                                <h5 class="title">This Terms & Conditions was last updated on {{ date('F j, Y') }}.</h5>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                                illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4>Nam liber tempor cum soluta</h4>
                            <p>Sed nec ex vitae justo molestie maximus. Sed ut neque sit amet libero rhoncus tempor. Fusce
                                tempor quam libero, varius congue magna tempus vitae. Donec a justo nec elit sagittis
                                sagittis eu a ante. Vivamus rutrum elit odio. Donec gravida id ligula ut faucibus. Aenean
                                convallis ligula orci, ut congue nunc sodales ut. In ultrices elit malesuada velit ornare,
                                eget dictum velit hendrerit. Praesent bibendum blandit lectus, eu congue neque mollis in.
                                Pellentesque metus diam, hendrerit in purus fringilla, accumsan bibendum sapien. Nunc non
                                facilisis sem.
                            </p>
                            <h4>Nam liber tempor cum soluta</h4>
                            <p>In dapibus, nibh sit amet pulvinar convallis, massa nunc tincidunt nunc, a pretium risus
                                nulla ut dui. Ut ut condimentum tellus, dapibus volutpat est. Integer ullamcorper iaculis
                                blandit. Pellentesque id tempus urna. Quisque luctus cursus imperdiet. <a
                                    href="mailto:info@emergingpublishers.com">info@emergingpublishers.com</a> </p>
                            <h4>Nam liber tempor cum soluta</h4>
                            <p>Putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et
                                quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in
                                futurum.</p>
                            <h4>Nam liber tempor cum soluta</h4>
                            <p class="mb--20">Sed nec ex vitae justo molestie maximus. Sed ut neque sit amet libero rhoncus
                                tempor. Fusce tempor quam libero, varius congue magna tempus vitae. Donec a justo nec elit
                                sagittis sagittis eu a ante. Vivamus rutrum elit odio. Donec gravida id ligula ut faucibus.
                                Aenean convallis ligula orci, ut congue nunc sodales ut. In ultrices elit malesuada velit
                                ornare, eget dictum velit hendrerit. Praesent bibendum blandit lectus, eu congue neque
                                mollis in. Pellentesque metus diam, hendrerit in purus fringilla, accumsan bibendum sapien.
                                Nunc non facilisis sem.</p>
                            <ul>
                                <li>Nulla facilisi. Sed pulvinar nec purus eu sollicitudin. Quisque ut tempus quam, in
                                    cursus eros.</li>
                                <li>Fusce malesuada luctus velit eu tempor. Pellentesque habitant morbi tristique senectus
                                    et netus et.</li>
                                <li>Pellentesque ornare nulla est, non blandit sapien lacinia nec. Nulla ac velit id est
                                    mattis faucibus.</li>
                                <li>Aliquam lacus nisi, lobortis non diam eget, malesuada bibendum justo. Praesent fringilla
                                    sagittis ex, ac molestie ipsum ullamcorper a.</li>
                                <li>Vestibulum nulla tortor, aliquam at porta in, hendrerit sed nibh.</li>
                            </ul>
                            <h4>Nam liber tempor cum soluta</h4>
                            <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim
                                assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                                claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                            <h4>Mirum est notare quam</h4>
                            <p>Littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis
                                per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                                clari, fiant sollemnes in futurum.</p>

                            <h4>Mirum est notare quam</h4>
                            <p>Littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis
                                per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                                clari, fiant sollemnes in futurum.</p>

                            <h4>Mirum est notare quam</h4>
                            <p>Littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis
                                per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                                clari, fiant sollemnes in futurum.</p>
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
