<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homeRedirector()
    {
        if (Auth::User()->role == 'ADMIN') {
            return view('dashboard');
        }
        if (Auth::User()->role == 'DEPT') {
            return view('dashboard');
        }
        if (Auth::User()->role == 'DC') {
            return view('dashboard');
        }
        if (Auth::User()->role == 'SBANK') {
            return view('dashboard');
        }
        if (Auth::User()->role == 'LBANK') {
            return view('dashboard');
        }
    }
}
