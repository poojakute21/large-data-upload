<?php

namespace App\Http\Controllers;

use App\Jobs\GSquaterlyCSVprocess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use App\Models\GSquaterly;
use App\Models\ProgressbarData;

use Illuminate\Support\Facades\DB;

class GSquaterlyController extends Controller

{

    public function index(){
        return view('upload-file');
    }

    public function upload(){
        
        if(request()->has('uploadcsv')){
            $data = file(request()->uploadcsv);
        
            $chunkDatas = array_chunk($data, 1000);
            //convert 1000 records into new file
            $headers =[];
            $batch = Bus::batch([])->dispatch();

            foreach ($chunkDatas as $key => $chunkData){
                $data = array_map('str_getcsv', $chunkData);
                if($key == 0){
                    $headers = $data[0];
                    unset($data[0]);
                }
                $batch->add(new GSquaterlyCSVprocess($data,$headers));
                
            }
            return view('upload-file');
        }else{
            return 'Please upload file';
        }
    }

    public function batch(){
        $batchId = request('id');
        
        
    }

    public function getquaterdata(){
        //DB::connection()->enableQueryLog();
        
        $getDatas = GSquaterly::paginate(10);
        //$queries = DB::getQueryLog();
        //dd($getData);
        return view('viewdata',compact('getDatas'));
    }


    public function progressbar(){
        //DB::connection()->enableQueryLog();
        $getDatas = DB::table('job_batches')->latest()->first();
        //$rowcount = $getDatas->count();
        // $queries = DB::getQueryLog();
        // dd($queries);
        return view('progress-bar-upload',compact('getDatas'));
    }
}
