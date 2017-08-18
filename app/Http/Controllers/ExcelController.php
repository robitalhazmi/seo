<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item; //coba
use App\Href;
use DB;
use Excel;

class ExcelController extends Controller
{
  public function __contruct()
  {

  }
  public function importExport()
	{
		return view('importExport');
	}

	public function downloadExcel($type)
	{
		$data = Item::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	public function importExcel(Request $request)
	{
		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
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
					DB::table('hrefs')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
}
