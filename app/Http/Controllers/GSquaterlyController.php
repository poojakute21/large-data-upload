<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GSquaterly;

class GSquaterlyController extends Controller

{

    public function index(){
        return view('upload-file');
    }

    public function upload(){

        if(request()->has('uploadcsv')){
            //$data = array_map('str_getcsv',file(request()->uploadcsv));
            $data = file(request()->uploadcsv);
            // $headers = $data[0];
            // unset($data[0]);
            
            //Chunking file
            $chunkDatas = array_chunk($data, 1000);
            //convert 1000 records into new file
            foreach ($chunkDatas as $index => $chunkData){
                // echo "<pre>";
                // echo $index;
                // //print_r($chunkData);
                // echo "</pre>";
                $filename = resource_path('temp\\'.date('y-m-d-H-i-s').$index.'.csv');
                //echo $filename;
                file_put_contents($filename, $chunkData);
            }
            return 'Done';
        }else{
            return 'Please upload file';
        }
    }

    public function store(){
        $path = resource_path('temp');
        $files = glob("$path\\*.csv");

        foreach ($files as $key => $file) {
            $data = array_map('str_getcsv', file($file));
            if($key == 0){
                $headers = $data[0];
                unset($data[0]);
            }


            foreach($data as $quatervalue){
                $quaterlyData = array_combine($headers,$quatervalue);
                GSquaterly::create($quaterlyData);
            }
        }
        return $files;
    }
}
