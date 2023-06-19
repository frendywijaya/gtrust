<!-- footer-area -->
<footer>
    <div class="footer-area footer-bg" data-background="{{ asset('frontend/img/bg/footer_bg.jpg') }}">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-7">
                        <div class="footer-widget">
                            <h2 class="fw-title">{{@$staticFooterData->footer_title}}</h2>
                            <div class="footer-content">
                                <p>{{@$staticFooterData->footer_text}}</p><br>
                                <p><b>{{@$staticFooterData->footer_tagline}}</b></p>
                                {{-- <div class="footer-newsletter">
                                    <h4 class="title">Subscribe to Our Newsletter</h4>
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-two">Subscribe</button>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-2 col-lg-4 col-md-5 col-sm-6">
                        <div class="footer-widget">
                            <h2 class="fw-title">Our Services</h2>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="{{route('home')}}"><i class="fas fa-angle-double-right"></i>Home</a></li>
                                    <li><a href="{{route('about')}}"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                                    <li><a href="{{route('servicesFacilitation')}}"><i class="fas fa-angle-double-right"></i>Strategic Facilitation</a></li>
                                    <li><a href="{{route('servicesLearning')}}"><i class="fas fa-angle-double-right"></i>Professional Learning</a></li>
                                    <li><a href="{{route('blog.index')}}"><i class="fas fa-angle-double-right"></i>News & Articles</a></li>
                                    <li><a href="{{route('kontak')}}"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h2 class="fw-title">Get In Touch With Us!</h2>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="contact.html"><i class="fas fa-phone"></i>{{@$staticContactInfo->company_phone}}</a></li>
                                    <li><a href="contact.html"><i class="fas fa-envelope"></i>{{@$staticContactInfo->company_email}}</a></li>
                                    <li><a href="contact.html"><i class="fas fa-map-marker"></i>{!! @$staticContactInfo->company_address !!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-logo-area">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('uploads/staticpage/'.@$staticFooterData->footer_logo) }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-contact">
                                <div class="icon">
                                    <i class="ph ph-whatsapp-logo"></i>
                                </div>
                                <div class="content">
                                    <span>Phone No</span>
                                    <a href="https://api.whatsapp.com/send?phone={{ str_replace(' ','', @$staticContactInfo->company_phone) }}&text=Hello Gtrust!">{{@$staticContactInfo->company_phone}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="footer-social">
                                <h2 class="title">Follow Us:</h2>
                                <ul class="list-wrap">
                                    @if(@$staticSocialMediaData->facebook)
                                    <li><a href="{{$staticSocialMediaData->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->instagram)
                                    <li><a href="{{$staticSocialMediaData->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->linkedin)
                                    <li><a href="{{$staticSocialMediaData->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->youtube)
                                    <li><a href="{{$staticSocialMediaData->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                    @endif
                                    @if(@$staticSocialMediaData->tiktok)
                                    <li><a href="{{$staticSocialMediaData->tiktok}}"><i class="fab fa-tiktok"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright-text">
                            <p>© Gtrust 2023. All Right Reserved</p>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="footer-bootom-menu">
                            <ul class="list-wrap">
                                <li><a href="contact.html">Privacy Policy</a></li>
                                <li><a href="contact.html">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->
