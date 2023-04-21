@extends('frontend.layouts.main')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Blog Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="blog-details-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="blog-details-wrap">
                        <div class="blog-details-thumb">
                            <img src="{{ asset('frontend/img/blog/blog_details01.jpg') }}" alt="">
                        </div>
                        <div class="blog-details-content">
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li><i class="far fa-user"></i> By Admin</li>
                                    <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                    <li><i class="far fa-comments"></i>05</li>
                                    <li><i class="far fa-eye"></i>1,526 VIEWS</li>
                                </ul>
                            </div>
                            <h2 class="title">Building worker help each other with at construction site</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at it as layout. The point of using Lorem Ipsum is that it has a more
                                normal distribution.Collaboratively pontificat bleed aedge resources with inexpensive
                                methodologies globally initiate multidisciplinary compatible architectures as our
                                aspiteously repurpose leading edge growth strategies</p>

                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at it as layout. The point of using Lorem Ipsum is that it has a more
                                normal distribution.</p>

                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in a our some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going our as to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle the of text. All the
                                Lorem Ipsum generators on the Internet tend.</p>

                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in a our some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going our as to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle the of text. All the
                                Lorem Ipsum generators on the Internet tend.</p>

                            <div class="blog-details-thumb">
                                <img src="{{ asset('frontend/img/blog/blog_details01.jpg') }}" alt="">
                            </div>

                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in a our some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going our as to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle the of text. All the
                                Lorem Ipsum generators on the Internet tend.</p>
                            <div class="blog-details-bottom">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="blog-post-share">
                                            <h5 class="title">Share:</h5>
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10">
                    <aside class="blog-sidebar">
                        <div class="blog-widget">
                            <div class="sidebar-search">
                                <h4 class="widget-title">Search</h4>
                                <form action="#">
                                    <input id="search" type="text" placeholder="Search">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Recent Articles</h4>
                            <div class="rc-post-wrap">
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend/img/blog/rc_post01.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <h5 class="title"><a href="blog-details.html">Aerial view of a private house with
                                                on roof</a>
                                        </h5>
                                        <span><i class="fas fa-calendar-alt"></i>22 Jan 2023</span>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend/img/blog/rc_post02.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <h5 class="title"><a href="blog-details.html">Medium shot men working on roof
                                                presentation</a>
                                        </h5>
                                        <span><i class="fas fa-calendar-alt"></i>22 Jan 2023</span>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend/img/blog/rc_post03.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <h5 class="title"><a href="blog-details.html">Free photo cute family a roof above
                                                their head</a>
                                        </h5>
                                        <span><i class="fas fa-calendar-alt"></i>22 Jan 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Categories</h4>
                            <div class="categories-list">
                                <ul class="list-wrap">
                                    <li><a href="#">Business Consulting <span>(05)</span></a></li>
                                    <li><a href="#">Financial Investment <span>(07)</span></a></li>
                                    <li><a href="#">IT Consultations <span>(03)</span></a></li>
                                    <li><a href="#">Digital Analytics <span>(04)</span></a></li>
                                    <li><a href="#">Payment Processing <span>(02)</span></a></li>
                                    <li><a href="#">Software Solutions <span>(09)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        @include('frontend.component.contact-widget')
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->
@endsection
