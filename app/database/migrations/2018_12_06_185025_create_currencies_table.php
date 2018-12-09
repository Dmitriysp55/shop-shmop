<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
          $table->tinyInteger('id') UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY;  // tiny increments proverit
          $table->string('name',30);
          $table->string('currencies_code',3);

          $table->timestamps();
          $table->softDeletes();   // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
