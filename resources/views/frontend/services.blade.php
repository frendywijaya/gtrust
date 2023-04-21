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

    <!-- services-details-area -->
    <section class="services-details-area pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="services-details-wrap">
                        <div class="services-details-thumb">
                            <img src="{{ asset('frontend/img/services/services_details01.jpg') }}" alt="">
                        </div>
                        <div class="services-details-content">
                            <h2 class="title">Tailored Facilitation Services for Every Needs</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in somes form, by injected humour, or randomised words which don't look
                                even slightlcy believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum
                                generators on the Internet tend to repeat</p>
                            <div class="services-process-wrap">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-8">
                                        <div class="services-process-img">
                                            <img src="{{ asset('frontend/img/services/sp_img01.jpg') }}" alt="">
                                            <img src="{{ asset('frontend/img/services/sp_img02.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-process-content">
                                            <h2 class="title">Our Service Process</h2>
                                            <ul class="list-wrap">
                                                <li>
                                                    <div class="services-process-item">
                                                        <div class="icon">
                                                            <img src="{{ asset('frontend/img/icon/sp_icon01.svg') }}" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="title">Creative Analysis</h4>
                                                            <p>Creative analysis is important. It is common for marketers
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="services-process-item">
                                                        <div class="icon">
                                                            <img src="{{ asset('frontend/img/icon/sp_icon02.svg') }}" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="title">Design & Scratches</h4>
                                                            <p>Creative analysis is important. It is common for marketers
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="services-process-item">
                                                        <div class="icon">
                                                            <img src="{{ asset('frontend/img/icon/sp_icon01.svg') }}" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="title">Development & Delivery</h4>
                                                            <p>Creative analysis is important. It is common for marketers
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="title-two">We Hope You Find What You are Looking for</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majorty have suffered
                                alteration in as some form by injected humour, or randomised words which don't look even
                                slightly believable. If you are going a to use as passage of Lorem Ipsum, you need to be
                                sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum
                                generators on the Internet tend to repeat</p>
                            <div class="service-benefits-wrap">
                                <div class="row">
                                    <div class="col-lg-7 order-0 order-lg-2">
                                        <div class="benefits-img">
                                            <img src="{{ asset('frontend/img/services/sb_img01.jpg') }}" alt="">
                                            <img src="{{ asset('frontend/img/services/sb_img02.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="benefits-content">
                                            <h2 class="title">Our Service Benefits</h2>
                                            <p>There are many variations of passages of Lorem by injected humour, or
                                                randomised words whic Lorem Ipsum, you need to.</p>
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check-circle"></i>In id diam nec nisi congue tincidunt
                                                </li>
                                                <li><i class="fas fa-check-circle"></i>Vestibulum tincidunt arcu vel nisl
                                                </li>
                                                <li><i class="fas fa-check-circle"></i>Provide the best Analytic services</li>
                                                <li><i class="fas fa-check-circle"></i>Sed tristique lorem non tesque</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <aside class="services-sidebar">
                        <div class="services-widget">
                            <h4 class="widget-title">Our All Service</h4>
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Strategic Plan
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Problem Solving
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Workplace Conflict
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Behavioural Intervention
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Service Details
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-widget">
                            <h4 class="widget-title">Our Brochures Download</h4>
                            <div class="download-wrap">
                                <a href="#" download target="_blank"><i
                                        class="fas fa-cloud-download-alt"></i>Service Details.pdf<br>65 KB</a>
                                <a href="#" download target="_blank"><i
                                        class="fas fa-file-pdf"></i>Company Profile.pdf<br>48 KB</a>
                            </div>
                        </div>

                        @include('frontend.component.contact-widget')

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- services-details-area-end -->

    <!-- support-area -->
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
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img01.jpg') }}" alt=""></a>
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
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img02.jpg') }}" alt=""></a>
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
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img03.jpg') }}" alt=""></a>
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
                                <a href="/project"><img src="{{ asset('frontend/img/project/h4_project_img02.jpg') }}" alt=""></a>
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
