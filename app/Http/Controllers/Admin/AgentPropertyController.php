<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgentProperty;
use App\Models\Agents;
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
        // Validation
        $validator = Validator::make($request->all(), [
            'agent_id' => 'required|exists:agents,id',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'price' => 'required|numeric',
            'area' => 'required|numeric',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'unit_area' => 'nullable|numeric',
            'balcony_area' => 'nullable|numeric',
            'utility_area' => 'nullable|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:available,sold',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            DB::beginTransaction();

            $property = new AgentProperty();
            $property->agent_id = $request->agent_id;
            $property->title = $request->title;
            $property->location = $request->location;
            $property->type = $request->type;
            $property->price = $request->price;
            $property->area = $request->area;
            $property->bedrooms = $request->bedrooms;
            $property->bathrooms = $request->bathrooms;
            $property->unit_area = $request->unit_area;
            $property->balcony_area = $request->balcony_area;
            $property->utility_area = $request->utility_area;
            $property->description = $request->description;
            $property->status = $request->status;

            // Handle image upload
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('property_images', 'public');
                $property->image = $imagePath;
            }

            $property->save();
            DB::commit();

            return redirect()->route('property.index')->with('success', 'Property created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
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
        return view('admin.agent_properties.edit', compact('property','agents'));
    }

    /**
     * Update the specified property in the database.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'agent_id' => 'required|exists:agents,id',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'price' => 'required|numeric',
            'area' => 'required|numeric',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'unit_area' => 'nullable|numeric',
            'balcony_area' => 'nullable|numeric',
            'utility_area' => 'nullable|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:available,sold',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            DB::beginTransaction();

            $property = AgentProperty::findOrFail($id);
            $property->agent_id = $request->agent_id;
            $property->title = $request->title;
            $property->location = $request->location;
            $property->type = $request->type;
            $property->price = $request->price;
            $property->area = $request->area;
            $property->bedrooms = $request->bedrooms;
            $property->bathrooms = $request->bathrooms;
            $property->unit_area = $request->unit_area;
            $property->balcony_area = $request->balcony_area;
            $property->utility_area = $request->utility_area;
            $property->description = $request->description;
            $property->status = $request->status;

            // Handle image update
            if ($request->hasFile('image')) {
                if ($property->image && \Storage::exists('public/' . $property->image)) {
                    \Storage::delete('public/' . $property->image);
                }

                $imagePath = $request->file('image')->store('property_images', 'public');
                $property->image = $imagePath;
            }

            $property->save();
            DB::commit();

            return redirect()->route('property.index')->with('success', 'Property updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
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
