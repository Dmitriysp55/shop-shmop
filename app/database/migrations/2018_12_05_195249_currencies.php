<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Currencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('currencies', function (Blueprint $table) {
          $table->increments('id',2);  // tiny increments proverit
          $table->string('name',30);
          $table->string('currencies_code',3);

          $table->timestamps();
          $table->softDeletes();   // deleted_at
    }

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