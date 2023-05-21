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
                                </div>
                                <div class="carousel-inner" style="width:100%; height: 400px !important;">
                                    <div class="carousel-item active" data-bs-interval="4000">
                                        <img src="{{ asset($path.$project->image) }}" class="d-block w-100" alt="...">
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
                            <h2 class="title">{{$project->title}}</h2>
                            {!! $project->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="project-sidebar">
                        <div class="project-widget">
                            <h4 class="widget-title">Project Details</h4>
                            <div class="project-info-list">
                                <ul class="list-wrap">
                                    <li><span>Project Date</span> {{date('d M Y', strtotime($project->date))}}</li>
                                    <li><span>Client</span> {{$project->client}}</li>
                                    <li><span>Participants</span> {{$project->participants}}</li>
                                    <li><span>Goal</span> {{$project->goal}}</li>
                                    <li><span>Activity</span> {{$project->activity}}</li>
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
