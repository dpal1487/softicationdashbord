<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function application()
    {
        return view('pages.Products.application');
    }
    public function crm()
    {
        return view('pages.Products.crm');
    }
    public function erps()
    {
        return view('pages.Products.erps');
    }
    public function hospitalManagement()
    {
        return view('pages.Products.hospital-management');
    }
    public function humanResource()
    {
        return view('pages.Products.human-resource-management');
    }
    public function learningManagement()
    {
        return view('pages.Products.learning-management-system');
    }
    public function mobileRepair()
    {
        return view('pages.Products.mobile-reair-system');
    }
    public function pharmaApplication()
    {
        return view('pages.Products.pharma-application');
    }
    public function salesManagement()
    {
        return view('pages.Products.sales-management-system');
    }
    public function schoolManagement()
    {
        return view('pages.Products.school-management-erp');
    }
}
