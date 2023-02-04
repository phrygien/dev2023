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
        Schema::create('cycles', function (Blueprint $table) {
            $table->id();
            $table->string('cycle_name');
            $table->string('cycle_code');
            $table->unsignedInteger('ecole_id');
            $table->foreign('ecole_id')->references('id')->on('ecoles');
            $table->unsignedBigInteger('annee_id');
            $table->foreign('annee_id')->references('id')->on('anneescolaires');
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
        Schema::dropIfExists('cycles');
    }
};
