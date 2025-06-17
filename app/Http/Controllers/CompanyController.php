<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function aboutUs(Request $request) {

        $breadcrumbs = [
            ['link' => '/', 'name' => 'Home'],
            ['name' => 'About Us'],
        ];
        $breadcrumbsPage = 'About Us';
        return view('company.aboutus',compact(['breadcrumbs','breadcrumbsPage']));
    }

    public function certifications(Request $request) {
        $breadcrumbs = [
            ['link' => '/', 'name' => 'Home'],
            ['name' => 'Certifications'],
        ];
        $breadcrumbsPage = 'Certifications';
        return view('company.certifications',compact(['breadcrumbs','breadcrumbsPage']));
    }
}
