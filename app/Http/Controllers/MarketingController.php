<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function digitalMarketing(Request $request) {
        $breadcrumbs = [
            ['link' => '/', 'name' => 'Home'],
            ['name' => 'Digital Marketing'],
        ];
        $breadcrumbsPage = 'Digital Marketing Agency in Ahmedabad';
        return view('marketing.digital',compact(['breadcrumbs','breadcrumbsPage']));
    }

    public function seoService(Request $request) {
        $breadcrumbs = [
            ['link' => '/', 'name' => 'Home'],
            ['name' => 'SEO Service India'],
        ];
        $breadcrumbsPage = 'Best SEO Company in India';
        return view('marketing.seo_service',compact(['breadcrumbs','breadcrumbsPage']));
    }

    public function socialMedia(Request $request) {
        $breadcrumbs = [
            ['link' => '/', 'name' => 'Home'],
            ['name' => 'Social Media Marketing'],
        ];
        $breadcrumbsPage = 'Social Media Marketing Agency in Ahmedabad';
        return view('marketing.social_media',compact(['breadcrumbs','breadcrumbsPage']));
    }
}
