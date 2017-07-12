<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_client');
            $table->string('email_client');
            $table->string('Website_client');
            $table->string('information_client');
            $table->string('Mobile_client');
            $table->string('Phone_client');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->integer('sales_id ');
            $table->string('Location');
            $table->string('Country');
            $table->string('City');
            $table->string('type_of_business');
            $table->string('Stage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
