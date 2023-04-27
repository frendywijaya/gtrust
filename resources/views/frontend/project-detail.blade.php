@extends('frontend.layouts.main')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Project Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- project-details-area -->
    <section class="project-details-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-details-wrap">
                        <div class="project-details-thumb">
                            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner" style="width:100%; height: 400px !important;">
                                    <div class="carousel-item active" data-bs-interval="4000">
                                        <img src="{{ asset('frontend/img/slider/slider03.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="{{ asset('frontend/img/slider/slider02.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="4000">
                                        <img src="{{ asset('frontend/img/slider/slider01.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            {{-- <img src="{{ asset('frontend/img/project/project_details01.jpg') }}" alt=""> --}}
                        </div>
                        <div class="project-details-content">
                            <h2 class="title">Team Building Borobudur Kompas Jurnalis</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in somes form, by injected humour, or randomised words which don't look
                                even slightlcy believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum
                                generators on the Internet tend to repeat</p>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum gen
                                erators on the Internet tend our as a to repeat predefined chunks as necessary</p>

                            {{-- <div class="project-challenge-wrap">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="challenge-content">
                                        <h2 class="title">The Challenge of Project</h2>
                                        <p class="info-three">Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum gen erators on the Internet tend our as a to repeat predefined chunks as necessary</p>
                                        <p class="info-four">making this the firsttrue generator our on the Internet. It uses a dictionary of over as words, combined with a</p>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="challenge-img">
                                        <img src="{{ asset('frontend/img/project/project_details02.jpg') }}" alt="">
                                        <img src="{{ asset('frontend/img/project/project_details03.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <h2 class="title-two mt-30">Project requirement</h2>
                        <p class="info-five">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in somes form, by injected humour, or randomised words which don't look even slightlcy believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p> --}}
                            {{-- <ul class="list-wrap">
                            <li><i class="fas fa-check-circle"></i>Usability testing existing products</li>
                            <li><i class="fas fa-check-circle"></i>Systems reviews</li>
                            <li><i class="fas fa-check-circle"></i>Technical stakeholder interviews</li>
                            <li><i class="fas fa-check-circle"></i>Usability testing existing products</li>
                        </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="project-sidebar">
                        <div class="project-widget">
                            <h4 class="widget-title">Project Details</h4>
                            <div class="project-info-list">
                                <ul class="list-wrap">
                                    <li><span>Project Date</span> 27 Dec 2022</li>
                                    <li><span>Client</span> Kompas</li>
                                    <li><span>Participants</span> 50 Journalist</li>
                                    <li><span>Goal</span> Value Internalization</li>
                                    <li><span>Activity</span> Hiking at Mount Bromo</li>
                                </ul>
                            </div>
                        </div>
                        @include('frontend.component.contact-widget')
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- project-details-area-end -->
@endsection
