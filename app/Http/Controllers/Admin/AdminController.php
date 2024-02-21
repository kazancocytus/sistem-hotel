<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Models\Facility;
use App\Models\Transaction;
use App\Models\Food;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function AdminIndex() {
        $transaction = Transaction::orderBy('created_at','DESC')
                    ->get();
        return view('admin.index_admin', ['transaction' => $transaction]);
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

    public function UserActivity(Request $request){
        $users = User::orderBy('last_seen','DESC')->get();

        return view('admin.user',compact('users'));
    }
}
