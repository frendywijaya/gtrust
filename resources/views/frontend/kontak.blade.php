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
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="firstName" type="text" placeholder="Full Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="lastName" type="text" placeholder="Company Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="email" type="email" placeholder="Email Address*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input id="phone" type="text" placeholder="Phone Number*">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <input id="subject" type="text" placeholder="Subject">
                            </div>
                            <div class="form-grp">
                                <textarea id="message" placeholder="Your Message here"></textarea>
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
