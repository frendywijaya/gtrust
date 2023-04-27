@extends('frontend.layouts.main')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about-area inner-about-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                    <div class="about-img-wrap">
                        <img src="{{ asset('frontend/img/images/about_img01.jpg') }}" alt="" class="wow fadeInRight"
                            data-wow-delay=".4s">
                        <img src="{{ asset('frontend/img/images/about_img02.jpg') }}" alt="" class="wow fadeInRight"
                            data-wow-delay=".2s">
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
                            <span class="sub-title">About Company</span>
                            <h2 class="title">We’re Committed to Deliver Perfection</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered
                            alteration in some form, by injected humour, or randomised word which don't look even slightly
                            believable.</p>
                        <div class="about-list">
                            <ul class="list-wrap">
                                <li><i class="fas fa-check"></i>32k Partners have worked us.</li>
                                <li><i class="fas fa-check"></i>Professional and experienced human resources.</li>
                                <li><i class="fas fa-check"></i>Provide the best consulting services</li>
                            </ul>
                        </div>
                        {{-- <a href="about.html" class="btn">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- work-area -->
    <section class="work-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Our Approaches</span>
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
    <!-- work-area-end -->

    <!-- history-area -->
    <section class="history-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="history-img-wrap">
                        <ul class="list-wrap">
                            <li>
                                <img src="{{ asset('frontend/img/images/history_img01.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/img/images/history_img02.jpg') }}" alt="">
                                <a href="#" class="play-btn popup-video pulse"><i class="fas fa-play"></i></a>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/img/images/history_img03.jpg') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="history-content">
                        <div class="section-title mb-20">
                            <span class="sub-title">Our Consulting History</span>
                            <h2 class="title">Consulting when an unknown printer took to make type book</h2>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majori our as have
                            suffered alteration in some form, by injected humour, or randomised word which don't look even
                            slightly believable.</p>
                        <div class="history-list">
                            <ul class="list-wrap">
                                <li><i class="fas fa-check-circle"></i>Technology management</li>
                                <li><i class="fas fa-check-circle"></i>Consulting Solutions</li>
                                <li><i class="fas fa-check-circle"></i>Modern Worker Working here</li>
                                <li><i class="fas fa-check-circle"></i>Quick Response</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- history-area-end -->

    <!-- area-bg -->
    <div class="area-bg-five" data-background="{{ asset('frontend/img/bg/area_bg05.jpg') }}">

        <!-- team-area -->
        <section class="inner-team-area pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Professional Team</span>
                            <h2 class="title">Professional Team Member</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @for($i = 0; $i < 4; $i++)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="team-item">
                            <div class="team-thumb">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ asset('frontend/img/team/team_img01.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="team-content" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <h2 class="title"><a>Star Hasugian</a></h2>
                                <span>Founder</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>
        <!-- team-area-end -->

        <!-- testimonial-area -->
        <section class="inner-testimonial-area parallax pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">Our Testimonial</span>
                            <h2 class="title">What Our Client Say</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial-inner">
                            <div class="testimonial-active-two">
                                <div class="testimonial-item-two">
                                    <div class="testimonial-avatar-two">
                                        <img src="{{ asset('frontend/img/images/h2_testi_avatar01.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonial-content-two">
                                        <div class="content-top">
                                            <div class="icon">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>There are many varation of paissages of Lorem as the Ipum available but our
                                            majority have sufferied alterations in some form, by our by injected hsumour
                                            randomised worids which don't looks even slightly there as believable. If you
                                            going to use a passage of Lorem Ipsum.</p>
                                        <div class="content-bottom">
                                            <h4 class="title">Darrell Steward</h4>
                                            <span>Consulting Expert</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item-two">
                                    <div class="testimonial-avatar-two">
                                        <img src="{{ asset('frontend/img/images/h2_testi_avatar02.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonial-content-two">
                                        <div class="content-top">
                                            <div class="icon">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum are many varation of paissages of Lorem as the Ipum available but our
                                            majority have sufferied alterations in some form, by our by injected hsumour
                                            randomised worids which don't looks even slightly there as believable. If you
                                            going to use a passage of Lorem Ipsum.</p>
                                        <div class="content-bottom">
                                            <h4 class="title">Robert C. Simmons</h4>
                                            <span>Consulting Expert</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item-two">
                                    <div class="testimonial-avatar-two">
                                        <img src="{{ asset('frontend/img/images/h2_testi_avatar03.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonial-content-two">
                                        <div class="content-top">
                                            <div class="icon">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Lorem Ipsum are many varation of paissages of Lorem as the Ipum available but our
                                            majority have sufferied alterations in some form, by our by injected hsumour
                                            randomised worids which don't looks even slightly there as believable. If you
                                            going to use a passage of Lorem Ipsum.</p>
                                        <div class="content-bottom">
                                            <h4 class="title">Karikoka Ahli</h4>
                                            <span>Executive Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="testimonial-avatar-wrap">
                    <ul class="list-wrap">
                        <li>
                            <img src="{{ asset('frontend/img/images/h4_testi_avatar01.png') }}" class="layer" data-depth="0.1" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/images/h4_testi_avatar02.png') }}" class="layer" data-depth="0.2" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/images/h4_testi_avatar03.png') }}" class="layer" data-depth="0.05" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/images/h4_testi_avatar03.png') }}" class="layer" data-depth="0.2" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/images/h4_testi_avatar02.png') }}" class="layer" data-depth="0.05" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/images/h4_testi_avatar01.png') }}" class="layer" data-depth="0.1" alt="">
                        </li>
                    </ul>
                </div> --}}
            </div>
        </section>
        <!-- testimonial-area-end -->

    </div>
    <!-- area-bg-end -->

    <!-- brand-area -->
    <div class="inner-brand-area pt-120 pb-120">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h5 class="modal-title" id="exampleModalLabel">Team Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Star Hasugian</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum sem eget purus dapibus, eget molestie nisi dignissim. Quisque id cursus magna. Morbi tellus diam, rhoncus eu interdum non, malesuada egestas felis. Nulla vehicula sed ex eget pharetra. Pellentesque viverra risus vitae quam condimentum vehicula.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
