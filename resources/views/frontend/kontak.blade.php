@extends('frontend.layouts.main')

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb-shape" data-background="{{ asset('frontend/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                        <h2 class="title">Reach Us</h2>
                        <p>Send us a message and we' ll respond as soon as possible</p>
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
                        <h2 class="title">Need Any Help?</h2>
                        <p>Call us or message and we' ll respond as soon as possible</p>
                        <ul class="list-wrap">
                            <li>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <a href="tel:0123456789">+(323) 9847 3847 383</a>
                                        {{-- <a href="tel:0123456789">+(434) 5466 5467 443</a> --}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <a href="mailto:infoyour@gmail.com">infoyour@gmail.com</a>
                                        {{-- <a href="mailto:infoyour@gmail.com">domaininfo@gmail.com</a> --}}
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.430528228668!2d106.9531491!3d-6.380106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69950b11849ac1%3A0xd23d71163a5944ff!2sG-Trust%20Learning!5e0!3m2!1sen!2sid!4v1681966708924!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- contact-map-end -->

                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

@endsection
