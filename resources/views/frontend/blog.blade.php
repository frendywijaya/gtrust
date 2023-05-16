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
                        @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-detail"><img src="{{ asset($path.$blog->image) }}" style="center" width="464" height="435" alt="image"></a>
                                </div>
                                <div class="blog-post-content">
                                    <a href="#" class="tag">{{$blog->category->title}}</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i> By <a href="/blog-detail">{{$blog->writer}}</a></li>
                                            <li><i class="fas fa-calendar-alt"></i>{{date('d M Y', strtotime($blog->date))}}</li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-detail">{{$blog->title}}</a>
                                    </h2>
                                    <a href="/blog-detail" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- <div class="pagination-wrap mt-30">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination list-wrap">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div> --}}
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
                                    @foreach ($categories as $category)
                                        <li><a href="#">{{$category->title}} <span>({{$category->blogs->count()}})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @include('frontend.component.contact-widget')
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection

