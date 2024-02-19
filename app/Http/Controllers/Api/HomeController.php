<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Home()
    {
        $facility = Facility::whereIn('id', [4, 5, 6, 7])
            ->get();
        return view('homepage', compact('facility'));
    }

    public function __invoke()
    {
        return view('homepage');
    }

    public function Contact()
    {
        return view('contactpage');
    }

    public function Reservation()
    {
        $typeRoom = DB::table('type_room')
            ->join('number_room', 'number_room.number_room_id', '=', 'type_room.number_room_id')
            ->join('facility', 'facility.id', '=', 'type_room.facility_id')
            ->select('type_room.*', 'number_room.price', 'facility.description_facility')
            ->get();
        return view('reservationpage', compact('typeRoom'));
    }

    public function About(Review $review,)
    {
        $review = Review::first()->get();
        return view('aboutpage', compact('review'));
    }
    public function Detail()
    {
        return view('detailpage');
    }
    public function Food()
    {
        return view('foodpage');
    }

    public function Bwah()
    {
        return view('bwah');
    }

    public function CostumerLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
