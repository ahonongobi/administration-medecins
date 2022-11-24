<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savedatas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('secret');
            $table->string('date_visite');
            $table->string('code_patient');
            $table->string('type_visite');
            $table->string('wilaya');
            $table->string('structure');
            $table->string('statut');
            $table->string('equipement');
            $table->string('effet');
            $table->string('notification');
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
        Schema::dropIfExists('savedatas');
    }
}
