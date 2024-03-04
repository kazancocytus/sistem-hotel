<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

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
        $dataReservation = request()->session()->get('dataReservation');

        // dd($dataReservation);
        return view('staff.info')->with('dataReservation', $dataReservation);
    }

    public function LoginStaff(){
        return view('staff.reg');
    }

    public function DetailReservation(){
        return view('staff.detail');
    }

    public function PaymentReservation(){
        $reservationNumber = 'RES-' . date('YmdHis');
        $infoCostumer = session()->get('infoCostumer');

        return view('staff.payment', ['reservationNumber' => $reservationNumber, 'infoCostumer' => $infoCostumer]);
    }

    
}
