@extends('layout.layout')

@section('title','home')

@section('conteudo')


<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcrumb-bg.png') }}">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Service Details</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li class="active">SERVICE DETAILS</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
Service Area 02
==============================-->
<div class="service-details-area space-top space-extra-bottom overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="service-page-single">
                    <div class="page-img mb-50">
                        <img src="{{ asset('assets/img/normal/service-details1-1.png') }}" alt="img">
                    </div>
                    <div class="page-content">
                        <h2 class="page-title">Champion Boxer Training</h2>
                        <p class="mb-30">Boxers engage in intense cardiovascular exercises to build endurance and stamina. This includes activities like running, skipping rope, and high-intensity interval training (HIIT) to improve overall cardiovascular fitness. Strength and Power Training: Boxers focus on building functional strength and explosive power to deliver powerful punches. This involves weightlifting exercises, plyometrics, and bodyweight exercises such as push-ups, pull-ups, squats, and core exercises.</p>
                        <p class="mb-50">During the CrossFit Boxing Challenge, you'll engage in a dynamic workout regimen that incorporates elements of strength training, cardiovascular conditioning, agility, and coordination. Under the guidance of experienced coaches, you'll learn proper boxing techniques, footwork, and defensive maneuvers, all while pushing yourself through a series of intense CrossFit workouts. Each session will challenge your physical and mental resilience, building not only strength but also enhancing your endurance and mental toughness.</p>
                        <h3 class="page-subtitle mb-0">Why Choose Us?</h3>
                        <p>There are several reasons why you should choose us:</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="service-wrap">
                                    <h6><i class="far fa-check me-2"></i> Diverse Range of Services:</h6>
                                    <p>We offer a wide range of fitness services and programs to cater to different fitness levels, interests, and goals. </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-wrap">
                                    <h6><i class="far fa-check me-2"></i> Expertise and Experience:</h6>
                                    <p>We have a team of highly qualified and experienced fitness professionals who are dedicated to helping you...</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-25 mb-50">We offer a wide range of fitness services and programs to cater to different fitness levels, interests, and goals. Whether you're looking for personal training, group fitness classes, specialized workouts, or nutritional guidance, we have options to suit your needs.</p>
                        <h3 class="page-subtitle mb-0">Why Choose Us?</h3>
                        <div class="service-page-list checklist mb-50" data-bg-src="{{ asset('assets/img/normal/service-details1-2.png') }}">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Design workout program.</li>
                                <li><i class="far fa-check-circle"></i>Progressive overload.</li>
                                <li><i class="far fa-check-circle"></i>Focus on proper form.</li>
                                <li><i class="far fa-check-circle"></i>Be consistent with training.</li>
                                <li><i class="far fa-check-circle"></i>Adjust calorie intake as needed.</li>
                            </ul>
                        </div>
                        <div class="accordion-area mb-30 accordion" id="faqAccordion">

                            <div class="accordion-card style2 active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> What are your gym's operating hours?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> What amenities and facilities does your gym offer?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Do you provide personal training services?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">All Services</h3>
                        <ul>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Gym Fitness Class</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Power Lifting Class</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Boxing Class</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Meditation Class</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_schedule">
                        <h3 class="widget_title">Working Hours</h3>
                        <ul>
                            <li>
                                <i class="far fa-clock"></i>
                                Monday – Friday 1.00 – 2:00 pm
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                Saturday 8.00 – 12:00 pm
                            </li>
                            <li class="unavailable">
                                <i class="far fa-clock"></i>
                                Sunday closed
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="{{ asset('assets/img/bg/cta-bg1.png') }}">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">Make An Appointment</span>
                        <h2 class="sec-title text-white">Get a Free Consultancy
                            Right Now Here!</h2>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style2">Make Appointment</a>
                        <div class="about-info-wrap style3">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title text-white">Need Help?</p>
                                <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Pricing plan Area
==============================-->
<div class="pricing-area space">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title">Pricing Plan</h3>
            <h2 class="sec-title">Our Pricing Plan</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-1.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Basic Membership</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card pricing-card_active">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-2.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Standard Membeship</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{ asset('assets/img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset('assets/img/icon/picing-icon_1-3.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Ultimate Membership</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

