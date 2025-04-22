<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{category,translations,TemplateAll};

class TemplateSyetemController extends Controller
{
     public function index($value){

      // $TemplateAlls = TemplateAll::where('value', $value)->get(); // ✅ fetch all

         if($value == 'wedding_1'){
            return view('template.wedding.wedding1.index');
         }
         if($value == 'wedding_2'){
            return view('template.wedding.wedding2.index');
         }

         if($value == 'wedding_3'){
            return view('template.wedding.wedding3.index');
         }

         if($value == 'wedding_4'){
            return view('template.wedding.wedding4.index');
         }

         if($value == 'wedding_5'){
            return view('template.wedding.wedding5.index');
         }
        
     }
}
 