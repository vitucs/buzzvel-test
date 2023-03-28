<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'linkedin', 'github'];

    public $timestamps = false; 

    protected $table = 'profiles';

    protected $primaryKey = 'id';

    protected $casts = [
        'id' => 'integer',
    ];

    protected $dates = [];

    protected $hidden = ['password'];

    protected $appends = [];
    
    protected $name;

    protected $linkedin;

    protected $github;
}

