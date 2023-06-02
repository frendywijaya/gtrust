<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GTrust Learning</title>
    <meta name="description" content="GTrust Learning">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/custom.css') }}">

    @yield('css')
</head>

<body>

    <!-- Preloader-start -->
    <div id="preloader">
        <div class="ta-preloader-block">
            <div class="ta-spinner-eff">
                <div class="ta-bar ta-bar-top"></div>
                <div class="ta-bar ta-bar-right"></div>
                <div class="ta-bar ta-bar-bottom"></div>
                <div class="ta-bar ta-bar-left"></div>
            </div>
        </div>
    </div>
    <!-- Preloader-start-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-level-up-alt"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="header-fixed-height"></div>
        <div class="header-top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <div class="header-top-left">
                            <ul class="list-wrap">
                                <li>{{@$staticHeaderData->welcome_text}}</li>
                                <li><i class="fas fa-phone-alt"></i><a href="tel:{{@$staticContactInfo->company_phone}}">{{@$staticContactInfo->company_phone}}</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:{{@$staticContactInfo->company_email}}">{{@$staticContactInfo->company_email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <div class="header-top-right">
                            <div class="header-social">
                                <ul class="list-wrap">
                                    @if(@$staticSocialMediaData->facebook)
                                    <li><a href="{{$staticSocialMediaData->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->instagram)
                                    <li><a href="{{$staticSocialMediaData->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->linkedin)
                                    <li><a href="{{$staticSocialMediaData->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->youtube)
                                    <li><a href="{{$staticSocialMediaData->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->tiktok)
                                    <li><a href="{{$staticSocialMediaData->tiktok}}"><i class="fab fa-tiktok"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="menu-area menu-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('uploads/staticpage/'.@$staticHeaderData->company_logo) }}"
                                            alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li><a href="/">Home</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('servicesFacilitation')}}">Facilitation</a></li>
                                                <li><a href="{{route('servicesLearning')}}">Learning</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Other Services</a>
                                            <ul class="sub-menu">
                                                @foreach ($otherServices as $item)
                                                <li><a href="{{$item->link}}" target="__blank">{{$item->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="/about">About us</a>
                                        </li>
                                        <li><a href="/blog">Blog</a>
                                        </li>
                                        <li><a href="/kontak">Kontak</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul class="list-wrap">
                                        <li class="header-btn"><a href="{{@$staticHeaderData->button_link}}" class="btn">{{@$staticHeaderData->button_text}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="/"><img src="{{ asset('frontend/img/logo/logo_02.png') }}"
                                            alt="Logo"></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <main>
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <!-- JS here -->
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/gsap.js') }}"></script>
    <script src="{{ asset('frontend/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('frontend/js/SplitText.js') }}"></script>
    <script src="{{ asset('frontend/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('frontend/js/tg-cursor.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    @yield('script')
</body>

</html>
