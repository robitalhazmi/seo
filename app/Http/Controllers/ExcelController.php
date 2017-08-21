<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Majestic;
use App\Href;
use DB;
use Excel;

class ExcelController extends Controller
{
  public function __contruct()
  {

  }

	public function downloadExcel($type, $table)
	{
    if ($table == 'majestic') {
      $data = Majestic::get()->toArray();
      return Excel::create('majestic', function($excel) use ($data) {
        $excel->sheet('majesticCSV', function($sheet) use ($data)
            {
          $sheet->fromArray($data);
            });
      })->download($type);
    }
    else {
      $data = Href::get()->toArray();
      return Excel::create('ahrefs', function($excel) use ($data) {
        $excel->sheet('ahrefsCSV', function($sheet) use ($data)
            {
          $sheet->fromArray($data);
            });
      })->download($type);
    }
	}

	public function importExcel(Request $request)
	{
		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
      if ($request->table == 'majestic') {
        if(!empty($data) && $data->count()){
  				foreach ($data as $key => $value) {
  					$insert[] = [
              'item' => $value->item,
              'status' => $value->status,
              'external_backlinks' => $value->external_backlinks,
              'external_backlinks_edu' => $value->external_backlinks_edu,
              'referring_domains' => $value->referring_domains,
              'referring_domains_edu' => $value->referring_domains_edu,
              'class_c_subnets' => $value->class_c_subnets,
              'indexed_urls' => $value->indexed_urls,
              'trust_flow' => $value->trust_flow,
              'citation_flow' => $value->citation_flow
            ];
  				}
  				if(!empty($insert)){
            DB::table('majestics')->truncate();
  					DB::table('majestics')->insert($insert);
  					return redirect('majestic');
  				}
  			}
      }
      else {
        if(!empty($data) && $data->count()){
          foreach ($data as $key => $value) {
            $insert[] = [
              'target' => $value->target,
              'domains' => $value->domains,
              'ref_edu_domains' => $value->ref_edu_domains,
              'ref_ips' => $value->ref_ips,
              'ref_subnets' => $value->ref_subnets,
              'linked_domains' => $value->linked_domains,
              'total_backlinks' => $value->total_backlinks,
              'total_traffic' => $value->total_traffic,
              'bahasa' => $value->bahasa
            ];
          }
          if(!empty($insert)){
            DB::table('hrefs')->truncate();
            DB::table('hrefs')->insert($insert);
            return redirect('aharef');
          }
        }
      }
		}
		return back();
	}
}
