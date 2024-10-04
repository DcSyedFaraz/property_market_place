<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $Locations = Location::all();
        return view('admin.location.index', compact('Locations'));
    }
    public function edit(Location $Location)
    {
        return response()->json(['success' => true, 'Location' => $Location]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:225',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $Location = Location::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return response()->json(['success' => true, 'location' => $Location]);
    }
    public function update(Request $request, Location $Location)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:225',
        ]);

        $Location->name = $request->name;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $Location->image = $imagePath;
        }

        $Location->save();

        return response()->json(['success' => true, 'location' => $Location]);
    }
    public function destroy(Location $Location)
    {
        $Location->delete();
        return response()->json(['success' => true]);
    }

}
