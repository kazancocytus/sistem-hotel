<?php

namespace App\Http\Controllers;

use App\Models\Review;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'text' => 'required|max:255',
            'star' => 'required|integer|min:1|max:5',
        ]);
    
        $create_review = Review::create([
            'name' => $request->name,
            'text' => $request->text,
            'star' => $request->star,
        ]);

    
        // dd($create_review);

        return redirect()->back()
                        ->with('success','Rating Has Been Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
