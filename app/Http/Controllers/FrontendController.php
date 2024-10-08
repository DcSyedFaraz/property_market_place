<?php

namespace App\Http\Controllers;

use App\Models\AgentProperty;
use App\Models\Community;
use App\Models\Developer;
use App\Models\DeveloperProperty;
use App\Models\FloorPlan;
use App\Models\Location;
use App\Models\MasterPlan;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $developer_properties = DeveloperProperty::latest()->take(3)->get();

        return view('frontend.index', compact('developer_properties'));
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
        // Fetch communities, developer properties, and developers
        $communities = Community::all();
        $developer_property = DeveloperProperty::all();
        $developers = Developer::all();

        \Log::info('Request Parameters: ', $request->all());

        // Paginate developer properties
        $properties = DeveloperProperty::paginate(5);

        // dd($minPrice, $maxPrice);  // For debugging


        // Return filtered data to the view
        return view('frontend.offplan', compact('properties', 'communities', 'developer_property', 'developers'));
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

    public function filter(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'min_price' => 'nullable|numeric|min:0',
            'max_price' => 'nullable|numeric|min:0|gte:min_price',
            // 'city' => 'nullable|string|exists:cities,name',
            'communities' => 'nullable|array',
            'communities.*' => 'exists:communities,id',
            'developers' => 'nullable|array',
            'developers.*' => 'exists:developers,id',
            'status' => 'nullable|string|in:new,under_construction,ready_to_move',
            'accommodations' => 'nullable|array',
            'accommodations.*' => 'integer|min:1|max:8', // Assuming 1-8 bedrooms
        ]);
        // Start building the query
        $query = DeveloperProperty::query();

        // Filter by price range
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        // Alternatively, if using sliders
        if ($request->filled('min_price_slider')) {
            $query->where('price', '>=', $request->input('min_price_slider'));
        }

        if ($request->filled('max_price_slider')) {
            $query->where('price', '<=', $request->input('max_price_slider'));
        }

        // Filter by city
        // if ($request->filled('city')) {
        //     $query->where('city', $request->input('city'));
        // }

        // Filter by communities (assuming a many-to-many relationship)
        if ($request->filled('communities')) {
            $query->whereHas('community_name', function ($q) use ($request) {
                $q->whereIn('communities.id', $request->input('communities'));
            });
        }

        // Filter by developers
        if ($request->filled('developers')) {
            $query->whereIn('developer_id', $request->input('developers'));
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        // Filter by accommodation (assuming 'accommodation' is a field or related model)
        if ($request->filled('accommodations')) {
            $query->whereIn('accommodation', $request->input('accommodations'));
        }

        // Additional filters can be added here...

        // Execute the query and paginate results
        $properties = $query->paginate(20)->appends($request->except('page'));
        // dd($properties);

        $communities = Community::all();
        $developers = Developer::all();

        $search = $request->input('field3');

        if($search){
            $properties = DeveloperProperty::where('name', 'LIKE', '%' . $search . '%')->get();
        }else{
            $properties = DeveloperProperty::all();
        }

            return view('frontend.offplan', compact('properties',  'search', 'communities', 'developers'));
    }

    public function showPropertiesByLocation($location)
    {
        $properties = DeveloperProperty::whereHas('community', function ($query) use ($location) {
            $query->where('location', $location);
        })->get();
        //  dd($properties, $location);
        $communities = Community::all();

        $developers = Developer::all();

        // Return view with filtered developer properties
        return view('frontend.offplan', compact('properties', 'communities', 'developers'));
    }



}
