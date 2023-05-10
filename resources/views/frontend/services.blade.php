@extends('frontend.layouts.main')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Service Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about-area inner-about-area pt-90 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                    <div class="about-img-wrap">
                        <img src="{{ asset('frontend/img/images/testimonial_img.jpg') }}" alt=""
                            class="wow fadeInRight" data-wow-delay=".4s">
                        <div class="about-experiences-wrap">
                            <div class="experiences-item">
                                <div class="icon">
                                    <img src="{{ asset('frontend/img/icon/about_icon01.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">We have more than 10 years of experiences</h6>
                                </div>
                            </div>
                            <div class="experiences-item">
                                <div class="icon">
                                    <img src="{{ asset('frontend/img/icon/about_icon02.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">We use professional and experienced person</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-25">
                            <span class="sub-title">Team Learning</span>
                            <h2 class="title">Elevate Your Team To Higher Level</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered
                            alteration in some form, by injected humour, or randomised word which don't look even slightly
                            believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- approaches-area -->
    <section class="work-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Development Process</span>
                        <h2 class="title">Our Process of Excellence</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('frontend/img/images/work_img01.png') }}" alt="">
                            <h4 class="number">01</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">Plan for Session</h2>
                            <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('frontend/img/images/work_img02.png') }}" alt="">
                            <h4 class="number">02</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">Schedule Estimate</h2>
                            <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('frontend/img/images/work_img03.png') }}" alt="">
                            <h4 class="number">03</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">Install New Consulting</h2>
                            <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('frontend/img/images/work_img04.png') }}" alt="">
                            <h4 class="number">04</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">Event Delivery</h2>
                            <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- approaches-area-end -->

    <!-- subservices-area left -->
    <section class="testimonial-area pt-115 pb-90 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="testimonial-img">
                        <img src="{{ asset('frontend/img/images/testimonial_img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title text-center text-xl-start">Strategic Plan</span>
                            <h2 class="title tg-element-title text-center text-xl-start">Some of Our Respected Happy Clients
                                Says</h2>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-item text-center text-xl-start">
                                <p>There are many varation of paissages of Lorem as the Ipum available but our majority have
                                    sufferied alterations in some form, by our by injected hsumour randomised worids which
                                    don't looks even slightly there as believable. If you going to use a passage of Lorem
                                    Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-60">
                <div class="col-lg-6 wow fadeInLeft d-visible d-lg-none d-xl-none" data-wow-delay=".2s">
                    <div class="testimonial-img">
                        <img src="{{ asset('frontend/img/images/testimonial_img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pe-xl-5">
                    <div class="testimonial-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title text-center text-xl-end">Problem Solving</span>
                            <h2 class="title tg-element-title text-center text-xl-end">Some of Our Respected</h2>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-item text-center text-xl-end">
                                <p>There are many varation of paissages of Lorem as the Ipum available but our majority have
                                    sufferied alterations in some form, by our by injected hsumour randomised worids which
                                    don't looks even slightly there as believable. If you going to use a passage of Lorem
                                    Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft d-none d-lg-block d-xl-block" data-wow-delay=".2s">
                    <div class="testimonial-img">
                        <img src="{{ asset('frontend/img/images/testimonial_img.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subservices-area-end -->

    <!-- method-area -->
    <section class="support-area pt-60 pb-60 bg-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Our Method</span>
                        <h2 class="title">Ways to Deliver Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="support-item">
                        <div class="support-icon">
                            <img src="{{ asset('frontend/img/icon/support_icon01.svg') }}" alt="">
                        </div>
                        <div class="support-content">
                            <h4 class="title">Quick Response</h4>
                            <p>There are many variations of passages Ipsum available but the</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="support-item">
                        <div class="support-icon">
                            <img src="{{ asset('frontend/img/icon/support_icon02.svg') }}" alt="">
                        </div>
                        <div class="support-content">
                            <h4 class="title">Quick Response</h4>
                            <p>There are many variations of passages Ipsum available but the</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="support-item">
                        <div class="support-icon">
                            <img src="{{ asset('frontend/img/icon/support_icon03.svg') }}" alt="">
                        </div>
                        <div class="support-content">
                            <h4 class="title">Quick Response</h4>
                            <p>There are many variations of passages Ipsum available but the</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- support-area-end -->

    <!-- widget-area -->
    <section class="services-details-area pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-6">
                    <aside class="services-sidebar">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <div class="services-widget">
                                    <h4 class="widget-title">Our Brochures Download</h4>
                                    <div class="download-wrap">
                                        <a href="#" download target="_blank"><i
                                                class="fas fa-cloud-download-alt"></i>Service Details.pdf<br>65 KB</a>
                                        <a href="#" download target="_blank"><i class="fas fa-file-pdf"></i>Company
                                            Profile.pdf<br>48 KB</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                @include('frontend.component.contact-widget')
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- services-details-area-end -->



    <div class="area-bg-four" data-background="{{ asset('frontend/img/bg/area_bg04.jpg') }}">

        <!-- project-area -->
        <section class="project-area-four pt-0">
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
                                    <h2 class="title"><a href="/project">Replacement of Analyst</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Analyst</a></li>
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
                                    <h2 class="title"><a href="/project">Fixing of Analytic Damage</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Analytic</a></li>
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
                                    <h2 class="title"><a href="/project">Modern Analyticing Style</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Analytic</a></li>
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
                                    <h2 class="title"><a href="/project">Fixing of Analytic Damage</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="/project">Analytic</a></li>
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

        <!-- brand-area -->
        <div class="inner-brand-area inner-brand-two pb-60 pt-120">
            <div class="container">
                <div class="row brand-active-three">
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('frontend/img/brand/brand_img01.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('frontend/img/brand/brand_img02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('frontend/img/brand/brand_img03.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('frontend/img/brand/brand_img04.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('frontend/img/brand/brand_img05.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('frontend/img/brand/brand_img06.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('frontend/img/brand/brand_img03.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->
    </div>
@endsection
