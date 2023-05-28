@extends('frontend.layouts.main')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('uploads/staticpage/'.@$staticService->breadcrumb_cover_image)}}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{@$staticService->breadcrum_title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{@$staticService->breadcrum_title}}</li>
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
                        <img src="{{ asset('uploads/staticpage/'.@$staticService->about_facilitation_image_cover) }}" alt=""
                            class="wow fadeInRight" data-wow-delay=".4s">
                        <div class="about-experiences-wrap">
                            <div class="experiences-item">
                                <div class="icon">
                                    <img src="{{asset('frontend/img/icon/about_icon01.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">{{@$staticService->about_section_text_1}}</h6>
                                </div>
                            </div>
                            <div class="experiences-item">
                                <div class="icon">
                                    <img src="{{asset('frontend/img/icon/about_icon02.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">{{@$staticService->about_section_text_2}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-25">
                            <span class="sub-title">{{@$staticService->about_section_subtitle}}</span>
                            <h2 class="title">{{@$staticService->about_section_title}}</h2>
                        </div>
                        <p>{{@$staticService->about_section_text}}</p>
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
                        <span class="sub-title">Our Approaches</span>
                        <h2 class="title">Our Process of Excellence</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('uploads/staticpage/'.@$staticService->process_slot_1)}}" alt="">
                            <h4 class="number">01</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticService->process_title_1}}</h2>
                            <p>
                                {{@$staticService->process_text_1}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('uploads/staticpage/'.@$staticService->process_slot_2)}}" alt="">
                            <h4 class="number">02</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticService->process_title_2}}</h2>
                            <p>
                                {{@$staticService->process_text_2}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('uploads/staticpage/'.@$staticService->process_slot_3)}}" alt="">
                            <h4 class="number">03</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticService->process_title_3}}</h2>
                            <p>
                                {{@$staticService->process_text_3}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('uploads/staticpage/'.@$staticService->process_slot_4)}}" alt="">
                            <h4 class="number">04</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticService->process_title_4}}</h2>
                            <p>
                                {{@$staticService->process_text_4}}
                            </p>
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
            @foreach ($subServices as $subService)
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="testimonial-img">
                        <img src="{{ asset($subServicePath.$subService->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title text-center text-xl-start">{{$subService->subtitle}}</span>
                            <h2 class="title tg-element-title text-center text-xl-start">{{$subService->title}}</h2>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-item text-center text-xl-start">
                                <p>
                                    {{$subService->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                            <img src="{{ asset('uploads/staticpage/'.@$staticService->method_slot_1) }}" alt="">
                        </div>
                        <div class="support-content">
                            <h4 class="title">{{@$staticService->method_title_1}}</h4>
                            <p>{{@$staticService->method_text_1}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="support-item">
                        <div class="support-icon">
                            <img src="{{ asset('uploads/staticpage/'.@$staticService->method_slot_2) }}" alt="">
                        </div>
                        <div class="support-content">
                            <h4 class="title">{{@$staticService->method_title_2}}</h4>
                            <p>{{@$staticService->method_text_2}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="support-item">
                        <div class="support-icon">
                            <img src="{{ asset('uploads/staticpage/'.@$staticService->method_slot_3) }}" alt="">
                        </div>
                        <div class="support-content">
                            <h4 class="title">{{@$staticService->method_title_3}}</h4>
                            <p>{{@$staticService->method_text_3}}</p>
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
                                                class="{{@$staticService->download_icon_1}}"></i>Service Details.pdf<br>65 KB</a>
                                        <a href="#" download target="_blank"><i class="{{@$staticService->download_icon_2}}"></i>Company
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
                    <div class="col-lg-12">
                        <div class="project-item-four">
                            <div class="project-thumb-four">
                                <a href="{{route('project.detail',$project->slug)}}"><img src="{{ asset($projectPath.$project->image) }}"
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

        <!-- brand-area -->
        <div class="inner-brand-area inner-brand-two pb-60 pt-120">
            <div class="container">
                <div class="row brand-active-three">
                    @foreach ($brandLogos as $item)
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset($brandLogoPath.$item->image) }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- brand-area-end -->
    </div>
@endsection
