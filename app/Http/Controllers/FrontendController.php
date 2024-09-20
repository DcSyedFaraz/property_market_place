<?php

namespace App\Http\Controllers;

use App\Models\DeveloperProperty;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function projects()
    {
        $developer_property = DeveloperProperty::first();
        return view('frontend.devPropertyDetails',compact('developer_property'));
    }
    public function about_us()
    {
        return view('frontend.about-us');
    }
    public function contact_us()
    {
        return view('frontend.contact-us');
    }
    public function faqs()
    {
        return view('frontend.faqs');
    }

    public function offplan()
    {
        return view('frontend.offplan');
    }

    public function developer_list()
    {
        return view('frontend.developer_list');
    }
    public function location()
    {
        return view('frontend.location');
    }

    public function community()
    {
        return view('frontend.community');
    }

}
