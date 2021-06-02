<?php

namespace App\Jobs;
use App\Models\GSquaterly;

use Illuminate\Bus\Queueable;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;



class GSquaterlyCSVprocess implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;
    public $headers;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $headers)
    {
        $this->data = $data;
        $this->headers = $headers;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->data as $quatervalue){
            $quaterlyData = array_combine($this->headers,$quatervalue);
            GSquaterly::create($quaterlyData);
        }

    }

    public function failed(Throwable $exception)
    {
        // Send user notification of failure, etc...
    }
}
