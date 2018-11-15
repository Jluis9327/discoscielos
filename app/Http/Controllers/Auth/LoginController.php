<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    protected $redirectTo = '/home';//deli home

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectPath()
    {
        if (auth()->user()->Id_Rol==1 ) {
            if(auth()->user()->Id_Est==1) {
                return $this->redirectTo = '/admin';
            }else{
                Auth::logout();
                return route('login');
            }
        }
        elseif (auth()->user()->Id_Rol==2){
            if(auth()->user()->Id_Est==1){
                return $this->redirectTo='/recep';
            }
            else{
                Auth::logout();
                return route('login');
            }
        }
        elseif (auth()->user()->Id_Rol==3){
            return $this->redirectTo='/client';
        }

        //return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
