<!-- Start breadcrumbs section -->
@isset($breadcrumbs)
    <section class="breadcrumbs">
        {{-- <div class="breadcrumb-sm-images">
            <div class="inner-banner-1 magnetic-item">
                <img src="assets/img/inner-pages/inner-banner-1.png" alt="">
            </div>
            <div class="inner-banner-2 magnetic-item">
                <img src="assets/img/inner-pages/inner-banner-2.png" alt="">
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <span class="fs-1 text-white">{{ $breadcrumbsPage }}</span>
                            {{-- <h1>"Get To Know About Softconic"</h1> --}}
                            <div class="breadcrumb-list">
                                @php
                                    $breadcrumbsCount = count($breadcrumbs);
                                    $lastBreadcrumbsId = $breadcrumbsCount-1;
                                @endphp
                                @foreach ($breadcrumbs as $key => $breadcrumb)
                                    <a href="{{ $breadcrumb['link']??'#' }}" class="fs-3 {{ !isset($breadcrumb['link']) ? 'text-white' : '' }}">{{ $breadcrumb['name'] }}</a>
                                    @if($key!=$lastBreadcrumbsId)
                                        <img src="assets/img/inner-pages/breadcrumb-arrow.svg" alt="fs-3">
                                    @endif

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endisset
<!-- End breadcrumbs section -->



{{-- <div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">@yield('title')</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    @isset($breadcrumbs)
                        @foreach ($breadcrumbs as $breadcrumb)
                            <li class="breadcrumb-item {{ !isset($breadcrumb['link']) ? 'active' : '' }}">
                                @if (isset($breadcrumb['link']))
                                    <a href="{{ asset($breadcrumb['link']) }}">
                                        @if ($breadcrumb['name'] == 'Home')
                                            <i class="bx bx-home-alt"></i>@else{{ $breadcrumb['name'] }}
                                        @endif
                                    </a>
                                    @else{{ $breadcrumb['name'] }}
                                @endif
                            </li>
                        @endforeach
                    @endisset
                </ol>
            </div>
        </div>
    </div>
</div> --}}
