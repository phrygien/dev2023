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
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('ecole_name');
            $table->string('ecole_code');
            $table->string('ecole_logo');
            $table->string('telephone_ecole')->unique();
            $table->string('ecole_email')->unique();
            $table->string('ville');
            $table->text('adresse');
            $table->string('responsable');
            $table->string('telephone_responsable')->unique();
            $table->string('email_responsable')->unique();
            $table->string('type_ecole');
            $table->string('status')->default('0');
            $table->text('ecole_description');
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
        Schema::dropIfExists('ecoles');
    }
};
