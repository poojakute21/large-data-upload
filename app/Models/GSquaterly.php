<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GSquaterly extends Model
{
    use HasFactory;

    protected $table = 'g_squaterlies';
    //protected $fillable = ['id','time_ref','account','code','country_code','product_type','value','status'];

    protected $guarded =[];
}
