<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\AgentController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facility;
use App\Models\Transaction;
use App\Models\Food;
use App\Models\User;
use App\Models\NumberRoom;

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
        $count = $this->availableRooms();
        $totalPrice = $this->AllPrice();
        

        return view('admin.report', ['totalRooms' => $totalRooms, 'transaction' => $transaction, 'latestId' => $latestId, 'count' => $count, 'totalPrice' => $totalPrice]);
    }

    public function AllPrice(){
        $totalPrice = Transaction::sum('price');

        return $totalPrice;
    }

    public function availableRooms(){
        $count = NumberRoom::where('available', true)->count();
        $agentController = new AgentController;

        $agentController->LogCostumer($count, $this);

        return $count;
    }

    public function AdminUser(){
        $user = User::all();

        return view('admin.user',compact('user'));
    }

    public function DeleteUser($id, Request $request){
        $user = $request->all();
        User::findOrFail($id)->delete($user);

        return redirect()->route('admin.user');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You Logout');
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

    public function DeleteDataReport($id, Request $request){
        $data = $request->all();
        Transaction::findOrFail($id)->delete($data);
        
        return redirect()->route('admin.index');
    }
    
}
