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
    $external_backlinks = Majestic::orderBy('external_backlinks', 'desc')
                                  ->take('10')
                                  ->get();
    $external_backlinks_total=0;
    for ($i=0; $i <10 ; $i++) {
      $external_backlinks_total += $external_backlinks[$i]['external_backlinks'];
    }
    $external_backlinks_edus = Majestic::orderBy('external_backlinks_edu', 'desc')
                                  ->take('10')
                                  ->get();
    $external_backlinks_edu_total=0;
    for ($i=0; $i <10 ; $i++) {
      $external_backlinks_edu_total += $external_backlinks_edus[$i]['external_backlinks_edu'];
    }
    $referring_domains = Majestic::orderBy('referring_domains', 'desc')
                                  ->take('10')
                                  ->get();
    $referring_domains_total=0;
    for ($i=0; $i <10 ; $i++) {
      $referring_domains_total += $referring_domains[$i]['referring_domains'];
    }
    $referring_domains_edus = Majestic::orderBy('referring_domains_edu', 'desc')
                                  ->take('10')
                                  ->get();
    $referring_domains_edu_total=0;
    for ($i=0; $i <10 ; $i++) {
      $referring_domains_edu_total += $referring_domains_edus[$i]['referring_domains_edu'];
    }
    $class_c_subnets = Majestic::orderBy('class_c_subnets', 'desc')
                                  ->take('10')
                                  ->get();
    $class_c_subnets_total=0;
    for ($i=0; $i <10 ; $i++) {
      $class_c_subnets_total += $class_c_subnets[$i]['class_c_subnets'];
    }
    $indexed_urls = Majestic::orderBy('indexed_urls', 'desc')
                                  ->take('10')
                                  ->get();
    $indexed_urls_total=0;
    for ($i=0; $i <10 ; $i++) {
      $indexed_urls_total += $indexed_urls[$i]['indexed_urls'];
    }
    $trust_flows = Majestic::orderBy('trust_flow', 'desc')
                                  ->take('10')
                                  ->get();
    $trust_flow_total=0;
    for ($i=0; $i <10 ; $i++) {
      $trust_flow_total += $trust_flows[$i]['trust_flow'];
    }
    $citation_flows = Majestic::orderBy('citation_flow', 'desc')
                                  ->take('10')
                                  ->get();
    $citation_flow_total=0;
    for ($i=0; $i <10 ; $i++) {
      $citation_flow_total += $citation_flows[$i]['citation_flow'];
    }
    return response()->view('dashboard', compact('external_backlinks',
                                                 'external_backlinks_total',
                                                 'external_backlinks_edus',
                                                 'external_backlinks_edu_total',
                                                 'referring_domains',
                                                 'referring_domains_total',
                                                 'referring_domains_edus',
                                                 'referring_domains_edu_total',
                                                 'class_c_subnets',
                                                 'class_c_subnets_total',
                                                 'indexed_urls',
                                                 'indexed_urls_total',
                                                 'trust_flows',
                                                 'trust_flow_total',
                                                 'citation_flows',
                                                 'citation_flow_total'
                                               ));
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
