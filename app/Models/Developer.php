<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function developers_properties()
    {
        return $this->hasMany(DeveloperProperty::class,); 
    }
}
