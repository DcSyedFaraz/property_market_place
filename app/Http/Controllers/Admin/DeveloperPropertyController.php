<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use App\Models\Developer;
use App\Models\DeveloperProperty;
use App\Models\FloorPlan;
use App\Models\Location;
use App\Models\MasterPlan;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class DeveloperPropertyController extends Controller
{
    public function index()
    {
        $developer_properties = DeveloperProperty::all();
        return view('admin.developer_properties.index', compact('developer_properties'));
    }
    public function create()
    {
        $locations = Location::all();
        $master_plans = MasterPlan::all();
        $amenities = Amenities::all();
        $developers = Developer::all();
        return view('admin.developer_properties.create', compact('locations', 'developers', 'master_plans', 'amenities'));
    }
    public function store(Request $request)
    {
        // Start the database transaction
        \DB::beginTransaction();

        try {
            // Store the main developer property
            $developerProperty = DeveloperProperty::create([
                'developer_id' => $request->developer_id,
                'name' => $request->name,
                'status' => $request->status,
                'price' => $request->price,
                'description' => $request->description,
                'payment_plan' => $request->payment_plan,
                'handover_date' => $request->handover_date,
                'handover_percentage' => $request->handover_percentage,
                'down_percentage' => $request->down_percentage,
                'construction_percentage' => $request->construction_percentage,
                'community' => $request->community,
                'logo' => $this->uploadFile($request, 'logo'),
                'cover_image' => $this->uploadFile($request, 'cover_image'),
                'master_plan_image' => $this->uploadFile($request, 'master_plan_image'),
                'location_map' => $this->uploadFile($request, 'location_map')
            ]);

            // Store key highlights (as an array, serialized or concatenated)
            if ($request->key_highlights) {
                $developerProperty->key_highlights = implode(',', $request->key_highlights);
                $developerProperty->save();
            }

            // Store property types
            if ($request->property_types) {
                foreach ($request->property_types as $propertyType) {
                    PropertyType::create([
                        'developer_property_id' => $developerProperty->id,
                        'property_type' => $propertyType['property_type'],
                        'unit_type' => $propertyType['unit_type'],
                        'size' => $propertyType['size'],
                    ]);
                }
            }

            // Store floor plans
            if ($request->floor_plans) {
                foreach ($request->floor_plans as $floorPlan) {
                    FloorPlan::create([
                        'developer_property_id' => $developerProperty->id,
                        'category' => $floorPlan['category'],
                        'unit_type' => $floorPlan['unit_type'],
                        'floor_details' => $floorPlan['floor_details'],
                        'sizes' => $floorPlan['sizes'],
                        'type' => $floorPlan['type'],
                        'image' => $this->uploadFile($request, 'floor_plans.' . key($floorPlan) . '.image')
                    ]);
                }
            }

            // Store locations with distance using the belongsToMany relation
            if ($request->locations) {
                foreach ($request->locations as $location) {
                    // Attach the location with distance
                    $developerProperty->locations()->attach($location['location_id'], ['distance' => $location['distance']]);
                }
            }

            // Store amenities using the belongsToMany relation
            if ($request->amenity_ids) {
                $developerProperty->amenities()->sync($request->amenity_ids); // Syncing ensures proper management of many-to-many relationships
            }
            if ($request->master_plan_id) {
                $developerProperty->masterPlans()->sync($request->master_plan_id);
            }

            // Commit the transaction
            \DB::commit();

            return redirect()->route('developer_properties.index')->with('success', 'Property created successfully!');

        } catch (\Exception $e) {
            // Rollback the transaction on failure
            \DB::rollBack();
            // throw $e;
            return redirect()->back()->withErrors(['error' => 'Failed to create property: ' . $e->getMessage()]);
        }
    }

    private function uploadFile(Request $request, $fieldName)
    {
        if ($request->hasFile($fieldName)) {
            return $request->file($fieldName)->store('developer_properties', 'public');
        }
        return null;
    }
    public function destroy($id)
    {
        // Delete the Amenities
        $Amenities = DeveloperProperty::findOrFail($id);
        $Amenities->delete();

        return redirect()->route('developer_properties.index')->with('success', 'Property deleted successfully.');
    }
}
