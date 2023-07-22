<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'posted_by', 'title', 'stipend', 
        'currency', 'type', 'level', 'about_role', 'about_company', 'responsibilities', 
        'requirements', 'benefits',  'location', 'active',
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
        'email_verified_at' => 'deadline',
        'stipend' => 'float'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
}
