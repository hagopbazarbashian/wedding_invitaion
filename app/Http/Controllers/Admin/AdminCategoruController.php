<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class AdminCategoruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    
    {
         $categorys = category::get();
         return view('admin.category.index',compact('categorys'));
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
            'name_en'         => 'required|string|max:255',
            'name_am'         => 'required|string|max:255',
            'photo'           => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'background_photo'=> 'nullable|image|mimes:jpeg,png,jpg,webp',
            'first_photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'secound_photo'   => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);

        // Store uploaded files if present
        $photoPath           = $request->hasFile('photo')            ? $request->file('photo')->store('category', 'public')           : null;
        $backgroundPhotoPath = $request->hasFile('background_photo') ? $request->file('background_photo')->store('category', 'public') : null;
        $firstPhotoPath      = $request->hasFile('first_photo')      ? $request->file('first_photo')->store('category', 'public')      : null;
        $secoundPhotoPath    = $request->hasFile('secound_photo')    ? $request->file('secound_photo')->store('category', 'public')    : null;

        category::create([
            'name_en'          => $request->name_en,
            'name_am'          => $request->name_am,
            'photo'            => $photoPath,
            'background_photo' => $backgroundPhotoPath,
            'first_photo'      => $firstPhotoPath,
            'secound_photo'    => $secoundPhotoPath,
        ]);

        return redirect()->back()->with('success', 'Service part created successfully.');
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
         $category = category::find($id);
         return view('admin.category.edit',compact('category'));
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
        $request->validate([
            'name_en'         => 'required|string|max:255',
            'name_am'         => 'required|string|max:255',
            'photo'           => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'background_photo'=> 'nullable|image|mimes:jpeg,png,jpg,webp',
            'first_photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'secound_photo'   => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);
    
        $category = category::findOrFail($id);
    
        // Upload and replace photos if new ones are provided
        if ($request->hasFile('photo')) {
            $category->photo = $request->file('photo')->store('category', 'public');
        }
    
        if ($request->hasFile('background_photo')) {
            $category->background_photo = $request->file('background_photo')->store('category', 'public');
        }
    
        if ($request->hasFile('first_photo')) {
            $category->first_photo = $request->file('first_photo')->store('category', 'public');
        }
    
        if ($request->hasFile('secound_photo')) {
            $category->secound_photo = $request->file('secound_photo')->store('category', 'public');
        }
    
        // Update text fields
        $category->name_en = $request->name_en;
        $category->name_am = $request->name_am;
    
        $category->save();
    
        return redirect()->back()->with('success', 'Service part updated successfully.');
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
