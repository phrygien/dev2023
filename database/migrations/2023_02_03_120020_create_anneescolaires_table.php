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
        Schema::create('anneescolaires', function (Blueprint $table) {
            $table->id();
            $table->string('annee_name');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('statut')->default(0);
            $table->unsignedBigInteger('ecole_id');
            //$table->foreign('ecole_id')->references('id')->on('ecoles');
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
        Schema::dropIfExists('anneescolaires');
    }
};
