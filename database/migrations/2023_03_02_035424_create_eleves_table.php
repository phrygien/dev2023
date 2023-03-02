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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom');
            $table->string('appelation');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->integer('age');
            $table->string('sexe');
            $table->string('photo')->nullable();
            $table->string('cin')->nullable();
            $table->string('acte_naissance')->nullable();
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('ecole_id');
            $table->string('ville');
            $table->string('adresse');
            $table->string('telephone')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('religion')->nullable();
            $table->string('group_sang')->nullable();
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
        Schema::dropIfExists('eleves');
    }
};
