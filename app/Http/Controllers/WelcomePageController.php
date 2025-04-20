<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{category,translations,TemplateAll};
  
class WelcomePageController extends Controller
{
     public function index(){
        $locale = session('app_locale', 'en');
        $language = translations::where('language', $locale)->pluck('text', 'key')->toArray();
        $TemplateAlls = TemplateAll::with('category')->get();

        $categorys = category::get();
        return view('welcome',compact('categorys','language','TemplateAlls'));
     }
}
    