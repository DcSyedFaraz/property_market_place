<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperProperty extends Model
{
    use HasFactory;
    public function amenities()
    {
        return $this->belongsToMany(Amenities::class, 'amenity_developer_property');
    }
}
