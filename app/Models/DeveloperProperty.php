<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperProperty extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'payment_plan' => 'array',
    ];

    public function Amenity()
    {
        return $this->belongsToMany(Amenity::class, 'amenity_developer_property', 'developer_property_id', 'amenity_id');
    }
    public function locations()
    {
        return $this->belongsToMany(Location::class, 'developer_property_location')
            ->withPivot('distance');
    }
    public function masterPlans()
    {
        return $this->belongsToMany(MasterPlan::class, 'developer_property_master_plan');
    }
    public function developer()
    {
        return $this->belongsTo(Developer::class,);
    }
    public function propertyTypes()
    {
        return $this->hasMany(PropertyType::class, );
    }
    public function floorPlans()
    {
        return $this->hasMany(FloorPlan::class, );
    }
    public function images()
    {
        return $this->hasMany(images::class, );
    }
    public function community_name()
    {
        return $this->belongsTo(Community::class, 'community');
    }
}
