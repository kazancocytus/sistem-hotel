<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function __invoke(Request $request){
        $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        
        $user = Auth::user();
        $name = $user->name;
        $phone = $user->phone;
        
        $noReservation = 'RES-' . date('YmdHis');
        
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');
        
        $daysDifference = Carbon::parse($checkIn)->diffInDays(Carbon::parse($checkOut));
        
        $noRekening = $request->input('no_rekening');

        $suitesInput = $request->input('suites-input');
        $deluxeInput = $request->input('deluxe-input');
        $standartInput = $request->input('standart-input');
        
        $suitesPrice = 399;
        $deluxePrice = 299;
        $standartPrice = 199;
        
        $totalPrice = ($suitesInput * $suitesPrice + $deluxeInput * $deluxePrice + $standartPrice * $standartInput) * $daysDifference;
        
        try{

            if(!$suitesInput && !$deluxeInput && !$standartInput){
                throw new \Exception('select one of type room for transaction');
            }


            $create_transacion = Transaction::create([
            'no_reservation' => $noReservation,
            'name' => $name,
            'phone' => $phone,
            'suites' => $suitesInput,
            'deluxe' => $deluxeInput,
            'standart' => $standartInput,   
            'price' => $totalPrice,
            'no_rekening' => $noRekening,
            'check_in' =>  $checkIn,
            'check_out' => $checkOut
        ]);

        
        return redirect()->back()
            ->with('success', 'transaction succesfully');
        } catch(\Exception $e){
            return redirect()->back()
                            ->withErrors(['error', $e->getMessage()])
                            ->withInput();
        }
    }


    public function StoreTransaction(Request $request){
        $request->validate([
            'no_rekening' => 'required|min:10|max:15',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        
        $user = Auth::user();
        $name = $user->name;
        $phone = $user->phone;
        
        $noReservation = 'RES-' . date('YmdHis');
        
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');
        
        $daysDifference = Carbon::parse($checkIn)->diffInDays(Carbon::parse($checkOut));
        
        $noRekening = $request->input('no_rekening');

        $suitesInput = $request->input('suites-input');
        $deluxeInput = $request->input('deluxe-input');
        $standartInput = $request->input('standart-input');
        
        $suitesPrice = 399;
        $deluxePrice = 299;
        $standartPrice = 199;
        
        $totalPrice = ($suitesInput * $suitesPrice + $deluxeInput * $deluxePrice + $standartPrice * $standartInput) * $daysDifference;
        
        try{

            if(!$suitesInput && !$deluxeInput && !$standartInput){
                throw new \Exception('select one of type room for transaction');
            }


            $create_transacion = Transaction::create([
            'no_reservation' => $noReservation,
            'name' => $name,
            'phone' => $phone,
            'suites' => $suitesInput,
            'deluxe' => $deluxeInput,
            'standart' => $standartInput,   
            'price' => $totalPrice,
            'no_rekening' => $noRekening,
            'check_in' =>  $checkIn,
            'check_out' => $checkOut
        ]);

        
        return redirect()->back()
            ->with('success', 'transaction succesfully');
        } catch(\Exception $e){
            return redirect()->back()
                            ->withErrors(['error', $e->getMessage()])
                            ->withInput();
        }
    }

}
