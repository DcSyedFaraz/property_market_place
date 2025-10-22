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
        // dd($request->all());
        $locales = ['en', 'ar']; // Add more if needed

        // Validate incoming request
        $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',

            'description' => 'nullable|array',
            'description.*' => 'nullable|string',

            'location' => 'required|string|max:255',
            'property_type' => 'required|in:Residential,Commercial,Off-Plan,Mall,Villa',
            'transaction_type' => 'required|in:Rent,Sale',

            'price' => 'nullable|numeric',
            'area' => 'required|numeric',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',

            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif',

            'status' => 'required|in:available,sold',
            // 'target_audience' => 'required|in:UAE,International',
        ]);

        // Create the new property
        $property = new AgentProperty();
        $property->location = $request->location;
        $property->property_type = $request->property_type;
        $property->transaction_type = $request->transaction_type;
        $property->price = $request->filled('price') ? $request->price : null;
        $property->area = $request->area;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->status = $request->status;
        // $property->target_audience = $request->target_audience;


        // Handle main image upload
        if ($request->hasFile('main_image')) {
            $property->main_image = $request->file('main_image')->store('properties/main', 'public');
        }
        // Save the property
        $property->save();
        // Save multilingual data (assuming you have a property_translations table)
        foreach ($locales as $locale) {
            $property->translations()->create([
                'locale' => $locale,
                'title' => $request->input("title.$locale"),
                'description' => $request->input("description.$locale"),
            ]);
        }
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
        $locales = ['en', 'ar'];

        $request->validate([
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',

            'description' => 'nullable|array',
            'description.*' => 'nullable|string',

            'location' => 'required|string|max:255',
            'property_type' => 'required|in:Residential,Commercial,Off-Plan,Mall,Villa',
            'transaction_type' => 'required|in:Rent,Sale',

            'price' => 'nullable|numeric',
            'area' => 'required|numeric',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',

            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif',

            'status' => 'required|in:available,sold',
        ]);

        $property = AgentProperty::findOrFail($id);
        $property->location = $request->location;
        $property->property_type = $request->property_type;
        $property->transaction_type = $request->transaction_type;
        $property->price = $request->filled('price') ? $request->price : null;
        $property->area = $request->area;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->status = $request->status;

        // Handle Main Image
        if ($request->hasFile('main_image')) {
            // Optionally delete old image from storage
            if ($property->main_image && \Storage::disk('public')->exists($property->main_image)) {
                \Storage::disk('public')->delete($property->main_image);
            }
            $property->main_image = $request->file('main_image')->store('properties/main', 'public');
        }

        $property->save();

        // Update Translations
        foreach ($locales as $locale) {
            $translation = $property->translations()->where('locale', $locale)->first();
            if ($translation) {
                $translation->update([
                    'title' => $request->input("title.$locale"),
                    'description' => $request->input("description.$locale"),
                ]);
            } else {
                $property->translations()->create([
                    'locale' => $locale,
                    'title' => $request->input("title.$locale"),
                    'description' => $request->input("description.$locale"),
                ]);
            }
        }

        // Handle Gallery Images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                PropertyGalleryImages::create([
                    'property_id' => $property->id,
                    'image' => $image->store('gallery', 'public'),
                ]);
            }
        }

        return redirect()->route('property.edit', $property->id)->with('success', 'Property updated successfully');
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
