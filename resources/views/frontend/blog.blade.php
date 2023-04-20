@extends('frontend.layouts.main')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="inner-blog-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img01.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Team Building</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Building Management help each other with at Data site</a>
                                    </h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img02.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Management Work</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Full shot Marketer working together with Plan</a></h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img03.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Data Analyst</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Hard hatswork at the heavy manufacturing factory
                                            industrial</a></h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img04.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Team Building</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Building Management help each other with at Data site</a></h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img05.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Management Work</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Full shot Marketer working together with Plan</a></h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img06.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Data Analyst</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Hard hatswork at the heavy industry manufacturing factory industrial</a></h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img07.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Management Work</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Hard hatswork at the heavy manufacturing factory
                                    industrial</a></h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset('frontend/img/blog/blog_img08.jpg') }}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">Data Analyst</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">Admin</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>23 Dec 2022</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">Full shot Marketer working together with Plan</a></h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap mt-30">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination list-wrap">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </nav>
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
                        <div class="blog-widget widget-bg" data-background="{{ asset('frontend/img/blog/widget_bg.jpg') }}">
                            <h4 class="widget-title">Need Help?</h4>
                            <div class="sidebar-content">
                                <h4 class="title">Tell Us Your Problem To Us</h4>
                                <p>Sit amet consectetur adipiscing elseds do eius mod tempor incididunt</p>
                                <a href="contact.html" class="btn btn-two">Contact Us</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection

