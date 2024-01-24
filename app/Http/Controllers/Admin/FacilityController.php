<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Facility;


class FacilityController extends Controller
{
    public function AddFacility(){
        return view('manage.facility.add_facility');
    }

    public function StoreFacility(Request $request){
        $request->validate([
            'name' => 'required|unique:name',
            'description' => 'required',
            // 'image' => 'required'
        ]);

        Facility::insert([
            'name' => $request->name,
            'description'=> $request->description
        ]);

        return redirect()->route('admin.facility');
    }
}
