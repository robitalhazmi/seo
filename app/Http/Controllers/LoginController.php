<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function __contruct()
  {
    $this->middleware('guest')->except('dashboard');
  }

  public function getLogin()
  {
    return view('login');
  }
}
