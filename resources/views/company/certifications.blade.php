@extends('layouts.master')
{{-- page title --}}
@section('title', 'Certifications')
{{--  --}}
@section('head-section')
@endsection
{{-- page styles --}}
@section('vendor-styles')
@endsection
@section('page-styles')
@endsection
@section('content')
    <div class="bg-dark home3-success-stories-area two py-5">
        <div class="text-center py-5">
            <div class="fs-1 text-success-theme">CERTIFICATIONS & ALLIANCES</div>
            <div class="text-white">We believe in creating quality standards that increases customer trust.</div>
        </div>
        <div class="container-fluid">
            <div class="row g-4 justify-content-center">
                @for ($i=0;$i<9;$i++)
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div href="{{ asset('assets/img/certificates/1.jpg') }}" class="success-storie-card">
                        <div class="success-img image-gallery">
                            <img class="img-fluid magnetic-item gallery-image" src="{{ asset('assets/img/certificates/1.jpg') }}" alt="">
                        </div>
                        {{-- <div class="success-content">
                            <span>Web development</span>
                            <h3><a href="project-details.html">Streamlining IT Infrastructure</a></h3>
                            <div class="view-btn">
                                <a href="project-details.html">
                                    <svg width="12" height="12" viewBox="0 0 13 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                    </svg>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @endfor
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
