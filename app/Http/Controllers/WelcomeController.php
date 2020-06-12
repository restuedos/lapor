<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check() && !Auth::user()->hasVerifiedEmail()) {
            return redirect('email/verify');
        } else if(Auth::check() && Auth::user()->hasVerifiedEmail() && (url()->previous() == route('login'))) {
            toast('Selamat datang, '.Auth::user()->nama,'success');
            return view('welcome');
        } else {
            return view('welcome');
        }
    }
}
