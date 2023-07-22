<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title', 'user_id', 'bio', 
        'verify', 'certify', 'banner', 'experience', 'education', 
        'education_level', 'cv', 'portfolio', 'language',
        'available', 'country', 'state', 'city', 'zip_code', 'website',
        'facebook', 'instagram', 'twitter', 'linkedin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'skills' => 'array',
    ];
}
