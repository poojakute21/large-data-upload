<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressbarData extends Model
{
    use HasFactory;

    protected $table = 'job_batches';
    //protected $fillable = ['id','time_ref','account','code','country_code','product_type','value','status'];

    protected $guarded =[];
}
