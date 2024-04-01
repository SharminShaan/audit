@extends('frontend.layouts.master')
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title" data-aos="fade-down" data-aos-delay="0">News Letter
                                </h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                                        <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">News Letter</li>
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
             <!-- membership-area -->
             <section class="services-area-three">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                                <span class="sub-title tg-element-title">Gain a Success With Us!</span>
                                <h2 class="title tg-element-title">Only raising policy rate may not tame inflation Say economists at ICAB Roundtable Discussion</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                            <div class="services-item-three">
                                <div class="services-thumb-three membership">
                                    <a href="services-details.html"><img src="{{ asset('frontend/assets/images/newsletter-events/icab.jpg')}}" class="img-fluid" alt="ICAB"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                            <div class="services-item-three">
                                <!-- <div class="services-thumb-three">
                                    <a href="services-details.html"><img src="{{ asset('frontend/assets/images/ICAB.jpg')}}" alt="ICAB"></a>
                                </div> -->
                                <div class="services-content-three">
                                    <h4 class="title"><a href="services-details.html">ICAB - The Institute of Chartered Accountants of Bangladesh</a></h4>
                                    <p>Although some measures have been taken in monetary policy to deal with the current economic crisis, the exchange rate is still not stable. In this situation, the opportunity of controlling inflation in Bangladesh has become very limited. Experts believe that the ongoing monetary policy will not play much role in controlling inflation. Economists and businessmen have called for strong initiatives on the part of lawmakers in addition to increasing the decision-making skills of the central bank to overcome economic challenges.

                                        Only a slight rise in the policy rate, which is the rate at which the central bank lends money to commercial banks, may not tame inflationary pressure as there are many reasons for elevated price levels, economists said yesterday.

                                        The exchange and interest rates should be left to market forces, a top economist reiterated his call, as he argued the shift would act as "shock therapy" to stabilise the stressed macro-economy.</p>
                                    <div class="overlay-icon">
                                        <i class="flaticon-protection"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <p>They made the comments at a roundtable discussion on "Monetary Policy (January-June 2024)", organised by the Institute of Chartered Accountants of Bangladesh (ICAB) at its auditorium on 31 January 2024.

                        The Bangladesh Bank raised the policy rate by 25 basis points to 8 percent for the second half of the FY24.

                        Primarily, there was demand-pull inflation, but now it is turning into cost-push inflation, said Prof Shamsul Alam, former state minister for the Ministry of Planning, GoB.

                        So, bringing inflation rate within the targeted level by only raising the policy rate will be tough, he said while speaking as the chief guest.

                        Mr. Alam also recommended reducing import tariffs in order to contain inflation, and reducing expenditure by lowering cost and time overruns for projects.</p>
                    </div>
                </div>
                <div class="services-shape-four">
                    <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png')}}" alt="" data-aos="fade-left" data-aos-delay="200">
                </div>
            </section>
            <!-- newsletter-area-end -->
@endsection
