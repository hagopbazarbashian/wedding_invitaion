<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth; 

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }   


    public function login_submit(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);


        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if(Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('admin_home');
        } else {
            return redirect()->route('admin_login')->with('error', 'Information is not correct!');
        }
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}
