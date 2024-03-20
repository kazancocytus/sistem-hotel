<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use Illuminate\Http\RedirectResponse;

class FacilityController extends Controller
{
    public function AddFacility(){
        return view('manage.facility.add_facility');
    }

    public function StoreFacility(Request $request){
        $request->validate([
            'name' => 'required',
            'description_facility' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'assets/img/facility';
            $profileImage = date('YmdHis'). "." . $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Facility::create($input);

        return redirect()->route('admin.facility')->with('success', 'Your Data Has Been Saved!');
    }

    public function EditFacility($id){
        $facility = Facility::findOrFail($id);
        return view('manage.facility.edit_facility',compact('facility'));
    }

    public function UpdateFacility(Request $request, Facility $facility): RedirectResponse{
        $fid = $request->id;

        $request->validate([
            'name' => 'required',
            'description_facility' => 'required',
            'image' => 'required'
        ]);

        $input = $request->all();
        
        if($image = $request->file('image')){
            $destinatiionPath = 'assets/img/facility';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move($destinatiionPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        
        Facility::findOrFail($fid)->update($input);
        
        return redirect()->route('admin.facility')->with('success', 'Your Data Has Been Saved!');
    }

    public function DeleteFacility($id, Request $request){
        $input = $request->all();
        Facility::findOrFail($id)->delete($input);

        return redirect()->route('admin.facility');
    }
}
