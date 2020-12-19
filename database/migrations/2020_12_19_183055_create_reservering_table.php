<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserveringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservering', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->date('begindatum');
            $table->date('einddatum');
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('auto_id')->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservering');
    }
}
