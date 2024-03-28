 <!-- footer-area -->
 <footer>
    <div class="footer-area-two footer-bg-two" data-background="{{ asset('frontend/assets/img/bg/h2_footer_bg.jpg') }}">
        <div class="footer-top-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-7">
                        <div class="footer-widget">
                            <div class="fw-logo">
                                <a href="index.html"><img src="{{ asset('backendsite/images/'.$seeting->logo)}}" alt="ISLAM AFTAB KAMRUL logo"></a>
                            </div>
                            <div class="footer-content">
                                <p>{{$seeting->paragraph}}</p>
                                <div class="footer-info">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="content">
                                                <a href="#">{{$seeting->address}}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-clock"></i>
                                            </div>
                                            <div class="content">
                                                <p>{{$seeting->opening}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Menu</h4>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="about.html">Our Company</a></li>
                                    <li><a href="contact.html">Careers</a></li>
                                    <li><a href="contact.html">Media</a></li>
                                    <li><a href="blog.html">Our Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Quick Links</h4>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">How it’s Work</a></li>
                                    <li><a href="contact.html">Partners</a></li>
                                    <li><a href="contact.html">Articleship</a></li>
                                    <li><a href="contact.html">Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="footer-widget">
                            <h4 class="fw-title">Our Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Sign up to Privitar’s weekly newsletter to get the latest updates.</p>
                                <form action="#">
                                    <input type="email" placeholder="enter your e-mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <div class="footer-social footer-social-two">
                                    <ul class="list-wrap">
                                        <li><a href="{{$seeting->facebook}} "><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$seeting->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$seeting->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="{{$seeting->googleplus}}"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li><a href=" {{$seeting->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text-two text-center">
                            <p>Copyright © 2024 | <a href="https://aaconsultingtech.com/">A & A Consulting Limited</a>  - All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->
