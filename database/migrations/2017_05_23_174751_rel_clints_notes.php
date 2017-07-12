<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelClintsNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_clints_notes', function (Blueprint $table) {
     $table->increments('id');
     $table->integer('client_id');
     $table->integer('note_id');
     $table->timestamps();   
       });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
