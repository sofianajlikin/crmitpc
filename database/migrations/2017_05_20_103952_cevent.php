<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cevent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cevent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_event');
            $table->string('sales_id');
            $table->string('client_id');
            $table->string('details');
            $table->date('Nextfollowupdate');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('cevent');
    }
}
