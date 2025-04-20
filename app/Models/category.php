<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['photo', 'name_en','name_am']; 


    public function getLocalizedNameAttribute() 
    {
        $language = session('app_locale', 'en');  
        return $language === 'am' ? $this->name_am : $this->name_en;
    }

    // Each category has many templates
    public function templates()
    {
        return $this->hasMany(TemplateAll::class, 'category_id');
    }
}
