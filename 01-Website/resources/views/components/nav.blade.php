<div>
    <!--Header Start-->
    <header id="home">

        <div class="inner-header">
            <!--colored-lines-->
            <div class="color-lines row no-gutters">
                <div class="col-4 bg-red"></div>
                <div class="col-4 bg-purple"></div>
                <div class="col-4 bg-green"></div>
            </div>
            <!--upper-nav-->
            <div class="upper-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <ul class="top-personal-info">
                                <li><a href="tel:020-6261782"><i class="las la-phone"></i> 020-626 17 82</a></li>
                                <li><a href="mailto:info@hbo-i.nl"><i class="las la-envelope"></i> info@hbo-i.nl</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-right">
                            <ul class="top-social-links">
                                <li><a target="_blank" href="https://www.linkedin.com/company/stichting-hbo-i/about/"
                                        class="link-holder link-in"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a target="_blank" href="{{ route('rss.news') }}"
                                        class="link-holder link-in"><i class="las la-rss"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--main nav-->
            <div class="main-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-lg-3">
                            <a class="navbar-brand simple-nav-logo" href="/">
                                <img src="{{ asset('/front-end/img/logos/logoHBO-i.svg') }}" alt="HBO-i logo">
                            </a>
                            <a class="navbar-brand fixed-nav-logo" href="/">
                                <img src="{{ asset('/front-end/img/logos/logoHBO-i.svg') }}" alt="HBO-i logo">
                            </a>
                        </div>
                        <div class="col-8 col-lg-9 simple-navbar">
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link scroll" href="/">HOME</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link scroll"
                                                href="/domeinbeschrijving">DOMEINBESCHRIJVING</a></li>
                                        {{-- <li class="nav-item"><a class="nav-link scroll"
                                                href="/kennisbank">KENNISBANK</a></li> --}}
                                        <li class="nav-item dropdown position-relative">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">KENNISBANK</a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a class="dropdown-item" href="/agenda">AGENDA</a></li>
                                                    <li><a class="dropdown-item" href="/nieuws">NIEUWS</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="/domeinbeschrijving">DOMEINBESCHRIJVING</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- <li class="nav-item"><a class="nav-link scroll" href="/agenda">AGENDA</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link scroll" href="/nieuws">NIEUWS</a>
                                        </li> --}}
                                        <li class="nav-item"><a class="nav-link scroll" href="/over">OVER</a>
                                        </li>
                                        {{-- <li class="nav-item"><a class="nav-link scroll"
                                                href="/contact">CONTACT</a></li> --}}
                                    </ul>
                                </div>
                            </nav>
                            <ul class="top-social-links fixed-nav-links">
                                <li><a href="https://www.linkedin.com/company/stichting-hbo-i/about/"
                                        class="link-holder link-in"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--toggle btn-->
            <a class="sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <!--Side Nav-->
        <div class="side-menu hidden side-menu-opacity">
            <div class="bg-overlay"></div>
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <div class="container">
                    <div class="row w-100 side-menu-inner-content">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <a href="/" class="navbar-brand"><img
                                    src="{{ asset('/front-end/img/logos/logoHBO-i.svg') }}" alt="logo"></a>
                        </div>
                        <div class="col-12 col-lg-8">
                            <nav class="side-nav w-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/domeinbeschrijving">DOMEINBESCHRIJVING</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/kennisbank">KENNISBANK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/nieuws">NIEUWS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/over">OVER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">LOGIN</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-12 col-lg-4 d-flex align-items-center">
                            <div class="side-footer text-white w-100">
                                <div class="menu-company-details">
                                    <span><a href class="">020-626 17 82</a></span>
                                    <span><a class="">info@hbo-i.nl</a></span>
                                </div>
                                <p class="text-white">© {{ date('Y') }} 42IN4SOi | Avans Hogeschool</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="close_side_menu"></a>

    </header>
    <!--Header End-->
</div>
