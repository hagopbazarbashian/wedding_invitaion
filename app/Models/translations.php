<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class translations extends Model
{
    protected $fillable = [ 
        'key',
        'language',
        'text'
    ];  
}
 