        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="header axil-header header-style-4">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="/" style="color: #fff; font-size: 20px; font-weight: bold">
                                {{-- <img src="{{ asset('assets/frontend/media/logo-3.svg') }}"
                                    alt="logo"> --}}
                                Emeging Publishers
                            </a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="index-1.html">
                                                <img class="light-mode"
                                                    src="{{ asset('assets/frontend/media/logo-2.svg') }}"
                                                    alt="Site Logo">
                                                <img class="dark-mode"
                                                    src="{{ asset('assets/frontend/media/logo-3.svg') }}"
                                                    alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Services</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{ route('book-publishing') }}">Book Publishing</a></li>
                                            <li><a href="{{ route('book-editing') }}">Book Editing</a></li>
                                            <li><a href="{{ route('book-marketing') }}">Book Marketing</a></li>
                                            <li><a href="{{ route('book-ghostwriting') }}">Book GhostWriting</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Our Programs</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{ route('pricing') }}">Pricing & Plans</a></li>
                                            <li><a href="{{ route('services.index') }}" >Our Programs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('printing-press') }}">
                                            Printing Press
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="header-btn">
                                    <a href="{{ route('contact') }}" class="axil-btn btn-fill-white">Free Consutation</a>
                                </li>
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap btn-dark" data-bs-toggle="offcanvas"
                                        data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================-->
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
