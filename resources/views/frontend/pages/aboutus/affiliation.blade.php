@extends('frontend.layouts.master')
@section('content')
<div id="preloader">
    <div id="loading-center">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
</div>
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Affiliation</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Affiliation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="Affiliation">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="Affiliation">
    </div>
</section>

<!-- affiliation key-area -->
<section class="about-area-two pt-5 pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-6 order-0 order-lg-2">
                <div class="">
                    <div class="main-img">
                        <img src="{{ asset('frontend/assets/images/affiliation.png')}}" alt="enlistment">

                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6 ">
                <div class="about-content-two">
                    <div class="section-title mb-30 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Core Affiliation</span>
                        <h2 class="title tg-element-title ">INTERNATIONAL AFFILIATION  </h2>
                    </div>
                    <p>An affiliation audit tax typically refers to an examination conducted by tax authorities to determine whether a business relationship between two or more entities qualifies as an "affiliated group" for tax purposes.</p>
                <p>Islam Aftab Kamrul & Co., Chartered Accountants (IAK) is a
                    member firm of Key Will Group - Global Accounting and Consulting Network. Key Will Group offers services in the areas of
                    Audit, Advisory, Consultancy services in more than 90 Countries all over the world. Key will group is pioneer in Business
                    Consultancy and Tax Consultancy in the world especially in
                    Hong Kong.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="about-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/about_shape01.png')}}" alt="enlistment">
        <img src="{{ asset('frontend/assets/img/images/about_shape02.png')}}" alt="enlistment">
    </div>
</section>
<!-- affiliation key-area-end -->

@endsection
