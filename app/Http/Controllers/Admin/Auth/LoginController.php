<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Auth;

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


    protected $redirectTo = '/home';
    protected $guard = 'admins';


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    // Sobreescribimos este método para personalizar la ruta de la vista que queremos mostrar
    public function showLoginForm()
    {
        return view('administrators.login');
    }

    /**
    * The user has been authenticated.
    *   Cuando se ha identificado.
    * @param  \Illuminate\Http\Request  $request
    * @param  mixed  $user
    * @return mixed
    */
    public function authenticated(Request $request, $user)
    {
        return view('administrators.home', compact('user'));
    }

    // Personalizamos el guarg() que queremos utilizar. Previamente hemos definido en config/auth.php
    protected function guard()
    {
        return Auth::guard('admins');
    }

    // Lo utilizamos para hacer el login con el username en vez de con el email.
    public function username()
    {
        return 'username';
    }

}
