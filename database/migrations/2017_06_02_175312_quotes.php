<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
    Schema::create('quotes', function (Blueprint $table) {
     $table->increments('id');
     $table->string('Quotename');
     $table->dateTime('created_at');
     $table->date('Vdate');
     $table->float('amount');
     $table->string('QuoteNumber');
     $table->integer('client_id');
     $table->integer('sales_id');
     $table->string('status');
     $table->string('note');
       });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('quotes');
    }
}
