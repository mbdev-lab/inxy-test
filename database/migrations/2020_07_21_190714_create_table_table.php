<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('base_64')->index()->unique();
            $table->string('provider_name');
            $table->string('provider');
            $table->string('location');
            $table->string('city');
            $table->string('country');
            $table->string('datacenter');
            $table->string('brand_label');
            $table->string('brand');
            $table->string('model');
            $table->string('cpu');
            $table->integer('core');
            $table->integer('ram');
            $table->string('drive_label');
            $table->integer('drive');
            $table->integer('show_bw')->nullable();
            $table->string('bandwidth');
            $table->integer('ip');
            $table->integer('price');
            $table->timestamp('sell_out_start')->nullable();
            $table->timestamp('sell_out_end')->nullable();
            $table->integer('discount')->nullable();
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
        Schema::dropIfExists('table');
    }
}
