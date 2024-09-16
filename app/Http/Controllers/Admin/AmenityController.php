<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    public function index()
    {
        // Retrieve all amenities
        $amenities = Amenities::all();
        return view('admin.amenities.index', compact('amenities'));
    }

    public function create()
    {
        // Return the create view
        return view('admin.amenities.create');
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Store the Amenities in the database
        Amenities::create($request->all());

        return redirect()->route('amenities.index')->with('success', 'Amenities created successfully.');
    }

    public function show(Amenities $amenity)
    {
        // Show a single Amenities
        return view('admin.amenities.show', compact('amenity'));
    }

    public function edit(Amenities $amenity)
    {
        // Show the edit form
        return view('admin.amenities.edit', compact('amenity'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $Amenities = Amenities::findOrFail($id);
        // Update the Amenities in the database
        $Amenities->update($request->all());

        return redirect()->route('amenities.index')->with('success', 'Amenities updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the Amenities
        $Amenities = Amenities::findOrFail($id);
        $Amenities->delete();

        return redirect()->route('amenities.index')->with('success', 'Amenities deleted successfully.');
    }
}

