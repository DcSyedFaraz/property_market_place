<?php

namespace App\Http\Controllers;

use App\Models\AgentProperty;
use App\Models\Community;
use App\Models\Developer;
use App\Models\DeveloperProperty;
use App\Models\Product;
use DB;
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

    public function offplan(Request $request)
    {
        $communities = Community::all();
        $developer_property = DeveloperProperty::all();
        \Log::info('Request Parameters: ', $request->all());

        $projects = DeveloperProperty::paginate(5);

        // Default minPrice aur maxPrice agar user input na kare
        $minPrice = (float) $request->input('min_price', 0);
        $maxPrice = (float) $request->input('max_price', 1000);


        // dd($minPrice, $maxPrice);

        // Properties ko price range ke basis par filter karte hain
        $properties = DB::table('agent_properties')
            ->whereBetween('price', [100, 1000])
            ->get();


        // Log the count of filtered properties
        \Log::info('Count of Filtered Properties: ' . $properties->count());


        return view('frontend.offplan', compact('projects', 'properties', 'minPrice', 'maxPrice', 'communities', 'developer_property'));
    }


    public function developer_list()
    {
        $developers = Developer::get();
        return view('frontend.developer_list', compact('developers'));
    }
    public function location()
    {
        return view('frontend.location');
    }

    public function project_community()
    {
        $comunities = Community::get();
        $totalcomunities = Community::count();
        return view('frontend.community', compact('comunities', 'totalcomunities'));
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function secondary_sale()
    {
        $properties = AgentProperty::paginate(5);
        return view('frontend.secondary_properties_sale', compact('properties'));
    }

    public function new_articles()
    {
        return view('frontend.new_articles');
    }

    public function property_details($id)
    {
        $property = AgentProperty::find($id);
        return view('frontend.property_details', compact('property'));
    }

    public function address_residence($id)
    {
        $developer_property = DeveloperProperty::findOrFail($id);
        return view('frontend.address_residence', compact('developer_property'));
    }

    public function payment_plan($id)
    {
        $developer_property = DeveloperProperty::findOrFail($id);
        return view('frontend.payment_plan', compact('developer_property'));
    }

    public function location_map($id)
    {
        $developer_property = DeveloperProperty::findOrFail($id);
        return view('frontend.location_map', compact('developer_property'));
    }

    public function master_plan($id)
    {
        $developer_property = DeveloperProperty::findOrFail($id);
        return view('frontend.master_plan', compact('developer_property'));
    }

    public function floor_plan($id)
    {
        $developer_property = DeveloperProperty::findOrFail($id);
        return view('frontend.floor_plan', compact('developer_property'));
    }

    public function community_page($id)
    {
        $community = Community::with('amenities')->findOrFail($id);
        return view('frontend.community_page', compact('community'));
    }

    public function developer_page($id)
    {
        $developers = Developer::with('developers_properties')->findOrFail($id);
        \Log::info($developers->developers_properties()->toSql());

        return view('frontend.developer_page', compact('developers'));
    }




}
