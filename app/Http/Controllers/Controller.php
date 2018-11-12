<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Records;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveData(Request $request){
    	$record = new Records;
		$record->real_id = $request->id;
		$record->name = $request->name;
		$record->type = $request->type;
		$record->save();
        return redirect()->back()->with('status', 'Course saved!');	
    }

    public function getData(Request $request) {
    	$records = Records::all();
    	return view('saved_list')->with('records',$records);
    }

    public function getSingleData(Request $request) {
    	$record = Records::find($request->id);
    	return view('saved_single_data')->with('record',$record);
    }

}
