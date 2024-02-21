<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function websiteDesign()
    {
        return view('pages.Services.website-design');
    }
    public function webApplicationDev()
    {
        return view('pages.Services.web-application-development');
    }
    public function eCommerceDev()
    {
        return view('pages.Services.e-commerce-development');
    }
    public function customWebApplication()
    {
        return view('pages.Services.custom-web-application-development');
    }
    public function mobileAppDevlopment()
    {
        return view('pages.Services.mobile-app-development');
    }
    public function wordpressDevlopment()
    {
        return view('pages.Services.wordpress-development');
    }
    public function eCommerceWordpress()
    {
        return view('pages.Services.e-commerce-wordpress-development');
    }




}
