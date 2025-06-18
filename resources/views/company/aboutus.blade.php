@extends('layouts.master')
{{-- page title --}}
@section('title', 'About Us')
{{--  --}}
@section('head-section')
@endsection
{{-- page styles --}}
@section('vendor-styles')
@endsection
@section('page-styles')
@endsection
@section('content')
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5">
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
                                {{-- <h2>Overview</h2> --}}
                                <p class="text-white">At {{ env('APP_NAME') }}, each of us works towards one goal –
                                    Delivering
                                    the best
                                    Digital Marketing Services. We are a technology-driven digital marketing company. We
                                    know
                                    what a newly formed company needs. We do it efficiently by developing stunning websites
                                    and
                                    a planned digital marketing strategy. We are your extended marketing team always on our
                                    toes
                                    to deliver high-quality digital identities.</p>
                                <p class="text-white">{{ env('APP_NAME') }} powerful team is a blend of carefully chosen
                                    experts
                                    from website
                                    development and
                                    digital marketing sectors. Each one nurture other so that all of us learn and grow in
                                    the
                                    process while we continue to deliver you the best of our services. We are transforming
                                    one
                                    business every day, helping them smoothly sync with the ever-changing digital marketing
                                    world. We help brands remodel for continuous growth.</p>
                            </div>
                        </div>

                    </div>
                    <div class="row g-lg-4 gy-5 my-5">
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="case-content">
                                <h2 class="text-center text-success-theme">Our Vision</h2>
                                <p class="text-white">We've built a great bond with clients in India, delivering hassle-free
                                    website development and SEO Services in India. In the coming years, we aim to go global
                                    to
                                    take our expertise to brands in different countries.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="magnetic-wrap">
                                <div class="case-img magnetic-item" style="">
                                    <img class="img-fluid" src="assets/img/inner-pages/case-study-img-02.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-lg-4 gy-5 my-5">
                        <div class="col-lg-6">
                            <div class="magnetic-wrap">
                                <div class="case-img magnetic-item" style="">
                                    <img class="img-fluid" src="assets/img/inner-pages/case-study-img-02.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="case-content">
                                <h2 class="text-center text-success-theme">Our Mission</h2>
                                <p class="text-white">We aim to provide innovative brand solutions, lead with a purpose,
                                    remain
                                    relevant and make a difference. Every delivery at {{ env('APP_NAME') }} is carefully
                                    supervised so that
                                    every brand’s message is delivered as intended.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
