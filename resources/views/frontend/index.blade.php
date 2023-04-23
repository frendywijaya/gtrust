@extends('frontend.layouts.main')

@section('content')
    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-shape" data-background="{{ asset('frontend/img/slider/slider_shape.png') }}"></div>
        <div class="slider-img-wrap">
            <div class="sliderNav-active">
                <div class="slider-img-item" data-background="{{ asset('frontend/img/slider/slider03.jpg') }}"></div>
                <div class="slider-img-item" data-background="{{ asset('frontend/img/slider/slider02.jpg') }}"></div>
            </div>
        </div>
        <div class="slider-content-wrap">
            <div class="sliderContent-active">

                <div class="slider-content">
                    {{-- <h1 class="overly-text">Our <br> Services</h1> --}}
                    <span class="sub-title" data-animation-in="fadeInUp" data-delay-in=".2" data-duration-in=".6">Company Facilitation</span>
                    <h2 class="title" data-animation-in="fadeInUp" data-delay-in=".4" data-duration-in=".6">Fun Way to Challenge Serious Problems</h2>
                    <p data-animation-in="fadeInUp" data-delay-in=".6" data-duration-in=".6">Our mbrace change are thriving,
                        building bigger, better,faster, and products than ever Our mbrace.</p>
                    <a href="/services" class="btn" data-animation-in="fadeInUp" data-delay-in=".8"
                        data-duration-in=".6">Discover More</a>
                </div>
                <div class="slider-content">
                    {{-- <h1 class="overly-text">Our <br> Services</h1> --}}
                    <span class="sub-title" data-animation-in="fadeInUp" data-delay-in=".2" data-duration-in=".6">Team Learning</span>
                    <h2 class="title" data-animation-in="fadeInUp" data-delay-in=".4" data-duration-in=".6">Unique
                        Strategic Development</h2>
                    <p data-animation-in="fadeInUp" data-delay-in=".6" data-duration-in=".6">Our mbrace change are thriving,
                        building bigger, better,faster, and products than ever Our mbrace.</p>
                    <a href="/services" class="btn" data-animation-in="fadeInUp" data-delay-in=".8"
                        data-duration-in=".6">Discover More</a>
                </div>
            </div>
        </div>
        <div class="banner-nav"></div>

        <!-- brand-area -->
        <div class="brand-area-two">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7">
                        <h6 class="brand-title">Trusted by established brands</h6>
                        <div class="row brand-active-two">
                            <div class="col-12">
                                <div class="brand-item">
                                    <img src="{{ asset('frontend/img/brand/h2_brand_img01.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="brand-item">
                                    <img src="{{ asset('frontend/img/brand/h2_brand_img02.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="brand-item">
                                    <img src="{{ asset('frontend/img/brand/h2_brand_img03.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="brand-item">
                                    <img src="{{ asset('frontend/img/brand/h2_brand_img02.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="brand-item">
                                    <img src="{{ asset('frontend/img/brand/h2_brand_img03.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

    </section>
    <!-- slider-area-end -->

    <!-- about-area -->
    <section class="about-area-two parallax about-bg" data-background="{{ asset('frontend/img/bg/about_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-0 order-lg-2">
                    <div class="about-img-wrap-two">
                        <ul class="list-wrap">
                            <li>
                                <div class="year-experience-wrap wow fadeInDown" data-wow-delay=".2s">
                                    <div class="icon"><img src="{{ asset('frontend/img/icon/h2_about_icon03.svg') }}"
                                            alt=""></div>
                                    <h2 class="title">18 Years <span>Experience</span></h2>
                                </div>
                            </li>
                            <li><img src="{{ asset('frontend/img/images/h2_about_img01.jpg') }}" alt=""
                                    class="wow fadeInLeft" data-wow-delay=".4s"></li>
                        </ul>
                        <ul class="list-wrap">
                            <li><img src="{{ asset('frontend/img/images/h2_about_img02.jpg') }}" alt=""
                                    class="wow fadeInRight" data-wow-delay=".2s"></li>
                            <li><img src="{{ asset('frontend/img/images/h2_about_img03.jpg') }}" alt=""
                                    class="wow fadeInUp" data-wow-delay=".4s"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-two">
                        <div class="section-title mb-30">
                            <span class="sub-title">About Our Company</span>
                            <h2 class="title">We’re Committed to Deliver Excellence</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered
                            alteration in some form, by injected humour, or randomised word which don't look even slightly
                            believable.</p>
                        <div class="about-list-two">
                            <ul class="list-wrap">
                                <li class="list-item">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/img/icon/h2_about_icon01.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Value Proposition Here</h5>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/img/icon/h2_about_icon02.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Our Core Time Values Lenthlyness</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="/about" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services-area-three bg-main">

        <div class="services-bg jarallax" data-background="{{ asset('frontend/img/bg/services_bg.jpg') }}"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center white-title mb-60">
                        <span class="sub-title">Discover Our Services</span>
                        <h2 class="title">See Our Services Details</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="services-nav-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="building-tab" data-bs-toggle="tab"
                                    data-bs-target="#building-tab-pane" type="button" role="tab"
                                    aria-controls="building-tab-pane" aria-selected="true">Facilitation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="maintenance-tab" data-bs-toggle="tab"
                                    data-bs-target="#maintenance-tab-pane" type="button" role="tab"
                                    aria-controls="maintenance-tab-pane" aria-selected="false">Learning</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="building-tab-pane" role="tabpanel"
                                aria-labelledby="building-tab" tabindex="0">
                                <div class="services-item-three">
                                    <div class="services-thumb-three">
                                        <img src="{{ asset('frontend/img/services/h4_services_img01.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="services-content-three">
                                        <div class="section-title mb-30">
                                            <h2 class="title">Bringing New Business Solutions And Ideas</h2>
                                        </div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                        </p>
                                        <div class="services-list">
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                            </ul>
                                        </div>
                                        <a href="/services" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="maintenance-tab-pane" role="tabpanel"
                                aria-labelledby="maintenance-tab" tabindex="0">
                                <div class="services-item-three">
                                    <div class="services-thumb-three">
                                        <img src="{{ asset('frontend/img/services/h4_services_img02.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="services-content-three">
                                        <div class="section-title mb-30">
                                            <h2 class="title">Bringing New Business Solutions And Ideas</h2>
                                        </div>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                        </p>
                                        <div class="services-list">
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                            </ul>
                                        </div>
                                        <a href="/services" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- counter-area -->
            <div class="counter-area-three">
                <div class="container pt-120">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="1500"></span>
                                    <p>Project Complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="8562"></span>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="450"></span>
                                    <p>Experienced Staff</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="38"></span>
                                    <p>Awards Win</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
        </div>
    </section>
    <!-- services-area-end -->

    <!-- area-bg -->
    <div class="area-bg-four" data-background="{{ asset('frontend/img/bg/area_bg04.jpg') }}">

        <!-- project-area -->
        <section class="project-area-four">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Latest Projects</span>
                            <h2 class="title">Explore Our Latest Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row project-active-two">
                    <div class="col-lg-4">
                        <div class="project-item-four">
                            <div class="project-thumb-four">
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img01.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="project-content-four">
                                <div class="content-left">
                                    <h2 class="title"><a href="/project">Replacement of Management</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Management</a></li>
                                        <li><a href="/project">Ideas</a></li>
                                    </ul>
                                </div>
                                <div class="content-right">
                                    <a href="/project" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item-four">
                            <div class="project-thumb-four">
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img02.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="project-content-four">
                                <div class="content-left">
                                    <h2 class="title"><a href="/project">Fixing of Management Damage</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Management</a></li>
                                        <li><a href="/project">Ideas</a></li>
                                    </ul>
                                </div>
                                <div class="content-right">
                                    <a href="/project" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item-four">
                            <div class="project-thumb-four">
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img03.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="project-content-four">
                                <div class="content-left">
                                    <h2 class="title"><a href="/project">Modern Management Style</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Management</a></li>
                                        <li><a href="/project">Ideas</a></li>
                                    </ul>
                                </div>
                                <div class="content-right">
                                    <a href="/project" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-item-four">
                            <div class="project-thumb-four">
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img02.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="project-content-four">
                                <div class="content-left">
                                    <h2 class="title"><a href="/project">Fixing of Management Damage</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Management</a></li>
                                        <li><a href="/project">Ideas</a></li>
                                    </ul>
                                </div>
                                <div class="content-right">
                                    <a href="/project" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-area-end -->
    </div>

    <!-- newsletter-area -->
    <section class="newsletter-area jarallax newsletter-bg"
        data-background="{{ asset('frontend/img/bg/newsletter_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 d-flex justify-content-center">
                    <div class="newsletter-content">
                        <div class="section-title white-title-two">
                            <span class="sub-title">Hubungi Kami</span>
                            <h2 class="title">Need More Information?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex justify-content-center">
                    <div class="newsletter-form">
                        <form action="#">
                            {{-- <div class="form-grp">
                                <input type="text" placeholder="Name*">
                            </div>
                            <div class="form-grp">
                                <input type="text" placeholder="Phone*">
                            </div> --}}
                            <button type="submit" class="btn btn-two">Contact Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

    <!-- blog-area -->
    <section class="blog-area pt-115 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Our News</span>
                        <h2 class="title">Read Our Latest News & Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img01.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <a href="/blog" class="tag">Quality Materials</a>
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                    <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                </ul>
                            </div>
                            <h2 class="title"><a href="/blog-detail">Co-worker help each other with at business
                                    site</a></h2>
                            <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img02.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <a href="/blog" class="tag">House Management Work</a>
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                    <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                </ul>
                            </div>
                            <h2 class="title"><a href="/blog-detail">Full shot Managementers working together with
                                    helmets</a></h2>
                            <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img03.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <a href="/blog" class="tag">Business Analyst</a>
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                    <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                </ul>
                            </div>
                            <h2 class="title"><a href="/blog-detail">Hard hatswork at the heavy manufacturing
                                    factory industrial</a></h2>
                            <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
