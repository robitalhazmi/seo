<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function __contruct()
  {
    //$this->middleware('guest')->except('dashboard');
  }

  public function getLogin()
  {
    if (!Auth::check()) {
      return view('login');
    }
    else {
      return redirect()->route('dashboard');
    }
  }

  public function postLogin(Request $request)
  {
    $username = $request->input('username');
    $password = $request->input('password');
    $remember = $request->input('checkbox');

    if (Auth::attempt(['username' => $username, 'password' => $password], $remember)) {
      return response()->json(['success'=> true]);
    }
    else {
      return response()->json(['error'=>true, 'message' => 'Nama Pengguna atau Kata Sandi yang anda masukkan salah']);
    }
  }

  public function logout(){
    Auth::logout();
    return redirect('login');
  }
}
