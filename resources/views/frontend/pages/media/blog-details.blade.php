@extends('frontend.layouts.master')
@section('title', 'Blog Details')
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Blog Details
                                </h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}" >Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="News Letter">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="News Letter">
                </div>
            </section>
            <!-- breadcrumb-area-end -->
                 <!-- blog-details-area -->
                 <section class="blog-details-area pt-120 pb-120">
                    <div class="container">
                        <div class="blog-details-wrap">
                            <div class="row justify-content-center">
                                <div class="col-71">
                                    <div class="blog-details-thumb">
                                        <img src="{{ asset('frontend/assets/img/blog/blog-details01.jpg')}}" alt="">
                                    </div>
                                    <div class="blog-details-content">
                                        <h2 class="title"> the deadline for audit of the annual financial statements of companies</h2>
                                        <div class="blog-meta-three">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-calendar"></i>25 Jan, 2024</li>
                                                <li>by <a href="blog-details.html"> Admin</a></li>
                                                <li><i class="fas fa-tags"></i> <a href="blog.html">Finance,</a><a href="blog.html">Business</a></li>
                                                <li><i class="flaticon-speech-bubble"></i><a href="blog-details.html">05 Comments</a></li>
                                            </ul>
                                        </div>
                                        <p>BSEC has issued a circular dated January 24, 2024, regarding the deadline for audit of the annual financial statements of companies and the submission of audited financial statements to the Commission.
                                            In case of failure to submit financial statements by the deadline, the commission will take the necessary action against the non-compliant company as per the prevailing securities laws.</p>

                                        <blockquote>
                                            <p>“ BSEC has issued a circular dated January 24, 2024, ”</p>
                                        </blockquote>

                                    </div>

                                </div>
                                <div class="col-29">
                                    <aside class="blog-sidebar">
                                        <div class="sidebar-search">
                                            <form action="#">
                                                <input type="text" placeholder="Search Here . . .">
                                                <button type="submit"><i class="flaticon-search"></i></button>
                                            </form>
                                        </div>
                                        <div class="blog-widget">
                                            <h4 class="bw-title">Pages Link</h4>
                                            <div class="bs-cat-list">
                                                <ul class="list-wrap">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">Company Profile</a></li>
                                                    <li><a href="newsletter.html">News Letter</a></li>
                                                    <li><a href="membership.html">Membership</a></li>
                                                    <li><a href="advisory.html">Advisory</a></li>
                                                    <li><a href="event.html">Event</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- blog-details-area-end -->
@endsection
