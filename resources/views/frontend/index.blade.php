@extends('frontend.layouts.master')
@section('content')
 <!-- Carousel Start -->
 <section class="slide">
    <div class="container-fluid p-0 ">
        <div id="header-carousel" class="carousel " data-bs-ride="carousel ">
            <div class="carousel-inner">
                @foreach($slider as $key => $row)
                <div class="carousel-item @if($key+1 ==1) active @endif ">

                        {{-- <img class="w-100 img-fluid carouselimg" src="{{ asset('frontend/assets/images/slider.jpg')}}" alt="SliderImage"> --}}
                        <img class="w-100 img-fluid carouselimg" src="{{asset('backendsite/images/slider/'.$row->slideimage)}}" alt="SliderImage">

                            <div class="carousel-caption slidercaption">
                              <div class="coontainer">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="banner-content-two text-center">
                                            {{-- <span class="sub-title" data-aos="fade-down" >We Are Expert In This Field</span> --}}
                                            <span class="sub-title" data-aos="fade-down" >{{$row->subheading}}</span>
                                            {{-- <h2 class="title " data-aos="fade-up" data-aos-delay="0">We want to become trusted leader in the market.</h2> --}}
                                            <h2 class="title " data-aos="fade-up" data-aos-delay="0">{{$row->heading}}</h2>
                                            <p data-aos="fade-up" class="sliderpara text-white" data-aos-delay="0"> We assist the investors how to maintain the Good governance, keep compliance and to ensure the local rules and regulations for doing the successful business. </p>
                                            <div class="banner-btn sliderbtn justify-content-center">
                                                <a href="about.html" class="btn text-center" data-aos="fade-right" data-aos-delay="10">About Us</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                         </div>
                </div>
