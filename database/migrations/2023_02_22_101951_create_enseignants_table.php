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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('nationalite');
            $table->string('date_naissance');
            $table->string('lieu_naissance')->nullable();
            $table->string('cin');
            $table->text('photo')->nullable();
            $table->string('genre');
            $table->string('civilite');
            $table->string('ville');
            $table->string('adresse');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('telephone_urgenece')->nullable();
            $table->string('grade');
            $table->string('religion')->nullable();
            $table->string('goup_sang')->nullable();
            $table->string('copie_cin')->nullable();
            $table->string('copie_diplome')->nullable();
            $table->unsignedBigInteger('ecole_id');
            $table->foreign('ecole_id')->references('id')->on('ecoles');
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
        Schema::dropIfExists('enseignants');
    }
};
