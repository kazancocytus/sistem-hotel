<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\NumberRoom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    public function __invoke(Request $request)
    {
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

            try {

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

                return redirect()->route('home')
                    ->with('success', 'Transaction Succesfully!');
            } catch (\Exception $e) {
                return redirect()->back()
                    ->withErrors(['error', $e->getMessage()])
                    ->withInput();
            }
        }
    }

    public function StoreTransaction(Request $request)
    {
        // validasi input html
        $request->validate([
            'no_rekening' => 'required|min:10|max:16',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        // check apakah sudah login atau belum
        $user = Auth::user();
        $name = $user->name;
        $phone = $user->phone;

        // membuat no reservation berdasarkan tahun-bulan-hari-jam-menit-detik
        $noReservation = 'RES-' . date('YmdHis');

        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');

        // check-in dikalikan berdasar jumlah hari ke check-out
        $daysDifference = Carbon::parse($checkIn)->diffInDays(Carbon::parse($checkOut));

        $noRekening = $request->input('no_rekening');

        $suitesInput = $request->input('suites-input');
        $deluxeInput = $request->input('deluxe-input');
        $standartInput = $request->input('standart-input');


        // mengambil data-data type room
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

        // jika user sudah memilih ruangan, ruangan yang dipilih akan berubah menjadi false atau tidak tersedia
        if (count($suiteRoomNumbers) == $suitesInput && count($deluxeRoomNumbers) == $deluxeInput && count($standartRoomNumbers) == $standartInput) {
            NumberRoom::whereIn('number_room', array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers))
                ->update(['available' => false]);


            // harga type room
            $suitesPrice = 399;
            $deluxePrice = 299;
            $standartPrice = 199;

            // menghitung total price
            $totalPrice = ($suitesInput * $suitesPrice + $deluxeInput * $deluxePrice + $standartPrice * $standartInput) * $daysDifference;


            try {

                $create_transacion = Transaction::create([
                    'number_room_id' => $selectedRoomNumber,
                    'deluxe_room_number' => json_encode($deluxeRoomNumbers),
                    'suite_room_number' => json_encode($suiteRoomNumbers),
                    'standart_room_number' => json_encode($standartRoomNumbers),
                    'no_reservation' => $noReservation,
                    'name' => $name,
                    'phone' => $phone,
                    'suite' => $suitesInput,
                    'deluxe' => $deluxeInput,
                    'standart' => $standartInput,
                    'price' => $totalPrice,
                    'no_rekening' => $noRekening,
                    'check_in' =>  $checkIn,
                    'check_out' => $checkOut
                ]);


                $this->AvailableRoom();
                return redirect()->route('home')
                    ->with('success', 'Transaction Succesfully');
            } catch (\Exception $e) {
                return redirect()->back()
                    ->withErrors(['error', $e->getMessage()])
                    ->withInput();
            }
        }
    }



    public function ReservationAgent(Request $request)
    {
        $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        $deluxeInput = $request->input('deluxe');
        $suitesInput = $request->input('suite');
        $standartInput = $request->input('standart');
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');

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

        $reservationNumber = 'RES-' . date('YmdHis');


        $daysDifference = Carbon::parse($checkIn)->diffInDays(Carbon::parse($checkOut));

        $allRoomNumbers = array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers);
        $selectedRoomNumber = $allRoomNumbers[0];

        if (count($suiteRoomNumbers) == $suitesInput && count($deluxeRoomNumbers) == $deluxeInput && count($standartRoomNumbers) == $standartInput) {
            NumberRoom::whereIn('number_room', array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers))
                ->update(['available' => false]);

            $suitesPrice = 399;
            $deluxePrice = 299;
            $standartPrice = 199;

            $totalPrice = ($suitesInput * $suitesPrice + $deluxeInput * $deluxePrice + $standartPrice * $standartInput) * $daysDifference;

            try {

                $dataReservation = [
                    'number_room_id' => $selectedRoomNumber,
                    'no_reservation' => $reservationNumber,
                    'deluxe_room_number' => json_encode($deluxeRoomNumbers),
                    'suite_room_number' => json_encode($suiteRoomNumbers),
                    'standart_room_number' => json_encode($standartRoomNumbers),
                    'check_in' => $checkIn,
                    'check_out' => $checkOut,
                    'deluxe' => $deluxeInput,
                    'suite' => $suitesInput,
                    'standart' => $standartInput,
                    'price' => $totalPrice,
                ];

                $this->AvailableRoom();

                $request->session()->put('dataReservation', $dataReservation);
                $request->session()->save();

                return redirect()->route('info.reservation')->with('success', '3 Step More');
            } catch (\Exception $e) {
                return redirect()->back()
                    ->withErrors(['error', $e->getMessage()])
                    ->withInput();
            }
        } else {
            return redirect()->back()->with('error', 'Please fill In Correctly');
        }
    }


    public function AgentInfoReservation(Request $request)
    {
        $request->validate([
            'nip' => 'required|numeric|min:13,max:20',
            'name' => 'required|max:50|string',
            'email' => 'required|email|max:100',
            'phone' => 'required|numeric|min:11,max:17',
            'birth_date' => 'required|date',
        ]);


        $nip = $request->input('nip');
        $name = $request->input('name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone');
        $birthDate = $request->input('birth_date');

        $infoCostumer = [
            'nip' => $nip,
            'name' => $name,
            'email' => $email,
            'phone' => $phoneNumber,
            'birth_date' => $birthDate,
        ];

        $request->session()->put('infoCostumer', $infoCostumer);
        $request->session()->save();


        return redirect()->route('payment.reservation')->with('success', '2 Step More');
    }


    public function AgentPaymentReservation(Request $request)
    {

        $request->validate([
            'no_rekening' => 'required|numeric|min:10,max:20',
        ]);

        $noReservation = $request->input('no_reservation');
        $noRekening = $request->input('no_rekening');

        $paymentAgent = [
            'no_reservation' => $noReservation,
            'no_rekening' => $noRekening,
        ];

        $request->session()->put('paymentAgent', $paymentAgent);
        $request->session()->save();

        return redirect()->route('detail.reservation')->with('success', '1 Step More');
    }

    public function CostumerDetailTransaction(Request $request)
    {
        $dataReservation = request()->session()->get('dataReservation');
        $infoCostumer = request()->session()->get('infoCostumer');
        $paymentAgent = request()->session()->get('paymentAgent');

        $name = $infoCostumer['name'];
        $phoneNumber = $infoCostumer['phone'];
        $noRekening = $paymentAgent['no_rekening'];
        $numberRoomId = $dataReservation['number_room_id'];
        $checkIn = $dataReservation['check_in'];
        $checkOut = $dataReservation['check_out'];
        $reservationNumber = $dataReservation['no_reservation'];
        $suitesInput = $dataReservation['suite'];
        $deluxeInput = $dataReservation['deluxe'];
        $standartInput = $dataReservation['standart'];
        $deluxeRoomNumbers = $dataReservation['deluxe_room_number'];
        $suiteRoomNumbers = $dataReservation['suite_room_number'];
        $standartRoomNumbers = $dataReservation['standart_room_number'];
        $totalPrice = $dataReservation['price'];

        Transaction::create([
            'number_room_id' => $numberRoomId,
            'no_reservation' => $reservationNumber,
            'name' => $name,
            'no_rekening' => $noRekening,
            'phone' => $phoneNumber,
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'price' => $totalPrice,
            'suite' => $suitesInput,
            'deluxe' => $deluxeInput,
            'standart' => $standartInput,
            'deluxe_room_number' => json_decode($deluxeRoomNumbers),
            'suite_room_number' => json_decode($suiteRoomNumbers),
            'standart_room_number' => json_decode($standartRoomNumbers),
        ]);

        $this->AvailableRoom();

        return redirect()->route('log.costumer')->with('success', 'Transaction Complete');
    }

    public function editAvailableRoom($type, $currentAmount, $newAmount, $rid)
    {
        // Mapping jenis kamar ke tipe yang sesuai
        $typeMapping = ['suite' => 0, 'deluxe' => 1, 'standard' => 2];
        if (!array_key_exists($type, $typeMapping)) {
            return;
        }
        $roomType = $typeMapping[$type] ?? null;

        if ($roomType === null) {
            return;
        }

        // Mengambil transaksi yang sesuai
        $transaction = Transaction::findOrFail($rid);

        // Mengambil nomor ruangan yang sudah ada dalam transaksi
        $currentRoomNumbers = json_decode($transaction->{$type . '_room_number'}, true) ?? [];

        // Jika tidak ada perubahan pada jumlah ruangan baru, tidak perlu melakukan apapun
        if ($newAmount == $currentAmount) {
            return;
        }

        // Mengambil nomor ruangan yang harus dipertahankan
        $keptRoomNumbers = $currentRoomNumbers;

        // Jika ada perubahan jumlah ruangan
        if ($newAmount < $currentAmount) {
            // Menghitung jumlah ruangan yang harus dilepaskan
            $roomsToRelease = $currentAmount - $newAmount;

            // Mengambil nomor ruangan yang harus dilepaskan
            $releasedRoomNumbers = array_slice($currentRoomNumbers, -$roomsToRelease);

            // Memperbarui status ketersediaan nomor ruangan yang akan dirilis
            if (!empty($releasedRoomNumbers)) {
                NumberRoom::whereIn('number_room', $releasedRoomNumbers)
                    ->where('type_room', $roomType)
                    ->update(['available' => true]);
            }
        }

        // Jika jumlah ruangan baru lebih besar dari jumlah ruangan sebelumnya, maka nomor ruangan tidak berubah
        // Sehingga status ketersediaan nomor ruangan yang ada tidak berubah
        // Jika jumlah ruangan baru kurang dari jumlah ruangan sebelumnya, maka nomor ruangan yang dilepaskan
        // akan dikembalikan ke status ketersediaan yang benar sebelumnya
        if ($newAmount < $currentAmount) {
            // Mengembalikan status ketersediaan nomor ruangan yang dilepaskan ke status sebelumnya
            NumberRoom::whereIn('number_room', $releasedRoomNumbers)
                ->where('type_room', $roomType)
                ->update(['available' => false]);
        }

        // Memperbarui transaksi dengan daftar nomor ruangan yang harus dipertahankan
        $transaction->{$type . '_room_number'} = json_encode($keptRoomNumbers);
        $transaction->save();
    }


    public function AvailableRoom()
    {
        $usedRoomIds = Transaction::whereDate('check_out', '<=', Carbon::today())
            ->pluck('number_room_id')
            ->toArray();

        if (!empty($usedRoomIds)) {
            NumberRoom::whereIn('id', $usedRoomIds)
                ->update(['available' => true]);

            return response()->json(['message' => 'Rooms are now available'], 200);
        }

        return response()->json(['message' => 'No Room Available At The Moment'], 200);
    }




    public function UpdateDataReport(Request $request)
    {
        $rid = $request->id;

        $request->validate([
            'name' => 'required',
            'suite' => 'required',
            'deluxe' => 'required',
            'standart' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);


        $deluxeInput = $request->input('deluxe');
        $suitesInput = $request->input('suite');
        $standartInput = $request->input('standart');
        $inputs = [
            'deluxe' => $deluxeInput,
            'suite' => $suitesInput,
            'standart' => $standartInput,
        ];
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');
        $name = $request->input('name');

        $daysDifference = Carbon::parse($checkIn)->diffInDays(Carbon::parse($checkOut));

        $suitesPrice = 399;
        $deluxePrice = 299;
        $standartPrice = 199;

        $transaction = Transaction::findOrFail($rid);

        foreach ($inputs as $type => $amount) {
            $currentAmount = $transaction->{$type};
            if ($currentAmount != $amount) {
                $this->editAvailableRoom($type, $currentAmount, $amount, $rid);
            }
        }

        NumberRoom::where('available', false)->update(['available' => true]);

        // Mendapatkan nomor ruangan yang digunakan dalam transaksi
        $usedSuiteRoomNumbers = json_decode($transaction->suite_room_number ?? '[]', true);
        $usedDeluxeRoomNumbers = json_decode($transaction->deluxe_room_number ?? '[]', true);
        $usedStandartRoomNumbers = json_decode($transaction->standart_room_number ?? '[]', true);

        // Menggabungkan dan menyaring nomor ruangan yang tersedia untuk setiap tipe kamar
        $suiteRoomNumbers = NumberRoom::where('type_room', 0)
            ->where('available', true)
            ->whereNotIn('number_room', $usedSuiteRoomNumbers)
            ->take($suitesInput)
            ->pluck('number_room')
            ->toArray();

        $deluxeRoomNumbers = NumberRoom::where('type_room', 1)
            ->where('available', true)
            ->whereNotIn('number_room', $usedDeluxeRoomNumbers)
            ->take($deluxeInput)
            ->pluck('number_room')
            ->toArray();

        $standartRoomNumbers = NumberRoom::where('type_room', 2)
            ->where('available', true)
            ->whereNotIn('number_room', $usedStandartRoomNumbers)
            ->take($standartInput)
            ->pluck('number_room')
            ->toArray();

        // Menggabungkan nomor kamar yang tersedia untuk semua jenis kamar
        $allRoomNumbers = array_merge($suiteRoomNumbers, $deluxeRoomNumbers, $standartRoomNumbers);

        // Memperbarui status ketersediaan nomor kamar
        NumberRoom::whereIn('number_room', $allRoomNumbers)
            ->update(['available' => false]);


        $totalPrice = ($suitesInput * $suitesPrice + $deluxeInput * $deluxePrice + $standartPrice * $standartInput) * $daysDifference;


        try {

            $transaction->update([
                'name' => $name,
                'suite' => $suitesInput,
                'deluxe' => $deluxeInput,
                'standart' => $standartInput,
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'deluxe_room_number' => json_encode($deluxeRoomNumbers),
                'suite_room_number' => json_encode($suiteRoomNumbers),
                'standart_room_number' => json_encode($standartRoomNumbers),
                'price' => $totalPrice,
            ]);

            // $this->AvailableRoom();

            return redirect()->route('admin.index')->with('success', 'Success');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => $e->getMessage()])
                ->withInput();
        }
    }
}
