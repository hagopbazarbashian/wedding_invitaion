<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateAll extends Model
{
    protected $fillable = [ 
        'category_id',
        'photo',
        'value' ,
        'live_url'    
    ];  

    // Each template belongs to one category 
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
        
    }
}
