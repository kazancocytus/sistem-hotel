<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddFood()
    {
        return view('manage.food.add_food');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreFood(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'assets/img/food';
            $profileImage = date('YmdHis'). "." . $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Food::create($input);

        return redirect()->route('admin.food')->with('success', 'Your Data Has Been Saved!');

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
    public function EditFood(string $id)
    {
        $food = Food::findOrFail($id);
        return view('manage.food.edit_food',compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateFood(Request $request, Food $food)
    {
        $fdid = $request->id;

        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        $input = $request->all();
        
        if($image = $request->file('image')){
            $destinatiionPath = 'assets/img/food';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move($destinatiionPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        
        Food::findOrFail($fdid)->update($input);
        
        return redirect()->route('admin.food')->with('success', 'Your Data Has Been Saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function DeleteFood($id, Request $request)
    {
        $input = $request->all();
        Food::findOrFail($id)->delete($input);

        return redirect()->route('admin.food');
    }
}
