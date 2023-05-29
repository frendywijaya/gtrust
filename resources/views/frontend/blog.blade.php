@extends('frontend.layouts.main')

@section('css')
<style>
    .categories-list li.active a{
        color: #f8ae18 !important;
    }
    .pagination li.disabled.page-item a {
        pointer-events: none;
        cursor: default;
        background-color: #F4F4F4 !important;
        border-color: #F4F4F4 !important;
    }
</style>
@endsection

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
                                    <a href="{{route('blog.detail',$blog->slug)}}"><img src="{{ asset($path.$blog->image) }}" style="center" width="464" height="435" alt="image"></a>
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
                    @if (!$isSearch) 
                    {!! $blogs->links('pagination.default') !!}
                    @endif
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10">
                    <aside class="blog-sidebar">
                        <div class="blog-widget">
                            <div class="sidebar-search">
                                <h4 class="widget-title">Search</h4>
                                <form action="{{route('blog.search')}}" method="GET">
                                    <input id="search" type="text" name="q" placeholder="Search" value="{{ @$_GET['q'] }}">
                                    <input type="hidden" name="category" value="{{ @$_GET['category'] }}">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Categories</h4>
                            <div class="categories-list">
                                <ul class="list-wrap">
                                    @foreach ($categories as $category)
                                        <li class="{{ @$_GET['category'] == $category->id ? 'active' : '' }}">
                                            <a href="{{route('blog.search','q='.@$_GET['q'].'&category='.$category->id)}}">
                                                {{$category->title}} 
                                                <span>({{$category->blogs->count()}})</span>
                                            </a>
                                        </li>
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

