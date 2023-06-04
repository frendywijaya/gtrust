@extends('frontend.layouts.main')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('uploads/staticpage/'.@$staticAbout->breadcrumb_cover_image)}}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{@$staticAbout->breadcrumb_title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{@$staticAbout->breadcrumb_title}}</li>
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
                        <img src="{{ asset('uploads/staticpage/'.@$staticAbout->about_company_image_1)}}" alt="" class="wow fadeInRight"
                            data-wow-delay=".4s">
                        <img src="{{ asset('uploads/staticpage/'.@$staticAbout->about_company_image_2)}}" alt="" class="wow fadeInRight"
                            data-wow-delay=".2s">
                        <div class="about-experiences-wrap">
                            <div class="experiences-item">
                                <div class="icon">
                                    <img src="{{ asset('frontend/img/icon/about_icon01.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">{{@$staticAbout->about_company_image_text_1}}</h6>
                                </div>
                            </div>
                            <div class="experiences-item">
                                <div class="icon">
                                    <img src="{{ asset('frontend/img/icon/about_icon02.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">{{@$staticAbout->about_company_image_text_2}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-25">
                            <span class="sub-title">{{@$staticAbout->about_company_section_subtitle}}</span>
                            <h2 class="title">{{@$staticAbout->about_company_title}}</h2>
                        </div>
                        <p>
                            {!! @$staticAbout->about_company_section_text !!}
                        </p>
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
                            <img src="{{ asset('uploads/staticpage/'.@$staticAbout->approaches_slot_1)}}" alt="">
                            <h4 class="number">01</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticAbout->approaches_title_1}}</h2>
                            <p>
                                {{@$staticAbout->approaches_text_1}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('uploads/staticpage/'.@$staticAbout->approaches_slot_2)}}" alt="">
                            <h4 class="number">02</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticAbout->approaches_title_2}}</h2>
                            <p>
                                {{@$staticAbout->approaches_text_2}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('uploads/staticpage/'.@$staticAbout->approaches_slot_3)}}" alt="">
                            <h4 class="number">03</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticAbout->approaches_title_3}}</h2>
                            <p>
                                {{@$staticAbout->approaches_text_3}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="work-item">
                        <div class="work-thumb">
                            <img src="{{ asset('uploads/staticpage/'.@$staticAbout->approaches_slot_4)}}" alt="">
                            <h4 class="number">04</h4>
                        </div>
                        <div class="work-content">
                            <h2 class="title">{{@$staticAbout->approaches_title_4}}</h2>
                            <p>
                                {{@$staticAbout->approaches_text_4}}
                            </p>
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
                                <img src="{{ asset('uploads/staticpage/'.@$staticAbout->history_image_large)}}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('uploads/staticpage/'.@$staticAbout->history_video_cover_image)}}" alt="">
                                <a href="{{@$staticAbout->history_video_link}}" class="play-btn popup-video pulse"><i class="fas fa-play"></i></a>
                            </li>
                            <li>
                                <img src="{{ asset('uploads/staticpage/'.@$staticAbout->history_image_small)}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="history-content">
                        <div class="section-title mb-20">
                            <span class="sub-title">{{@$staticAbout->history_section_subtitle}}</span>
                            <h2 class="title">{{@$staticAbout->history_section_title}}</h2>
                        </div>
                        <p>
                            {{@$staticAbout->history_section_subtitle}}
                        </p>
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
                            <span class="sub-title">{{@$staticAbout->our_team_section_subtitle}}</span>
                            <h2 class="title">{{@$staticAbout->our_team_section_title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="team-item">
                            <div class="team-thumb">
                                <a href="javascript:;" onclick="showTeamDesc(this)" class="team-desc" data-team="{{$team}}" >
                                    <img src="{{ asset($teamPath.@$team->image) }}"
                                        alt=""></a>
                            </div>
                            <div class="team-content" onclick="showTeamDesc(this)" data-team="{{$team}}">
                                <h2 class="title"><a>{{$team->name}}</a></h2>
                                <span>{{$team->position}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                            <span class="sub-title">{{@$staticAbout->testimonials_section_subtitle}}</span>
                            <h2 class="title">{{@$staticAbout->testimonials_section_title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial-inner">
                            <div class="testimonial-active-two">
                                @foreach ($testimonials as $testimonial)
                                <div class="testimonial-item-two">
                                    <div class="testimonial-avatar-two">
                                        <img src="{{ asset($testimoniPath.$testimonial->image) }}"
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
                                        <p>{{$testimonial->testimoni}}.</p>
                                        <div class="content-bottom">
                                            <h4 class="title">{{$testimonial->name}}</h4>
                                            <span>{{$testimonial->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

    </div>
    <!-- area-bg-end -->

    <!-- brand-area -->
    <div class="inner-brand-area pt-120 pb-120">
        <div class="container">
            <div class="row brand-active-three">
                @foreach ($brandLogos as $item)
                <div class="col-12">
                    <div class="brand-item">
                        <img src="{{ asset('uploads/brand-logo/'.$item->image) }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- Modal -->
    <div class="modal fade" id="teamDesc" tabindex="-1" aria-labelledby="teamDescLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h5 class="modal-title" id="teamDescLabel">Team Profile</h5>
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

@section('script')
    <script>
        // document ready
        $(document).ready(function() {
            // init
        });

        function showTeamDesc(that) {
            var teamDesc = $(that).data('team');
            $('#teamDesc .modal-body').find('h4').text(teamDesc.name);
            $('#teamDesc .modal-body').find('p').text(teamDesc.description);
            $('#teamDesc').modal('show');
        }
    
    </script>
@endsection
