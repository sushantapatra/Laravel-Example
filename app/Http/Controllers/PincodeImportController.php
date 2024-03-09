<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Jobs\PincodeCSVData;
use Illuminate\Support\Facades\Bus;
class PincodeImportController extends Controller{
    //
    public function index(){
        return view('pincode_import');
    }
    public function store(Request $request){
        if($request->has('csv')){
            $csv = file($request->csv);
            $chunks = array_chunk( $csv, 1000);
            $header=[];
            $batch=Bus::batch([])->dispatch();
            foreach ($chunks as $key => $chunk) {
                $data = array_map('str_getcsv', $chunk);
                if($key == 0){
                    $header=$data[0];
                    unset($data[0]);
                }

                $batch->add(new PincodeCSVData($header,$data));

            }
        }
        return back()->withInput()->with('success','CSV imported added on queue. will update you once done.');
      
    }




}
