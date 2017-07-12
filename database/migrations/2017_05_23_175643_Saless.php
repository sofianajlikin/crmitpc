<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Saless extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saless', function (Blueprint $table) {
        $table->increments('id');
        $table->string('First_Name');
        $table->string('Last_Name');
        $table->string('Mobile');
        $table->string('postion');
        $table->timestamps();
   });    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('saless')
    }
}
