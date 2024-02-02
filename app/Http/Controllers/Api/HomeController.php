<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  
use App\Models\User;  
use Illuminate\Http\RedirectResponse;

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
        // $id = Auth::user()->id;
        // $user = User::find($id);
        return view('homepage');
    }

    public function Contact(){
        return view('contactpage');
    }

    public function Reservation(){
        return view('reservationpage');
    }

    public function About(){
        return view('aboutpage');
    }
    public function Detail(){
        return view('detailpage');
    }

    public function ModalLogin(){
        // return view('#modalLogin');
    }

    public function CostumerLogout(Request $request):RedirectResponse { 
        Auth::guard('web')->logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        
        return redirect()->route('home');
    }

}
