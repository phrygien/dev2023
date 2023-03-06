<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('eleve_id');
            $table->unsignedInteger('ecole_id');
            $table->unsignedInteger('niveau_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('annee_id');
            $table->date('date_inscription');
            $table->string('numero_inscription')->unique();
            $table->unsignedBigInteger('user_inscrit');
            $table->integer('inscription_statut')->default(0); // 0:non en cours; 1: accepté; 2:reffusé
            $table->softDeletes();
            $table->unsignedBigInteger('user_accepte')->nullable();
            $table->unsignedBigInteger('user_reffuse')->nullable();
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
        Schema::dropIfExists('inscriptions');
    }
};
