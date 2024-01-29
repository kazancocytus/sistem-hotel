<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Facility;

class AdminController extends Controller
{
    public function AdminIndex() {
        return view('admin.index_admin');
    }

    public function AdminFacility(){
        $facility = Facility::latest()->get();
        return view('admin.facility',compact('facility'));
    }

    public function AddFacility(){
        
    }

    public function AdminFood(){
        return view('admin.food');
    }

    public function AdminReport(){
        return view('admin.report');
    }

    public function AdminUser(){
        return view('admin.user');
    }

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
