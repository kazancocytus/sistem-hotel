<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\NumberRoom;

class TransactionController extends Controller
{
    public function __invoke(Request $request){
        $request->validate([
            'no_rekening' => 'required|min:10|max:16',
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


        $deluxeRoomNumbers = NumberRoom::where('type_room', 1)
            ->where('available', true)
            ->take($deluxeInput)
            ->pluck('number_room')
            ->toArray();

        $suiteRoomNumbers = NumberRoom::where('type_room', 0)
            ->where('available', true)
            ->take($suitesInput)
            ->pluck('number_room')
            ->toArray();

        $standartRoomNumbers = NumberRoom::where('type_room', 2)
            ->where('available', true)
            ->take($standartInput)
            ->pluck('number_room')
            ->toArray();

        $allRoomNumbers = array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers);    
        $selectedRoomNumber = $allRoomNumbers[0];
        
        if (count($suiteRoomNumbers) == $suitesInput && count($deluxeRoomNumbers) == $deluxeInput && count($standartRoomNumbers) == $standartInput) {
            NumberRoom::whereIn('number_room', array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers))
            ->update(['available' => false]);

        

        $suitesPrice = 399;
        $deluxePrice = 299;
        $standartPrice = 199;
        
        $totalPrice = ($suitesInput * $suitesPrice + $deluxeInput * $deluxePrice + $standartPrice * $standartInput) * $daysDifference;

        // dd($room);
        
        try{
            
            $create_transacion = Transaction::create([
            'number_room_id' => $selectedRoomNumber,
            'deluxe_room_number' => json_encode($deluxeRoomNumbers),
            'suite_room_number' => json_encode($suiteRoomNumbers),
            'standart_room_number' => json_encode($standartRoomNumbers),
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

        $this->AvailableRoom();

        return redirect()->back()
            ->with('success', 'transaction succesfully');
        } catch(\Exception $e){
            return redirect()->back()
            ->withErrors(['error', $e->getMessage()])
            ->withInput();
        }

    
    }
        
    
}

    public function StoreTransaction(Request $request){
        $request->validate([
            'no_rekening' => 'required|min:10|max:16',
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


        $deluxeRoomNumbers = NumberRoom::where('type_room', 1)
            ->where('available', true)
            ->take($deluxeInput)
            ->pluck('number_room')
            ->toArray();

        $suiteRoomNumbers = NumberRoom::where('type_room', 0)
            ->where('available', true)
            ->take($suitesInput)
            ->pluck('number_room')
            ->toArray();

        $standartRoomNumbers = NumberRoom::where('type_room', 2)
            ->where('available', true)
            ->take($standartInput)
            ->pluck('number_room')
            ->toArray();

        $allRoomNumbers = array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers);    
        $selectedRoomNumber = $allRoomNumbers[0];
        
        if (count($suiteRoomNumbers) == $suitesInput && count($deluxeRoomNumbers) == $deluxeInput && count($standartRoomNumbers) == $standartInput) {
            NumberRoom::whereIn('number_room', array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers))
            ->update(['available' => false]);

        

        $suitesPrice = 399;
        $deluxePrice = 299;
        $standartPrice = 199;
        
        $totalPrice = ($suitesInput * $suitesPrice + $deluxeInput * $deluxePrice + $standartPrice * $standartInput) * $daysDifference;

        
        try{
            
            $create_transacion = Transaction::create([
            'number_room_id' => $selectedRoomNumber,
            'deluxe_room_number' => json_encode($deluxeRoomNumbers),
            'suite_room_number' => json_encode($suiteRoomNumbers),
            'standart_room_number' => json_encode($standartRoomNumbers),
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


        $this->AvailableRoom();
        return redirect()->back()
            ->with('success', 'transaction succesfully');
        
        } catch(\Exception $e){
            return redirect()->back()
                            ->withErrors(['error', $e->getMessage()])
                            ->withInput();
        }
   
    }

}

    public function AvailableRoom(){
        
        $rooms = Transaction::whereDate('check_out', '<=', Carbon::today())
        ->pluck('number_room_id')
        ->toArray();

        if (!empty($rooms)) {
            NumberRoom::whereIn('id', $rooms)->update(['available' => true]);
            return response()->json(['message' => 'Rooms are now available'], 200);
        }

        return response()->json(['message' => 'No rooms to free up'], 200);
    }


}