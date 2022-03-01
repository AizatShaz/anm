<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodProsesConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kod_proses_configs', function (Blueprint $table) {
            $table->id();
            $table->text("input1")->nullable();
            $table->text("input2")->nullable();
            $table->text("input3")->nullable();
            $table->text("input4")->nullable();
            $table->text("input5")->nullable();
            $table->text("input6")->nullable();

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
        Schema::dropIfExists('kod_proses_configs');
    }
}
