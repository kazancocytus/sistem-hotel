<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Facility;
use App\Models\Food;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminIndex() {
        return view('admin.index_admin');
    }

    public function AdminFacility(){
        $facility = Facility::latest()->get();
        return view('admin.facility',compact('facility'));
    }

    public function AdminFood(){
        $food = Food::latest()->get();
        return view('admin.food',compact('food'));
    }

    public function AdminReport(){
        return view('admin.report');
    }

    public function AdminUser(){
        $user = User::whereNotIn('id', [1, 2, 3])->get();
        return view('admin.user',compact('user'));
    }

    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
