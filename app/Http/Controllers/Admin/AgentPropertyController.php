<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgentProperty;
use App\Models\Agents;
use App\Models\PropertyGalleryImages;
use DB;
use Illuminate\Http\Request;
use Validator;

class AgentPropertyController extends Controller
{
    /**
     * Display a listing of the property.
     */
    public function index()
    {
        $properties = AgentProperty::get();
        return view('admin.agent_properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new property.
     */
    public function create()
    {
        $agents = Agents::active()->get();
        return view('admin.agent_properties.create', compact('agents'));
    }

    /**
     * Store a newly created property in the database.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'property_type' => 'required|in:Residential,Commercial,Off-Plan,Mall,Villa',
            'transaction_type' => 'required',
            'price' => 'required|numeric',
            'area' => 'required|numeric',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'utility_area' => 'nullable|numeric',
            'balcony_area' => 'nullable|numeric',
            'unit_area' => 'nullable|numeric',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'gallery_images' => 'required|array',
            'gallery_images.*' => 'required|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:available,sold',
            'target_audience' => 'required|in:UAE,International',
        ]);

        // Create the new property
        $property = new AgentProperty();
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->location = $request->input('location');
        $property->property_type = $request->input('property_type');
        $property->transaction_type = $request->input('transaction_type');
        $property->price = $request->input('price');
        $property->area = $request->input('area');
        $property->bedrooms = $request->input('bedrooms');
        $property->bathrooms = $request->input('bathrooms');
        $property->utility_area = $request->input('utility_area');
        $property->balcony_area = $request->input('balcony_area');
        $property->unit_area = $request->input('unit_area');
        $property->status = $request->input('status');
        $property->target_audience = $request->input('target_audience');

        // Handle Main Image Upload
        if ($request->hasFile('main_image')) {
            $property->main_image = $request->file('main_image')->store('properties', 'public');
        }

        // Save the property
        $property->save();

        // Handle Gallery Images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                PropertyGalleryImages::create([
                    'property_id' => $property->id,
                    'image' => $image->store('gallery', 'public'),
                ]);
            }
        }

        return redirect()->route('property.show', $property->id)->with('success', 'Property added successfully');
    }


    /**
     * Display the specified property.
     */
    public function show($id)
    {
        $property = AgentProperty::findOrFail($id);
        return view('admin.agent_properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified property.
     */
    public function edit($id)
    {
        $property = AgentProperty::findOrFail($id);
        $agents = Agents::get();
        return view('admin.agent_properties.edit', compact('property', 'agents'));
    }

    /**
     * Update the specified property in the database.
     */
    public function update(Request $request, $id)
    {
        $property = AgentProperty::findOrFail($id);

        // Validate incoming request
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'property_type' => 'required|in:Residential,Commercial,Off-Plan,Mall,Villa',
            'transaction_type' => 'nullable',
            'price' => 'required|numeric',
            'area' => 'required|numeric',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'utility_area' => 'nullable|numeric',
            'balcony_area' => 'nullable|numeric',
            'unit_area' => 'nullable|numeric',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:available,sold',
            'target_audience' => 'required|in:UAE,International',
        ];

        // Conditionally make gallery_images required
        if ($property->propertygallery->isEmpty()) {
            // If no gallery images exist, then new ones are required
            $rules['gallery_images'] = 'required|array';
            $rules['gallery_images.*'] = 'required|image|mimes:jpeg,png,jpg,gif';
        } else {
            // If gallery images exist, then new ones are optional
            $rules['gallery_images'] = 'nullable|array';
            $rules['gallery_images.*'] = 'nullable|image|mimes:jpeg,png,jpg,gif';
        }

        $request->validate($rules);

        // Update property details
        $property->title = $request->input('title');
        $property->description = $request->input('description');
        $property->location = $request->input('location');
        $property->property_type = $request->input('property_type');
        $property->transaction_type = $request->input('transaction_type');
        $property->price = $request->input('price');
        $property->area = $request->input('area');
        $property->bedrooms = $request->input('bedrooms');
        $property->bathrooms = $request->input('bathrooms');
        $property->utility_area = $request->input('utility_area');
        $property->balcony_area = $request->input('balcony_area');
        $property->unit_area = $request->input('unit_area');
        $property->status = $request->input('status');
        $property->target_audience = $request->input('target_audience');

        // Handle Main Image Upload
        if ($request->hasFile('main_image')) {
            $property->main_image = $request->file('main_image')->store('properties', 'public');
        }

        $property->save();

        // Handle Gallery Images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                PropertyGalleryImages::create([
                    'property_id' => $property->id,
                    'image' => $image->store('gallery', 'public'),
                ]);
            }
        }

        return redirect()->route('property.show', $property->id)->with('success', 'Property updated successfully');
    }


    /**
     * Remove the specified property from the database.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $property = AgentProperty::findOrFail($id);

            if ($property->image && \Storage::exists('public/' . $property->image)) {
                \Storage::delete("public/{$property->image}");
            }

            $property->delete();
            DB::commit();

            return redirect()->route('property.index')->with('success', 'Property deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
