<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function homeRedirector()
    {
      if(Auth::User()->role == 'ADMIN')
      {
        return view('dashboard');
      }
      if(Auth::User()->role == 'DEPT')
      {
        return view('dashboard');
      }
      if(Auth::User()->role == 'DC')
      {
        return view('dashboard');
      }
    }
}
