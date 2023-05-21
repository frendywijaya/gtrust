@extends('frontend.layouts.main')

@section('content')
    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-shape" data-background="{{ asset('frontend/img/slider/slider_shape.png') }}"></div>
        <div class="slider-img-wrap">
            <div class="sliderNav-active">
                @foreach ($sliders as $item)
                <div class="slider-img-item" data-background="{{ asset($pathSlider.$item->image) }}"></div>
                @endforeach
            </div>
        </div>
        <div class="slider-content-wrap">
            <div class="sliderContent-active">
                @foreach ($sliders as $item)
                <div class="slider-content">
                    <span class="sub-title" data-animation-in="fadeInUp" data-delay-in=".2" data-duration-in=".6">{{$item->subtitle}}</span>
                    <h2 class="title" data-animation-in="fadeInUp" data-delay-in=".4" data-duration-in=".6">{{$item->title}}</h2>
                    <p data-animation-in="fadeInUp" data-delay-in=".6" data-duration-in=".6">{{$item->content}}</p>
                    <a href="{{$item->button_link}}" class="btn" data-animation-in="fadeInUp" data-delay-in=".8"
                        data-duration-in=".6">{{$item->button_text}}</a>
                </div>
                @endforeach
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
                            @foreach ($brandLogos as $item)
                            <div class="col-12">
                                <div class="brand-item">
                                    <img src="{{ asset('uploads/brand-logo/'.$item->image) }}" alt="{{$item->image}}">
                                </div>
                            </div>
                            @endforeach
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
                            <li><img src="{{ asset('uploads/staticpage/'.@$staticHome->about_image_1)}}" alt=""
                                    class="wow fadeInLeft" data-wow-delay=".4s"></li>
                        </ul>
                        <ul class="list-wrap">
                            <li><img src="{{ asset('uploads/staticpage/'.@$staticHome->about_image_2)}}" alt=""
                                    class="wow fadeInRight" data-wow-delay=".2s"></li>
                            <li><img src="{{ asset('uploads/staticpage/'.@$staticHome->about_image_3) }}" alt=""
                                    class="wow fadeInUp" data-wow-delay=".4s"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-two">
                        <div class="section-title mb-30">
                            <span class="sub-title">{{@$staticHome->about_subtitle}}</span>
                            <h2 class="title">{{@$staticHome->about_title}}</h2>
                        </div>
                        <p>{{@$staticHome->description}}</p>
                        <div class="about-list-two">
                            <ul class="list-wrap">
                                <li class="list-item">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/img/icon/h2_about_icon01.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">{{@$staticHome->about_image_text_1}}</h5>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/img/icon/h2_about_icon02.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="title">{{@$staticHome->about_image_text_2}}</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="{{@$staticHome->about_button_link}}" class="btn">{{@$staticHome->about_button_text}}</a>
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
                        <span class="sub-title">{{@$staticHome->service_section_subtitle}}</span>
                        <h2 class="title">{{@$staticHome->service_section_title}}</h2>
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
                                        <img src="{{ asset('uploads/staticpage/'.@$staticHome->service_facilitation_image) }}"
                                            alt="">
                                    </div>
                                    <div class="services-content-three">
                                        <div class="section-title mb-30">
                                            <h2 class="title">{{@$staticHome->service_facilitation_headline}}</h2>
                                        </div>
                                        <p>
                                            {{@$staticHome->service_facilitation_text}}
                                        </p>
                                        <div class="services-list">
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                            </ul>
                                        </div>
                                        <a href="{{@$staticHome->service_facilitation_button_link}}" class="btn">{{@$staticHome->service_facilitation_button_text}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="building-tab-pane" role="tabpanel"
                                aria-labelledby="building-tab" tabindex="0">
                                <div class="services-item-three">
                                    <div class="services-thumb-three">
                                        <img src="{{ asset('uploads/staticpage/'.@$staticHome->service_learning_image) }}"
                                            alt="">
                                    </div>
                                    <div class="services-content-three">
                                        <div class="section-title mb-30">
                                            <h2 class="title">{{@$staticHome->service_learning_headline}}</h2>
                                        </div>
                                        <p>
                                            {{@$staticHome->service_learning_text}}
                                        </p>
                                        <div class="services-list">
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Business improvement</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                                <li><i class="fas fa-check-circle"></i>Network Administration</li>
                                            </ul>
                                        </div>
                                        <a href="{{@$staticHome->service_learning_button_link}}" class="btn">{{@$staticHome->service_learning_button_text}}</a>
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
                                    <span class="count odometer" data-count="{{@$staticHome->statistic_number_1}}"></span>
                                    <p>{{@$staticHome->statistic_text_1}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="{{@$staticHome->statistic_number_2}}"></span>
                                    <p>{{@$staticHome->statistic_text_2}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="{{@$staticHome->statistic_number_3}}"></span>
                                    <p>{{@$staticHome->statistic_text_3}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="{{@$staticHome->statistic_number_4}}"></span>
                                    <p>{{@$staticHome->statistic_text_4}}</p>
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
                    @foreach ($projects as $project)
                    <div class="col-lg-4">
                        <div class="project-item-four">
                            <div class="project-thumb-four">
                                <a href="{{route('project.detail',$project->slug)}}"><img src="{{ asset($pathProject.$project->image) }}"
                                        alt=""></a>
                            </div>
                            <div class="project-content-four">
                                <div class="content-left">
                                    <h2 class="title"><a href="{{route('project.detail',$project->slug)}}">{{$project->title}}</a></h2>
                                    <ul class="list-wrap">
                                        <li><a href="#">{{$project->category}}</a></li>
                                    </ul>
                                </div>
                                <div class="content-right">
                                    <a href="{{route('project.detail',$project->slug)}}" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                            <span class="sub-title">{{@$staticHome->contact_subtitle}}</span>
                            <h2 class="title">{{@$staticHome->contact_title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex justify-content-center">
                    <div class="newsletter-form">
                        <a href="{{@$staticHome->contact_button_link}}">
                            <button type="button" class="btn btn-two">{{@$staticHome->contact_button_text}}</button>
                        </a>
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
                @foreach ($blogs as $blog)
                <div class="col-xl-4 col-md-6">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="{{route('blog.detail',$blog->slug)}}"><img src="{{ asset($pathBlog.$blog->image) }}" style="center" width="464" height="435" alt="image"></a>
                        </div>
                        <div class="blog-post-content">
                            <a href="#" class="tag">{{$blog->category->title}}</a>
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="far fa-user"></i> By <a href="{{route('blog.detail',$blog->slug)}}">{{$blog->writer}}</a></li>
                                    <li><i class="fas fa-calendar-alt"></i>{{date('d M Y', strtotime($blog->date))}}</li>
                                </ul>
                            </div>
                            <h2 class="title"><a href="{{route('blog.detail',$blog->slug)}}">{{$blog->title}}</a>
                            </h2>
                            <a href="{{route('blog.detail',$blog->slug)}}" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
