<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'npi',
        'name',
        'gender',
        'city',
        'state',
        'taxonomy',
        'organization_name',
    ];

    /**
     * Get the blog posts authored by this doctor.
     */
    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class)->published()->latest('published_at');
    }
}
