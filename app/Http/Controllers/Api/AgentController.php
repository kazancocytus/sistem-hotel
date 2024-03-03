<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{   
    public function IndexStaff(){
        return view('staff.home');
    }

    public function AgentReservation(){
        return view('staff.reservasi');
    }

    public function LogCostumer(){
        return view('staff.log');
    }

    public function InfoReservation(){
        return view('staff.info');
    }

    public function LoginStaff(){
        return view('staff.reg');
    }

    public function DetailReservation(){
        return view('staff.detail');
    }

    public function PaymentReservation(){
        return view('staff.payment');
    }
}
