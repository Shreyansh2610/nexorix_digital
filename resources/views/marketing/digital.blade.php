@extends('layouts.master')
{{-- page title --}}
@section('title', 'Best Digital Marketing Agency')
{{--  --}}
@section('head-section')
@endsection
{{-- page styles --}}
@section('vendor-styles')
@endsection
@section('page-styles')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="row g-lg-4 gy-5 my-5">
                    <div class="col-12 text-center text-success-theme">
                        Digital Marketing Services in Ahmedabad
                    </div>
                    <div class="col-lg-6">
                        <div class="magnetic-wrap">
                            <div class="case-img magnetic-item" style="">
                                <img class="img-fluid" src="assets/img/inner-pages/case-study-img-02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="case-content">
                            <h2>Search Engine Optimization</h2>
                            <p class="text-white">We are an SEO and Digital Marketing Agency in Ahmedabad that keeps
                                'you first' approach and continuously monitors your search engines' visibility. Your
                                website rankings on Google top 10 results is our utmost priority. While SEO is a
                                patience game, we ensure we keep you in loop at every stage. We keep you updated with
                                regular fluctuations, on-going on-page and off-page activities and monthly reports.
                            </p>
                            <a href="" class="btn btn-success">Read more</a>
                        </div>
                    </div>

                </div>
                <div class="row g-lg-4 gy-5 my-5">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="case-content">
                            <h2 class="text-center text-success-theme">Social Media Marketing</h2>
                            <p class="text-white">We at {{ env('APP_NAME') }} offer social media marketing services
                                customized as
                                per your requirement. Since we understand that every brand is unique, our social media
                                marketing strategy differs from one another. We create user engaging campaigns, curate
                                daily posts, keep an eye on your competitors and engage with your target audience.
                            </p>
                            <a href="" class="btn btn-success">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="magnetic-wrap">
                            <div class="case-img magnetic-item" style="">
                                <img class="img-fluid" src="assets/img/inner-pages/case-study-img-02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-lg-4 gy-5 my-5">
                    <div class="col-lg-6">
                        <div class="magnetic-wrap">
                            <div class="case-img magnetic-item" style="">
                                <img class="img-fluid" src="assets/img/inner-pages/case-study-img-02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="case-content">
                            <h2 class="text-center text-success-theme">Pay Per Click Services</h2>
                            <p class="text-white">Grow your business online with Google Ads while you are sleeping. We
                                build, execute and manage PPC Ads so that you don't have to worry about how it is done.
                                For years we've done it all, went through all phases, experience errors and blockages,
                                so you don't have to. Set you Pay Per Click Ad budget and leave rest to us.
                            </p>
                            <a href="" class="btn btn-success">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row g-lg-4 gy-5 my-5">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="case-content">
                            <h2 class="text-center text-success-theme">Online Reputation Management</h2>
                            <p class="text-white">Who is talking about you in the wee hours should not be your concern
                                any more. Our team works round the clock using advanced ORM tools to keep an eye on
                                positive and negative sentiments being posted about your brand. While you concentrate on
                                your prime business, we do the messy work to maintain a positive identity of your brand.
                            </p>
                            <a href="" class="btn btn-success">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="magnetic-wrap">
                            <div class="case-img magnetic-item" style="">
                                <img class="img-fluid" src="assets/img/inner-pages/case-study-img-02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-dark-2">
        <!-- Start Trusted client section -->
        <div class="container">
            <div class="home4-trusted-client-area mt-0 mx-0 px-0">
                <p class="fs-3 fw-bold text-success-theme mb-0">We are featured on</p>
                <div class="marque-wrap mb-4">
                    <div class="marquee_text gap-3">
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid " src="{{ asset('assets/img/feature/top-seo-logo.webp') }}"
                                alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/bdaily-logo.webp') }}" alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/ein.webp') }}" alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/medium-logo.webp') }}" alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/xing-new-logo.webp') }}"
                                alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/yourstory-logo.webp') }}"
                                alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid " src="{{ asset('assets/img/feature/top-seo-logo.webp') }}"
                                alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/bdaily-logo.webp') }}" alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/ein.webp') }}" alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/medium-logo.webp') }}"
                                alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/xing-new-logo.webp') }}"
                                alt="">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('assets/img/feature/yourstory-logo.webp') }}"
                                alt="">
                        </div>
                    </div>
                </div>

                <p class="fs-3 mt-5 fw-bold  text-success-theme mb-0">Some of our Valuable Clients</p>
                <div class="marque-wrap">
                    <div class="marquee_text gap-3">
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid " src="{{ asset('companies/akshobha.svg') }}" alt="Akshobha">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/ashoktextile.svg') }}" alt="Ashoktextile">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/bitensip.svg') }}" alt="Bitensip">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/codeepsilon.svg') }}" alt="Codeepsilon">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/dhc.svg') }}" alt="DHC">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/vapeprism.svg') }}" alt="Vapeprism">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid " src="{{ asset('companies/akshobha.svg') }}" alt="Akshobha">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/ashoktextile.svg') }}" alt="Ashoktextile">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/bitensip.svg') }}" alt="Bitensip">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/codeepsilon.svg') }}" alt="Codeepsilon">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/dhc.svg') }}" alt="DHC">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/vapeprism.svg') }}" alt="Vapeprism">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid " src="{{ asset('companies/akshobha.svg') }}" alt="Akshobha">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/ashoktextile.svg') }}" alt="Ashoktextile">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/bitensip.svg') }}" alt="Bitensip">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/codeepsilon.svg') }}" alt="Codeepsilon">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/dhc.svg') }}" alt="DHC">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/vapeprism.svg') }}" alt="Vapeprism">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid " src="{{ asset('companies/akshobha.svg') }}" alt="Akshobha">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/ashoktextile.svg') }}" alt="Ashoktextile">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/bitensip.svg') }}" alt="Bitensip">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/codeepsilon.svg') }}" alt="Codeepsilon">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/dhc.svg') }}" alt="DHC">
                        </div>
                        <div class="mx-3 single-client bg-white rounded-3">
                            <img class="img-fluid" src="{{ asset('companies/vapeprism.svg') }}" alt="Vapeprism">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Trusted client section -->
    </div>

    <!-- Start testimonial Section -->
    <div class="bg-dark home3-testimonil-area py-5">
        <div class="container">
            <div class="row mb-55 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12 d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <div class="section-title-3">
                        <h2 class="text-nowrap">Check what’s our client say about us!</h2>
                        {{-- <p>Services are professional offerings provided by businesses to meet specific needs or solve
                            problems for their customers. Services can range from your budject.</p> --}}
                    </div>
                    <div class="swiper-btn-group">
                        <div class="swiper-btn prevbtn2">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="swiper-btn nextbtn2">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper home3-testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card3">
                                    <div class="quate-icon">
                                        <img src="assets/img/home-4/left-quote.svg" alt="">
                                    </div>
                                    <div class="testimonial-top">
                                        <div class="review-left">
                                            <img src="assets/img/home-4/trustpilot.svg" alt="">
                                        </div>
                                        <div class="review-right">
                                            <img src="assets/img/home-4/trastpilot-star.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="text-success-theme">SEO Services</h4>
                                        <p>“Website and SEO are amazing, Get daily 1 to 4 online website inquiry daily. Thank you guys.”</p>
                                    </div>

                                    <div class="testimonial-btm">
                                        <div class="author-area">
                                            <div class="author-content">
                                                <h4>Mateo Daniel</h4>
                                                <span>CEO At atlantis.com</span>
                                            </div>
                                        </div>
                                        <div class="review-date-and-time">
                                            <p>May 9, 2023</p>
                                            <span>10.30 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-img">
                                    <img src="assets/img/home-3/h3-testi-01.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card3">
                                    <div class="quate-icon">
                                        <img src="assets/img/home-4/left-quote.svg" alt="">
                                    </div>
                                    <div class="testimonial-top">
                                        <div class="review-left">
                                            <img src="assets/img/home-4/google.svg" alt="">
                                        </div>
                                        <div class="review-right">
                                            <ul class="star">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="text-success-theme">SEO Services</h4>
                                        <p>“Website and SEO are amazing, Get daily 1 to 4 online website inquiry daily. Thank you guys.”</p>
                                    </div>

                                    <div class="testimonial-btm">
                                        <div class="author-area">
                                            <div class="author-content">
                                                <h4>Mateo Daniel</h4>
                                                <span>CEO At atlantis.com</span>
                                            </div>
                                        </div>
                                        <div class="review-date-and-time">
                                            <p>May 9, 2023</p>
                                            <span>10.30 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-img">
                                    <img src="assets/img/home-3/h3-testi-02.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card3">
                                    <div class="quate-icon">
                                        <img src="assets/img/home-4/left-quote.svg" alt="">
                                    </div>
                                    <div class="testimonial-top">
                                        <div class="review-left">
                                            <img src="assets/img/home-4/trustpilot.svg" alt="">
                                        </div>
                                        <div class="review-right">
                                            <img src="assets/img/home-4/trastpilot-star.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="text-success-theme">SEO Services</h4>
                                        <p>“Website and SEO are amazing, Get daily 1 to 4 online website inquiry daily. Thank you guys.”</p>
                                    </div>

                                    <div class="testimonial-btm">
                                        <div class="author-area">
                                            <div class="author-content">
                                                <h4>Mateo Daniel</h4>
                                                <span>CEO At atlantis.com</span>
                                            </div>
                                        </div>
                                        <div class="review-date-and-time">
                                            <p>May 9, 2023</p>
                                            <span>10.30 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-img">
                                    <img src="assets/img/home-3/h3-testi-03.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End testimonial Section -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
@endsection
{{-- page scripts --}}
@section('page-scripts')
    <script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 40000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });

        $(".marquee_text3").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>
@endsection
