<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentProperty extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'agent_properties';

    public function propertygallery(){
        return $this->hasMany(PropertyGalleryImages::class, 'property_id', 'id');
    }


}
