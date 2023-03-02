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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom_pere')->nullable();
            $table->string('nom_prenom_mere')->nullable();
            $table->string('fonction_pere');
            $table->string('fonction_mere');
            $table->string('ville_parent');
            $table->text('adresse_parent');
            $table->string('telephone_parent')->unique();
            $table->string('email_parent')->nullable()->unique();
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
        Schema::dropIfExists('parents');
    }
};
