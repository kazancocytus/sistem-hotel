<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;


class FacilityController extends Controller
{
    public function AddFacility(){
        return view('manage.facility.add_facility');
    }

    public function StoreFacility(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'assets/img/facility';
            $profileImage = date('YmdHis'). "." . $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Facility::create($input);

        return redirect()->route('admin.facility')->with('success', 'Facility created Successfully');
    }
}
