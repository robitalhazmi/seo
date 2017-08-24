<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Majestic;
use App\Href;

class DashboardController extends Controller
{

  function __construct()
  {
    $this->middleware('auth');
  }

  public function getDashboard()
  {
    return view('dashboard');
  }

  public function getMajestic()
  {
    $datas = Majestic::get();
    return view('majestic', compact('datas'));
  }

  public function getHover()
  {
    $datas = Href::get();
    return view('a_haref', compact('datas'));
  }

  public function getCSV()
  {
    return view('csv');
  }
}
