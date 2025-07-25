<?php

namespace App\Http\Controllers;

use App\Mail\ComplaintMail;
use App\Mail\VisitorMail;
use App\Models\AgentProperty;
use App\Models\Community;
use App\Models\Developer;
use App\Models\DeveloperProperty;
use App\Models\FloorPlan;
use App\Models\Information;
use App\Models\Location;
use App\Models\MasterPlan;
use App\Models\Product;
use App\Models\Blog;
use App\Models\TeamMember;
use DB;
use Illuminate\Http\Request;
use Mail;

class FrontendController extends Controller
{
    public function showForm()
    {
        return view('frontend.complaint');
    }
    public function registration()
    {
        return view('frontend.registration');
    }

    /**
     * Handle form submission and send email.
     */
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email',
            'building_villa' => 'required|string|max:255',
            'flat_no' => 'required|string|max:50',
            'complaints' => 'required|array',
            'complaint_details' => 'required|string',
            'suggestion' => 'nullable|string',
            // 'email_flat_tenant' => 'sometimes|boolean',
        ]);

        // Prepare data for the email
        $data = [
            'full_name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
            'building_villa' => $validated['building_villa'],
            'flat_no' => $validated['flat_no'],
            'complaints' => $validated['complaints'],
            // 'email_flat_tenant' => isset($validated['email_flat_tenant']) ? 'Yes' : 'No',
            'complaint_details' => $validated['complaint_details'],
            'suggestion' => $validated['suggestion'] ?? 'N/A',
        ];

        // // Send the email
        // Mail::to('info@thehr.ae')->send(new ComplaintMail($data));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your complaint has been submitted successfully.');
    }

    public function submitRegistration(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:information,email',
            'phone_number' => 'required|string|max:20',
            'trade_license' => 'required|image|mimes:jpg,png|max:10240',
            'emirates_id' => 'required|image|mimes:jpg,png|max:10240',
            'passport' => 'required|image|mimes:jpg,png|max:10240',
            'bank_account_no' => 'required|numeric',
            'iban_letter' => 'required|string|max:255',
            'vat_registration_no' => 'required|string|max:255',
            'contact_person_name' => 'required|string|max:255',
            'office_address' => 'required|string|max:500',
        ]);
        // dd($validated);

        // File uploads
        $tradeLicensePath = $request->file('trade_license')->storeAs(
            'uploads/trade_licenses',
            'trade_license_' . time() . '.' . $request->file('trade_license')->extension(),
            'public'
        );

        $emiratesIdPath = $request->file('emirates_id')->storeAs(
            'uploads/emirates_ids',
            'emirates_id_' . time() . '.' . $request->file('emirates_id')->extension(),
            'public'
        );

        $passportPath = $request->file('passport')->storeAs(
            'uploads/passports',
            'passport_' . time() . '.' . $request->file('passport')->extension(),
            'public'
        );

        // Database Insertion
        $registration = new Information();
        $registration->name = $validated['name'];
        $registration->email = $validated['email'];
        $registration->phone_number = $validated['phone_number'];
        $registration->trade_license = $tradeLicensePath;
        $registration->emirates_id = $emiratesIdPath;
        $registration->passport = $passportPath;
        $registration->bank_account_no = $validated['bank_account_no'];
        $registration->iban_letter = $validated['iban_letter'];
        $registration->vat_registration_no = $validated['vat_registration_no'];
        $registration->contact_person_name = $validated['contact_person_name'];
        $registration->office_address = $validated['office_address'];
        $registration->save();

        // dd($registration);

        return redirect()->back()->with('success', 'Registration submitted successfully.');
    }



    public function visitForm()
    {
        return view('frontend.visitor');
    }

    public function submitVisit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email',
            'property_type' => 'required',
            'specifications' => 'required|string',
            'preferred_location' => 'nullable|string',
            'budget_range' => 'nullable|integer',
        ]);

        $data = [
            'name' => $validated['name'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
            'property_type' => $validated['property_type'],
            'specifications' => $validated['specifications'],
            'preferred_location' => $validated['preferred_location'],
            'budget_range' => $validated['budget_range'],
        ];

        // // Send the email
        Mail::to('info@thehr.ae')->send(new VisitorMail($data));

        return redirect()->back()->with('success', 'Your request has been submitted successfully!');
    }


    public function index()
    {
        $developer_properties = DeveloperProperty::latest()->take(3)->get();

        return view('frontend.index', compact('developer_properties'));
    }

    public function projects($id)
    {
        $developer_property = DeveloperProperty::find($id);
        $property = AgentProperty::with('propertygallery')->where('id', $id)->firstOrFail();

        // dd($property->propertygallery);

        return view('frontend.devPropertyDetails', compact('property'));
    }
    public function about_us()
    {
        return view('frontend.about-us');
    }
    public function leadership()
    {
        $teammembers = TeamMember::all();
        return view('frontend.leadership', compact("teammembers"));
    }
    public function leadership_detail(string $slug)
    {
        $teammember = TeamMember::where('slug', $slug)->firstorfail();
        return view('frontend.leadership_detail', compact("teammember"));
    }
    // public function blog()
    // {
    //     $currentLang = session('locale');

    //     $query = Blog::orderBy('created_at', 'desc');

    //     switch ($currentLang) {
    //         case 'ar':
    //             $query->where('target_audience', 'UAE');
    //             break;
    //         default:
    //             $query->where('target_audience', 'International');
    //             break;
    //     }

    //     $data['blogs'] = $query->paginate(10);

    //     return view('frontend.blog', $data);
    // }
    public function blog()
    {
        $locale = session('locale');

        $blogs = Blog::with(['translations' => function ($q) use ($locale) {
            $q->where('locale', $locale);
        }])->latest()->paginate(9);

        return view('frontend.blog', compact('blogs'));
    }
    public function blogdetail($id)
    {
        $data['blog'] = Blog::where('id', $id)->firstOrFail();
        $data['blogs'] = Blog::get();
        $data['developer_property'] = DeveloperProperty::first();
        return view('frontend.blog-detail', $data);
    }


    public function inner_blog()
    {
        // $data['blog'] = Blog::find($id);
        $data['blogs'] = Blog::get();
        // $developer_properties = DeveloperProperty::latest()->take(3)->get();
        $data['developer_property'] = DeveloperProperty::first();
        return view('frontend.blog-detail', $data);
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
        $developer_property = DeveloperProperty::get();
        return view('frontend.service', compact('developer_property'));
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

    public function TermCondition()
    {
        return view('frontend.term_condition');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy');
    }


    public function filter(Request $request)
    {
        $validated = $request->validate([
            'min_price' => 'nullable|numeric|min:0',
            'max_price' => 'nullable|numeric|min:0|gte:min_price',
            'status' => 'nullable|string',
            'sort' => 'nullable|string',
            'field3' => 'nullable|string',
        ]);

        // Base query
        $query = DeveloperProperty::query();

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('field3')) {
            $query->where('name', 'LIKE', '%' . $request->input('field3') . '%');
        }

        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'price_high_to_low':
                    $query->orderBy('price', 'desc');
                    break;
                case 'price_low_to_high':
                    $query->orderBy('price', 'asc');
                    break;
            }
        }

        $properties = $query->paginate(20)->appends($request->except('page'));
        $communities = Community::all();
        $developers = Developer::all();
        $search = $request->input('field3');

        return view('frontend.offplan', compact('properties', 'search', 'communities', 'developers'));
    }

    public function showPropertiesByLocation(Request $request, $location)
    {
        $allowedLocations = ['Dubai', 'Abu Dhabi', 'Sharjah', 'Al Ain', 'Fujairah', 'Ras Al Khaimah'];
        $allowedTypes = ['Residential', 'Commercial', 'Off-Plan', 'Mall', 'Villa'];

        $communities = Community::all();
        $developers = Developer::all();

        $query = AgentProperty::query();
        $currentLang = session('locale');
        if (in_array($location, $allowedLocations))
        {
            $query->where('location', $location);
            $locationName = __("head_$location");
        } elseif (in_array($location, $allowedTypes)) {
            $locationName = __("head_$location");
        } else {
            abort(404, 'Location or Property Type not found.');
        }
        // Sorting logic
        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'price_high_to_low':
                    $query->orderBy('price', 'desc');
                    break;
                case 'price_low_to_high':
                    $query->orderBy('price', 'asc');
                    break;
            }
        }
        $properties = $query->get();
        return view('frontend.offplan', compact(
            'properties',
            'communities',
            'developers',
            'location',
            'locationName'
        ));
    }
}