@endforeach
                {{-- <div class="carousel-item">
                        <img class="w-100 img-fluid" src="{{ asset('frontend/assets/images/slider1.jpg') }}" alt="SliderImage">
                            <div class="carousel-caption slidercaption">
                              <div class="coontainer">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="banner-content-two text-center">
                                            <span class="sub-title" data-aos="fade-down" >We Are Expert In This Field</span>
                                            <h2 class="title " data-aos="fade-up" data-aos-delay="0">We want to become trusted leader in the market.</h2>
                                            <p data-aos="fade-up" class="sliderpara text-white" data-aos-delay="0"> We assist the investors how to maintain the Good governance, keep compliance and to ensure the local rules and regulations for doing the successful business. </p>
                                            <div class="banner-btn sliderbtn justify-content-center ">
                                                <a href="about.html" class="btn text-center" data-aos="fade-right" data-aos-delay="10">About Us</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                         </div>
                </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon slideicon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon slideicon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="banner-follow-wrap  ">
            <!-- <h6 >Follow us</h6> -->
            <a href="https://aaconsultingtech.com/tax" target="_blank" class="text-white title"><i class=""></i>Tax</a>
            <ul class="list-wrap ">

                <li  data-bs-toggle="tooltip" data-bs-placement="left" title="Call Us:  +88 01790 700 404 "><a href="tel:+88 01790 700 404"><i class="fa-solid fa-phone"></i></a></li>
                <li class="listwraplocation" data-bs-toggle="tooltip" data-bs-placement="left" title="“Z-Tower” (5th Floor), Plot # 4, Road # 132, 54, Gulshan Avenue, Gulshan- 1, Dhaka- 1212, Bangladesh "><a href="#" ><i class="fa-solid fa-location-dot"></i></a></li>

            </ul>
        </div>
    </div>
  </section>
  <!-- news sticker start -->
  <div class="news-container">
    <div class="title">
        Breaking News
    </div>
    <ul>
        <li>
            <a href="newsletter.html">The Institute of Chartered Accountants of Bangladesh (ICAB)</a>
        </li>

        <li>
          <a href="">Enlisted as Panel of Auditor’s for auditing Banks and Non-Bank Financial Institutions.</a>
        </li>

        <li>
           <a href="">Enlisted as CA Firm for auditing financial statements of all NGO-MFIs.</a>
        </li>
    </ul>
</div>
  <!-- news sticker end -->
    <!-- about-area -->
    <section class="about-area-three">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="about-img-wrap-three">
                        <!-- image must be 439 * 508 -->
                        <img src="{{ asset('frontend/assets/images/whoweare1.jpg') }}" alt="CompanyExperience">
                         <!-- image must be 247*247 -->
                        <img src="{{ asset('frontend/assets/images/whoweare.jpg') }}" alt="IAKCompanyInfo" >
                        <div class="experience-wrap" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="title">30 <span>Years</span></h2>
                            <p>Of Experience in This Finance Advisory Company.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-three">
                        <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                            <span class="sub-title" data-aos="fade-down" data-aos-delay="100">Who We Are </span>
                            <h2 class="title tg-element-title">IAK has significant exposure in providing taxation</h2>
                        </div>
                        <p class="info-one" >Islam Aftab Kamrul & Co., Chartered Accountants (IAK) was Established in 1993, under
                            The Institute of Chartered Accountants of Bangladesh (ICAB) with a mission to continually adding value by
                             helping clients succeed under the firm’s name and style of Islam Aftab Kamrul & Co., Chartered Accountants
                              (IAK). Initially, two founding partners (Senior Fellow members of the Institute of Chartered Accountants
                               of Bangladesh – (ICAB)) started their independent practice as public accountants and the firm is in public
                                practice for more than 29 years. The then largest partnership firm was founded with a vision to build an
                                 institution which would foster an environ- ment for leadership, continuous growth, learning,
                                 and collaborations.</p>
                        <div class="about-list-two">
                            <ul class="list-wrap " >
                                <li><i class="fas fa-arrow-right"></i>CA Qualiffied Consultant</li>
                                <li><i class="fas fa-arrow-right"></i>IT Consultant</li>
                                <li><i class="fas fa-arrow-right"></i>Business & Corporate Advisory</li>
                                <li><i class="fas fa-arrow-right"></i>Taxation & VAT Service</li>
                            </ul>
                        </div>
                        <p class="" data-aos="fade-up" data-aos-delay="100">Over the past the firm has become one of the leading and most
                            reputable chartered accountancy firms in Bangladesh with global affiliations. At present, IAK has four partners whose expertise in
                            audit, accounting, review, business consulting, business process outsourcing, technology solutions and taxation has established the
                            firm as a multidisciplinary organization.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-wrap-two">
            <img src="{{ asset('frontend/assets/img/images/h2_about_shape01.png') }}" alt="IAKCompanyInfo">
            <img src="{{ asset('frontend/assets/img/images/h2_about_shape02.png') }}" alt="IAKCompanyInfo">
            <img src="{{ asset('frontend/assets/img/images/h2_about_shape03.png') }}" alt="IAKCompanyInfo" data-aos="fade-left" data-aos-delay="500">
        </div>
    </section>
    <!-- about-area-end -->
    <!-- services-area -->
    <section class="services-area-two services-bg-two" data-background="{{ asset('frontend/assets/img/bg/services_bg02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title-two mb-60 tg-heading-subheading animation-style3">
                        <span class="sub-title" data-aos="fade-down" data-aos-delay="100">Professional Services We Offer</span>
                        <h2 class="title tg-element-title">IAK is one of the top firms of chartered accountants in the country</h2>
                        <p data-aos="fade-up" data-aos-delay="100">We go beyond the traditional auditor and client relationship by becoming your Trusted Business Advisor.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="view-all-btn text-end mb-30">
                        <a href="services.html" class="btn" data-aos="fade-zoomIn" data-aos-delay="100">See All Service</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-thumb-two">
                            <!-- image must be 247/340 -->
                            <img src="{{ asset('frontend/assets/images/audit-and-assurance-services.png') }}" alt="IAKservices">

                        </div>
                        <div class="services-content-two">
                            <div class="icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>
                            <h2 class="title"><a href="services-details.html">Audit & Assurance</a></h2>
                            <p>Trade License, Trade Mark Registration (class/category wise), Export Registration Certificate (ERC), Import Registration .</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-thumb-two">
                            <!-- image must be 247/340 -->
                            <img src="{{ asset('frontend/assets/images/taxation.png') }}" class="img-fluid" alt="IAKservices">
                        </div>
                        <div class="services-content-two">
                            <div class="icon">
                                <i class="flaticon-calculator"></i>
                            </div>
                            <h2 class="title"><a href="taxationVat.html">Taxation & VAT Services</a></h2>
                            <p>Preparation and submission of Company’s income tax return, attending hearing at DCT’s level from time to time and finalization of Income Tax assessment, VAT registration,.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                    <div class="services-item-two ">
                        <div class="services-thumb-two iakservice">
                            <img src="{{ asset('frontend/assets/images/humanresource.jpg') }}" alt="IAKservices">
                        </div>
                        <div class="services-content-two">
                            <div class="icon">
                                <i class="flaticon-money"></i>
                            </div>
                            <h2 class="title"><a href="human-resource.html">Human Resources & others Services </a></h2>
                            <p>Preparation of monthly financial statement in accordance with International Accounting Standard (IAS)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                    <div class="services-item-two">
                        <div class="services-thumb-two">
                            <img src="{{ asset('frontend/assets/images/companymaintains.webp') }}" alt="IAK services">
                        </div>
                        <div class="services-content-two">
                            <div class="icon">
                                <i class="flaticon-layers"></i>
                            </div>
                            <h2 class="title"><a href="advisory.html">Company  Advisory</a></h2>
                            <p>Name clearance, preparing & registration Memorandum & Article of Association in accordance with Companies Act. Share Certificate (4 color) & Share Register Printing and initial….</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->
    <!-- virual office tour start -->
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="virtualtitle">
                        <h1>Virtual Tour</h1>
                        <p>ISLAM AFTAB KAMRUL & CO.
                            Chartered Accountants</p>
                    </div>
                    <div class="image360 border-5 bg-dark">

                        <iframe src="https://www.google.com/maps/embed?pb=!4v1709715340681!6m8!1m7!1svykH5KHR4jK_pZ6XT6_C_w!2m2!1d23.78134505669539!2d90.41695108812661!3f126.381966!4f0!5f0.7820865974627469"
                        width="100%" height="600px"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR VALUED CLIENTS start -->
    <section class="client mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-8 text-center mt-5 mb-5">
                    <div class="section-title-two mb-30 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Our Valued Clients</span>
                        <h2 class="title tg-element-title">Get an insurance quote From Our Expertise</h2>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                    <div class="estimate-content text-center">

                        <div class="estimate-tab-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Banks, Financial Institutions </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="vehicles-tab" data-bs-toggle="tab" data-bs-target="#vehicles-tab-pane" type="button" role="tab" aria-controls="vehicles-tab-pane" aria-selected="false">Multinational Companies
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="health-tab" data-bs-toggle="tab" data-bs-target="#health-tab-pane" type="button" role="tab" aria-controls="health-tab-pane" aria-selected="false">Private Companies
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="life-tab" data-bs-toggle="tab" data-bs-target="#life-tab-pane" type="button" role="tab" aria-controls="life-tab-pane" aria-selected="false">NGOs</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="estimate-form-wrap">
                                        <h1>Banks, Financial Institutions</h1>
                                          <!-- brand-area -->
                                        <div class="brand-aera-five pt-t pb-5">
                                            <div class="container">
                                                <div class="row brand-active">
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture1.png') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture2.png') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture3.jpg') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture4.jpg') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture5.png') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture6.gif') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture7.png') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/bank finalcial/Picture8.jpg') }}" alt="Banks, Financial Institutions">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- brand-area-end -->
                                        <a href="banking.html"><button class="btn btn-three text text-center" type="submit">See More</button></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vehicles-tab-pane" role="tabpanel" aria-labelledby="vehicles-tab" tabindex="0">
                                    <div class="estimate-form-wrap">
                                        <h2>Multinational Companies</h2>
                                          <!-- brand-area -->
                                        <div class="brand-aera-five pt-t pb-5">
                                            <div class="container">
                                                <div class="row brand-active">
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/multinational/Picture21.jpg') }}" alt="Multinational Companies">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/multinational/Picture22.png') }}" alt="Multinational Companies">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/multinational/Picture23.png') }}" alt="Multinational Companies">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/multinational/Picture24.jpg') }}" alt="Multinational Companies">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/multinational/Picture25.jpg') }}" alt="Multinational Companies">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brand-item">
                                                            <img src="{{ asset('frontend/assets/images/client/multinational/Picture26.jpg') }}" alt="Multinational Companies">
                                                        </div>
                                                    </div>
                                                    <a href="banking.html"><button class="btn btn-three text text-center" type="submit">See More</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- brand-area-end -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="health-tab-pane" role="tabpanel" aria-labelledby="health-tab" tabindex="0">
                                    <div class="estimate-form-wrap">
                                        <h2>Private Companies</h2>
                                          <!-- brand-area -->
                                    <div class="brand-aera-five pt-t pb-5">
                                        <div class="container">
                                            <div class="row brand-active">
                                                <div class="col-lg-12">
                                                    <div class="brand-item">
                                                        <img src="{{ asset('frontend/assets/images/client/private/Picture10.png') }}" alt="Private Companies">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="brand-item">
                                                        <img src="{{ asset('frontend/assets/images/client/private/Picture11.jpg') }}" alt="Private Companies">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="brand-item">
                                                        <img src="{{ asset('frontend/assets/images/client/private/Picture12.png') }}" alt="Private Companies">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="brand-item">
                                                        <img src="{{ asset('frontend/assets/images/client/private/Picture9.jpg') }}" alt="Private Companies">
                                                    </div>
                                                </div>
                                                <a href="banking.html"><button class="btn btn-three text text-center" type="submit">See More</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- brand-area-end -->

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="life-tab-pane" role="tabpanel" aria-labelledby="life-tab" tabindex="0">
                                    <div class="estimate-form-wrap">
                                        <h2>NGOs</h2>

                                        <div class="row brand-active">
                                            <div class="col-lg-12">
                                                <div class="brand-item">
                                                    <img src="{{ asset('frontend/assets/images/client/Ngos/Picture27.png') }}" alt="NGOs">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="brand-item">
                                                    <img src="{{ asset('frontend/assets/images/client/Ngos/Picture28.png') }}" alt="NGOs">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="brand-item">
                                                    <img src="{{ asset('frontend/assets/images/client/Ngos/Picture29.jpg') }}" alt="NGOs">
                                                </div>
                                            </div>
                                            <a href="banking.html"><button class="btn btn-three text text-center" type="submit">See More</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                <!-- partner-area -->
                <section class="services-area-eight fix section-py-120 mt-5">
                    <div class="container custom-container-six">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-title-two text-center white-title mb-40 tg-heading-subheading animation-style3">
                                    <span class="sub-title"> Our Partner</span>
                                    <h2 class="title tg-element-title">Our expert partners will help you.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row services-active-two">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                <div class="team-item-five">
                                    <div class="team-thumb-five">
                                        <img src="{{ asset('frontend/assets/images/islampic.jpg') }}" alt="A.K.M Aftabul Islam" class="img-fluid">
                                    </div>
                                    <div class="team-content-five">
                                        <h2 class="title text-white"><a href="team-details.html">A.K.M Aftabul Islam
                                        </a></h2>
                                        <span class="text-white">Principal Partner </span>
                                        <div class="team-social-four">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                <div class="team-item-five">
                                    <div class="team-thumb-five">
                                        <img src="{{ asset('frontend/assets/images/kamrul-islampic.jpg.png') }}" alt="A.K.M Kamrul Islam" class="img-fluid">
                                    </div>
                                    <div class="team-content-five">
                                        <h2 class="title text-white"><a href="team-details.html">A.K.M Kamrul Islam
                                        </a></h2>
                                        <span class="text-white">Senior Partner </span>
                                        <div class="team-social-four">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                <div class="team-item-five">
                                    <div class="team-thumb-five">
                                        <img src="{{ asset('frontend/assets/images/saleem.jpg') }}" alt="Saleem Arungzeb Ahmed, FCA
                                        ">
                                    </div>
                                    <div class="team-content-five">
                                        <h2 class="title text-white"><a href="team-details.html">Saleem Arungzeb Ahmed
                                        </a></h2>
                                        <span class="text-white">Partner
                                        </span>
                                        <div class="team-social-four">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                <div class="team-item-five">
                                    <div class="team-thumb-five">
                                        <img src="{{ asset('frontend/assets/images/jibon.png') }}" alt="Jibon Chandra Das">
                                    </div>
                                    <div class="team-content-five">
                                        <h2 class="title text-white"><a href="team-details.html">Jibon Chandra Das</a></h2>
                                        <span class="text-white">Director
                                        </span>
                                        <div class="team-social-four">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                <div class="team-item-five">
                                    <div class="team-thumb-five">
                                        <img src="{{ asset('frontend/assets/images/rezaul1.jpg') }}" alt="Md Rezaul Haq ACA
                                        ">
                                    </div>
                                    <div class="team-content-five">
                                        <h2 class="title text-white"><a href="team-details.html">Md Rezaul Haq ACA
                                        </a></h2>
                                        <span class="text-white">Associate Director & GM  </span>
                                        <div class="team-social-four">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                                <div class="team-item-five">
                                    <div class="team-thumb-five">
                                        <img src="{{ asset('frontend/assets/images/shubhra.png') }}" alt="Shubhra Paul ACA ">
                                    </div>
                                    <div class="team-content-five">
                                        <h2 class="title text-white"><a href="team-details.html">Shubhra Paul ACA   </a></h2>
                                        <span class="text-white">Associate Director & GM
                                        </span>
                                        <div class="team-social-four">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-shape-wrap">
                        <img src="{{ asset('frontend/assets/img/services/h6_services_shape01.png') }}" alt="shape" data-aos="fade-down-left" data-aos-delay="400">
                        <img src="{{ asset('frontend/assets/img/services/h6_services_shape02.png') }}" alt="shape" data-aos="fade-up-right" data-aos-delay="400">
                    </div>
                </section>
                <!-- partner-area-end -->
     <!-- ENLISTMENT -area -->
    <section>
        <div class="brand-aera-two pb-80 mt-5 mb-5">
            <div class="container">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">ENLISTMENT</h5>
                     <h1 class="mb-0">Our Enlistment Members</h1>
                </div>
                <div class="row brand-active mt-5 ">
                    <div class="col-lg-12">
                        <div class="brand-item">
                        <a href="https://www.bb.org.bd/en/index.php" target="_blank">  <img src="{{ asset('frontend/assets/images/client/enlistment/Picture13.png') }}" alt="ENLISTMENT"> </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-item">
                           <a href="https://sec.gov.bd/" target="_blank"> <img src="{{ asset('frontend/assets/images/client/enlistment/Picture14.jpg') }}" alt="ENLISTMENT"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-item">
                            <a href="https://mra.gov.bd/" target="_blank"><img src="{{ asset('frontend/assets/images/client/enlistment/Picture15.jpg') }}" alt="ENLISTMENT"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-item">
                            <a href="http://www.ngoab.gov.bd/" target="_blank"><img src="{{ asset('frontend/assets//images/client/enlistment/Picture16.png') }}" alt="ENLISTMENT"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-item">
                            <a href="https://pksf.org.bd/" target="_blank"><img src="{{ asset('frontend/assets/images/client/enlistment/Picture17.png') }}" alt="Regulators"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-item">
                            <a href="https://www.worldbank.org/en/home" target="_blank"><img src="{{ asset('frontend/assets/images/client/enlistment/Picture18.png') }}" alt="Regulators"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-item">
                            <a href="https://www.jica.go.jp/english/" target="_blank"><img src="{{ asset('frontend/assets/images/client/enlistment/Picture19.png') }}" alt="Regulators"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-item">
                            <a href="https://www.adb.org/" target="_blank"><img src="{{ asset('frontend/assets/images/client/enlistment/Picture20.jpg') }}" alt="Regulators"></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 text-center mt-5">
                <a href="enlistment.html"><button class="btn btn-three text " type="submit">See More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- ENLISTMENT-area-end -->
    <!-- cta-area -->
    <section class="cta-area mt-5 mb-5">
        <div class="container">
            <div class="cta-inner-wrap" data-background="{{ asset('frontend/assets/img/bg/cta_bg.jpg') }}">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="cta-content">
                            <div class="cta-info-wrap">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <span>Call For More Info</span>
                                    <a href="tel:0123456789">+88 01790 700 404</a>
                                </div>
                            </div>
                            <h2 class="title">Let’s Request a Schedule For Free Consultation</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cta-btn text-end">
                            <a href="contact.html" class="btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- blog-area -->
