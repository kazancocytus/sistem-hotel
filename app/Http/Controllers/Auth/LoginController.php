<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Roles;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\SmartPunct\EllipsesParser;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Login User with Roles

    public function login(Request $request, Roles $roles_name)
    {
        $this->validateLogin($request);

        // dd($roles_name);
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request, $roles_name);
        }


        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
    protected function sendLoginResponse(Request $request, Roles $roles_name)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        // dd($roles_name);
        $userRoles = auth()->user()->roles_name;

        if ($userRoles === "Admin") {
            return redirect()->route('admin.index');
        } elseif($userRoles === "Agent"){

        } elseif($userRoles === "User"){
            $pageRoutes = url()->previous();
            if(!empty($pageRoutes)){
                $redirectRoutes = (strpos($pageRoutes, route('reservation')) !== false) ? route('reservation') : route('home');
            } else{
                route('about');
            }
            

            return redirect()->to($redirectRoutes);
            
        } 

            return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->route('home');
    }

}