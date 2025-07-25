<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false; // 👈 ADD THIS LINE

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
