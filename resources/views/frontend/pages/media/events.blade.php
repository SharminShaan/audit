@extends('frontend.layouts.master')
@section('title', 'Events')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Events
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend//frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="News Letter">
            <img src="{{ asset('frontend//frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="News Letter">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    {{-- Events --}}
    <section class="services-area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Gain a Success With Us!</span>
                        <h2 class="title tg-element-title">We have already served a good number of members from a wide range
                            of sectors. Some of sectors are listed below</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                    <div class="services-item-three">
                        <div class="services-thumb-three membership">
                            <a href="services-details.html"><img
                                    src="{{ asset('/frontend/assets/images/newsletter-events/event2.jpg') }}"
                                    class="img-fluid" alt="Japan Bangladesh"></a>
                        </div>
                        <div class="services-content-three">
                            <h4 class="title">The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants</h4>
                            <p>The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants showed a great
                                performance in winning our first cricket match of BCACP Cricket Tournament-2023. Hope for
                                the best for the next match!!
                                Man of the match is Ashraful Alam Hasan for his fantastic knock of 85* runs!!!!!</p>
                            <div class="overlay-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                        </div>
                    </div>

                    {{-- Registration --}}
                    <a href="{{ route('frontend.index', ) }}">
                        <button class="text-center" > Register Now</button>
                    </a>

                </div>



            </div>
        </div>
        <div class="services-shape-four">
            <img src="{{ asset('/frontend/assets/img/services/h4_services_shape.png') }}" alt=""
                data-aos="fade-left" data-aos-delay="200">
        </div>
    </section>

@endsection
