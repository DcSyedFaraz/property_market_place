<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    public function index()
    {
        // Retrieve all Amenity
        $Amenity = Amenity::all();
        return view('admin.amenities.index', compact('Amenity'));
    }

    public function create()
    {
        // Return the create view
        return view('admin.Amenity.create');
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|string|max:255',
            'description' => 'required|string',
            'community_ids' => 'required|array'
        ]);

        // Store the Amenity in the database
        $amenity = Amenity::create($request->all());

         // Pivot table mein data insert karein
         $amenity->communities()->attach($request->input('community_ids'));

        return redirect()->route('Amenity.index')->with('success', 'Amenity created successfully.');
    }

    public function show(Amenity $amenity)
    {
        // Show a single Amenity
        return view('admin.Amenity.show', compact('amenity'));
    }

    public function edit(Amenity $amenity)
    {
        // Show the edit form
        return view('admin.Amenity.edit', compact('amenity'));
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
        $Amenity = Amenity::findOrFail($id);
        // Update the Amenity in the database
        $Amenity->update($request->all());

        return redirect()->route('Amenity.index')->with('success', 'Amenity updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the Amenity
        $Amenity = Amenity::findOrFail($id);
        $Amenity->delete();

        return redirect()->route('Amenity.index')->with('success', 'Amenity deleted successfully.');
    }
}

