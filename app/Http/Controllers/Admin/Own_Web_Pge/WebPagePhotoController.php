<?php

namespace App\Http\Controllers\Admin\Own_Web_Pge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Own_web_page_photos;
 
class WebPagePhotoController extends Controller
{
    /**
     * Display a listing of the resource.  
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $Own_web_page_photos = Own_web_page_photos::get();
         return view('Admin.own_web_page_photo.index' , compact('Own_web_page_photos'));
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
        $request->validate([   
            'web_page_url' => 'required|max:255',
            'text' => 'required|max:255',
            'photo' => 'required',  
        ]);   
    
        // Process the data
        $data = $request->except(['photo']);
    
        if ($request->hasFile('photo')) {
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            $filePath = public_path('own-web-page-first-slider'); 
            $request->photo->move($filePath, $fileName); 
            $data['photo'] = 'own-web-page-first-slider/' . $fileName; 
        }
    
        Own_web_page_photos::create($data);
    
        return redirect()->back()->with('succes', 'Data inserted successfully');
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
        //
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
        //
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
}
