<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{category,translations,TemplateAll};
  
class WelcomePageController extends Controller
{
     public function index(){
        $locale = session('app_locale', 'en');
        $categories = category::with('templates')->get(); 
        $language = translations::where('language', $locale)->pluck('text', 'key')->toArray();
        $TemplateAlls = TemplateAll::with('category')->get();

        $categorys = category::get();
        return view('welcome',compact('categorys','language','TemplateAlls','categories'));
     }

      public function switchLanguage($lang)
      {
         session(['app_locale' => $lang]);
         return redirect()->back();
      }  
}
     