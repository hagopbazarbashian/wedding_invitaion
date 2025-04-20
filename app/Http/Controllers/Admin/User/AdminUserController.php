<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cardform;
use App\Models\mylocation;
use Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         try {
            $users = User::orderBy('created_at', 'desc')->get();
        
            return view('admin.user.user-list', compact('users'));
        } catch (\Exception $e) {
            // Handle the exception
            $errorMessage = $e->getMessage();
            return redirect()->back()->with('error', 'Error: ' . $errorMessage);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {

        $userId = $id;
        $user = User::find($userId);

        if ($user) {
            // Assuming '0000' is the plain text password you want to set
            $newPassword = Hash::make('0000');

            $user->update([
                'password' => $newPassword,
                'token' => ''
            ]);

            return redirect()->back()->with('succes', 'Password changed successfully!');
        } else {
            return redirect()->back()->with('error', 'User not found!');
        }
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cardform = User::where('id', $id)->first();

        if ($cardform) {
            $newStatus = $cardform->status == 0 ? 1 : 0;

            $cardform->update([
                'status' => $newStatus,
            ]);

            return redirect()->back()->with('succes', 'User status updated successfully');
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    //Location System
    public function updatelocation(Request $request ,$id){

        
        try {
            // dd($id);
            // Check if a location already exists for the user
            $existingLocation = mylocation::where('card_id', $id)->first();
        
            if ($existingLocation) {
                // Toggle the admin_permissions field
                $existingLocation->admin_permissions = $existingLocation->admin_permissions == '1' ? '0' : '1';
                $existingLocation->save();
            } else {
                // If no location exists, create a new one with admin_permissions set to '1'
                $mylocation = mylocation::create([
                    'card_id' => $id,
                    'admin_permissions' => '1',
                    'city' => '0',
                    'region' => '0',
                    'country' => '0',
                    'latitude' => '0',
                    'longitude' => '0',
                ]);
            }

            // Determine the appropriate message based on the current state
            $message = $existingLocation && $existingLocation->admin_permissions == '1' ? 'Tracking permission now activated.' : 'Tracking permission now deactivated.';

            return redirect()->back()->with('succes', $message);
            } catch (\Exception $e) {
                // Handle the exception
                $errorMessage = $e->getMessage();
                return redirect()->back()->with('error', 'Error: ' . $errorMessage);
            }

    }
}
