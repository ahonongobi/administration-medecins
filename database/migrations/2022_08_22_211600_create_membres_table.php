<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('membre_id')->nullable();
            $table->string('user_email');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('email')->nullable();
            $table->string('sexe')->nullable();
            $table->string('age')->nullable();
            $table->string('addresse')->nullable();
            $table->string('departement')->nullable();
            $table->string('tel')->nullable();
            $table->string('tel2')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('carte')->nullable();
            $table->string('service')->nullable();
            $table->string('nom_responsable')->nullable();
            $table->string('valable')->nullable();
            $table->string('arret')->nullable();
            $table->string('disponible')->nullable();
            $table->string('equipement')->nullable();
            $table->string('effet')->nullable();
            $table->string('date_update')->nullable();
            $table->string('visite')->nullable();
            $table->string('birthdate')->nullable();
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
        Schema::dropIfExists('membres');
    }
}
