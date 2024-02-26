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

    public function AdminFacility()
    {
        $facility = Facility::latest()->get();
        return view('admin.facility', compact('facility'));
    }

    public function AdminFood()
    {
        $food = Food::latest()->get();
        return view('admin.food', compact('food'));
    }


    public function AdminReport(){
        $transaction = Transaction::orderBy('id','DESC')->first();
        $totalRooms = $this->calculateTotalRooms();
        $latestId = $this->StatusCostumer();
        

        return view('admin.report', ['totalRooms' => $totalRooms, 'transaction' => $transaction, 'latestId' => $latestId]);
    }

    public function AdminUser(){
        $user = User::all();

        return view('admin.user',compact('user'));
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function UserActivity(Request $request){
        $users = User::orderBy('last_seen','DESC')->get();


        return view('admin.user',compact('users'));
    }

    public function calculateTotalRooms() {
        $transaction = Transaction::all();
    
        $totalRooms = 0;
    
        foreach ($transaction as $transactions) {
            $totalRooms += $transactions->suites + $transactions->deluxe + $transactions->standart;
        }

        return $totalRooms;
    }

    public function StatusCostumer(){
        $transactions = Transaction::orderBy('check_out','DESC')->get();   

        return $transactions;
    }
    
}
