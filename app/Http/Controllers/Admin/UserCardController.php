<?php

namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\cardform;
use App\Models\mylocation;
use App\Mail\SendEmailToUserFnishCard;
use Illuminate\Support\Facades\Mail;
 
class UserCardController extends Controller
{
     public function index(){
         try {
              $cardforms = cardform::with('socelmedia', 'user')->orderBy('created_at', 'desc')->get();
            
              $firstRecords = mylocation::with('card')->orderBy('created_at', 'desc')->get();
            
              return view('admin.user.user-card', compact('cardforms','firstRecords'));
              
         } catch (\Exception $e) {
             // Handle the exception
             $errorMessage = $e->getMessage();
             return redirect()->back()->with('error', 'Error sending email: ' . $errorMessage);
         }
        
     }

     public function sendmail(Request $request , $email){

      try {
         Mail::to($email)->send(new SendEmailToUserFnishCard());
         return redirect()->back()->with('succes', 'Successful! Email sent.');
     } catch (\Exception $e) {
         // Handle the exception
         $errorMessage = $e->getMessage();
         return redirect()->back()->with('error', 'Error sending email: ' . $errorMessage);
     }
      


     }
}
