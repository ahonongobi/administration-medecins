<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportjournaliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapportjournaliers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('tache_1')->nullable();
            $table->string('tache_2')->nullable();
            $table->string('tache_3')->nullable();
            $table->string('tache_4')->nullable();
            $table->string('tache_5')->nullable();
            $table->string('tache_6')->nullable();
            $table->string('remarque')->nullable();
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
        Schema::dropIfExists('rapportjournaliers');
    }
}
