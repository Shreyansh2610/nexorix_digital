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
