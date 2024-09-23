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
    public function projects($id)
    {
        $developer_property = DeveloperProperty::findOrFail($id);
        return view('frontend.devPropertyDetails', compact('developer_property'));
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
        $projects = DeveloperProperty::paginate(5);
        return view('frontend.offplan', compact('projects'));
    }

    public function developer_list()
    {
        return view('frontend.developer_list');
    }
    public function location()
    {
        return view('frontend.location');
    }

    public function project_community()
    {
        return view('frontend.community');
    }

    public function service(){
        return view('frontend.service');
    }

    public function secondary_sale(){
        return view('frontend.secondary_properties_sale');
    }

    public function new_articles(){
        return view('frontend.new_articles');
    }

    public function property_details(){
        return view('frontend.property_details');
    }

    public function community(){

    }


}
