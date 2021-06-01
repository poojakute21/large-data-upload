<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGSquaterliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_squaterlies', function (Blueprint $table) {
            $table->id();
            $table->string("time_ref");
            $table->string("account");
            $table->string("code");
            $table->string("country_code");
            $table->string("product_type");
            $table->string("value");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_squaterlies');
    }
}
