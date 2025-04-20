<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{contact,visitor,send_mail_to_user};
use App\Mail\forfreetest; 
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;



class AdminHomeController extends Controller   

{

    public function index(Request $request) {
        // $visitors = visitor::count();
    
        // $user_visiter = visitor::all()->map(function ($user) use ($request) {
        //     // Get the real user IP, not localhost
        //     $ip = $request->header('X-Forwarded-For') ?? $request->ip();

        //     if ($ip == "127.0.0.1" || $ip == "::1") {
        //         $ip = "37.252.64.103"; 
        //     }
    
        //     // Get country details
        //     $location = Location::get($ip);
        //     $user->country = $location ? $location->countryName : 'Unknown';
    
        //     return $user;
        // });
    
        return view('admin.home');
    }
    

}

