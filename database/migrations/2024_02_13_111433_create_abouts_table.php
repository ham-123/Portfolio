<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('nationalite');
            $table->string('freelance');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('linkedin')->nullable();
            $table->string('skype')->nullable();
            $table->string('languages');
            $table->integer('annee_experience');
            $table->integer('complet_project');
            $table->integer('prix_remporte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
