<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('kenteken', 8);
            $table->string('merk', 155);
            $table->string('type', 155);
            $table->integer('prijs-per-dag');
            $table->foreignId('reservering_id')->nullable()->index();
            $table->foreignId('user_id')->nullable()->index()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto');
    }
}
