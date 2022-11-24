<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHebdosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hebdos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('date_rapport');
            $table->string('code_rapport');
            $table->string('psdmp');
            $table->string('psdmp_region');
            $table->string('nombre_patient');
            $table->string('semaine');
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
        Schema::dropIfExists('hebdos');
    }
}
