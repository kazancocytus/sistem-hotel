<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class AgentController extends Controller
{   
    public function IndexStaff(){
        return view('staff.home');
    }

    public function AgentReservation(){
        return view('staff.reservasi');
    }

    public function LogCostumer(){
        $transaction = Transaction::orderBy('created_at','DESC');

        if (request()->has('search')) {
            $searchTerm = request()->get('search');
            $transaction = $transaction->where('name', 'like', '%' . $searchTerm . '%');
        }
    
        $transaction = $transaction->get();

        return view('staff.log', ['transaction' => $transaction]);
    }


    public function InfoReservation(){

        return view('staff.info');
    }

    public function LoginStaff(){
        return view('staff.reg');
    }

    public function DetailReservation(){
        $dataReservation = request()->session()->get('dataReservation');
        $infoCostumer = request()->session()->get('infoCostumer');
        $paymentAgent = request()->session()->get('paymentAgent');

        return view('staff.detail', ['dataReservation' => $dataReservation, 'infoCostumer' => $infoCostumer, 'paymentAgent' => $paymentAgent]);
    }

    public function PaymentReservation(){
        $dataReservation = request()->session()->get('dataReservation');
        $infoCostumer = request()->session()->get('infoCostumer');

        return view('staff.payment', ['infoCostumer' => $infoCostumer, 'dataReservation' => $dataReservation]);
    }



}
