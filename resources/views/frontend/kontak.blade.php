@extends('frontend.layouts.main')

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('uploads/staticpage/'.@$staticKontak->breadcrumb_cover_image)}}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{@$staticKontak->breadcrumb_title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{@$staticKontak->breadcrumb_title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- create alert -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- contact-area -->
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10">
                    <div class="contact-form-wrap" data-background="{{ asset('frontend/img/images/contact_form_bg.jpg') }}">
                        <h2 class="title">{{@$staticKontak->left_section_title}}</h2>
                        <p>
                            {{@$staticKontak->left_section_text}}
                        </p>

                        <!-- contact form -->


                        <form action="{{route('storeMassage')}}" class="contact-form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="firstName" type="text" name="full_name" placeholder="Full Name*" value="{{old('full_name')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="lastName" type="text" name="company_name" placeholder="Company Name*" value="{{old('company_name')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="email" type="email" name="email" placeholder="Email Address*" value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="phone" type="text" name="phone" placeholder="Phone Number*" value="{{old('phone')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <input id="subject" type="text" placeholder="Subject*" name="subject" value="{{old('subject')}}">
                            </div>
                            <div class="form-grp">
                                <textarea id="message" placeholder="Your Message here*" name="message" >
                                    {{old('message')}}
                                </textarea>
                            </div>
                            <button class="btn" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-10">
                    <div class="contact-info-wrap">
                        <h2 class="title">{{@$staticKontak->right_section_title}}</h2>
                        <p>
                            {{@$staticKontak->right_section_text}}
                        </p>
                        <ul class="list-wrap">
                            <li>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <a href="tel:{{@$staticContactInfo->company_phone}}">{{@$staticContactInfo->company_phone}}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <a href="mailto:{{@$staticContactInfo->company_email}}">{{@$staticContactInfo->company_email}}</a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Jl. Pesona Amerika I No.10,<br>Nagrak, Kec. Gn. Putri,<br>Kabupaten Bogor,<br>Jawa Barat 16967</p>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>

                    <!-- contact-map -->
                    <div id="contact-map">
                        <iframe src="{{@$staticKontak->right_section_link}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- contact-map-end -->

                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

@endsection