<section class="blog-area-four pt-120 pb-90">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-title-two text-center mb-60 tg-heading-subheading animation-style2">
                <span class="sub-title tg-element-title">News & Blogs</span>
                <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                <p>Learn something more from our blog</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-4 ">
            <div class="blog-post-item-four">
                <div class="blog-post-thumb-four">
                    <!-- image must be 392/260  -->
                    <a href="blog.html"><img src="{{ asset('frontend/assets/images/newsletter events/blog1.png') }}" alt="IAK Blog"></a>
                </div>
                <div class="blog-post-content-four">
                    <a href="blog.html" class="tag">BSEC Circular</a>
                    <div class="blog-meta-two">
                        <ul class="list-wrap">
                            <li><i class="far fa-calendar"></i>January 24, 2024</li>
                            <li><i class="far fa-user"></i>by <a href="blog.html">Admin</a></li>
                        </ul>
                    </div>
                    <h4 class="title"><a href="blog.html">BSEC has issued a circular dated January 24, 2024, regarding the deadline for audit of the annual financial statements of companies ...</a></h4>
                    <a href="blog.html" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
            <div class="blog-post-item-four">
                <div class="blog-post-thumb-four">
                    <a href="blog.html"><img src="{{ asset('frontend/assets/images/newsletter events/blog2.png') }}" alt="IAK Blog"></a>
                </div>
                <div class="blog-post-content-four">
                    <a href="blog.html" class="tag">Chartered Accountants</a>
                    <div class="blog-meta-two">
                        <ul class="list-wrap">
                            <li><i class="far fa-calendar"></i>1 Jan, 2024</li>
                            <li><i class="far fa-user"></i>by <a href="blog.html">Admin</a></li>
                        </ul>
                    </div>
                    <h4 class="title"><a href="blog.html">Islam Aftab Kamrul & Co., Chartered Accountants has been enlisted by the NGO Affairs Bureau for the year 2024 and 2025.</a></h4>
                    <a href="blog.html" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
            <div class="blog-post-item-four">
                <div class="blog-post-thumb-four">
                    <a href="blog.html"><img src="{{ asset('frontend/assets/images/newsletter events/blog.png') }}" alt="IAK Blog"></a>
                </div>
                <div class="blog-post-content-four">
                    <a href="blog.html" class="tag">Employment opportunity</a>
                    <div class="blog-meta-two">
                        <ul class="list-wrap">
                            <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                            <li><i class="far fa-user"></i>by <a href="blog.html">Admin</a></li>
                        </ul>
                    </div>
                    <h4 class="title"><a href="blog.html">Employment opportunity at Islam Aftab Kamrul & Co., Chartered Accountants, Chittagong branch.</a></h4>
                    <a href="blog.html" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- blog-area-end -->
@endsection
