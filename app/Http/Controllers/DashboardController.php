<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Majestic_table;


class DashboardController extends Controller
{

  function __construct()
  {

  }

  public function getDashboard()
  {
    return view('dashboard');
  }

  public function getMajestic()
  {
    $datas = Majestic_table::get();
    return view('majestic', compact('datas'));
  }
}
