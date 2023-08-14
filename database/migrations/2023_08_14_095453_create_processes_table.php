<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(); //Nom du traitement de données.
            $table->string('description')->nullable(); //Description détaillée du traitement.
            $table->string('fond1')->nullable(); //Description détaillée du traitement.
            $table->string('fond2')->nullable(); //Description détaillée du traitement.
            $table->string('fond3')->nullable(); //Description détaillée du traitement.
            $table->string('fond4')->nullable(); //Description détaillée du traitement.
            $table->string('fond5')->nullable(); //Description détaillée du traitement.
            $table->string('fond6')->nullable(); //Description détaillée du traitement.
            $table->string('fond7')->nullable(); //Description détaillée du traitement.
            $table->string('interet_legitime')->nullable();
            $table->string('responsible')->nullable(); //Responsable   du traitement.
            $table->string('data_protection_officier')->nullable(); //Data Protection officier .
            $table->string('representant_du_responsable')->nullable(); //Representant Du responsable.
            $table->string('responsable_conjoint')->nullable(); //Data Protection officier .
            $table->string('nature_du_traitment')->nullable(); //Data Protection officier .
            $table->string('finalite_du_traitment')->nullable(); //Data Protection officier .
            $table->string('caraterestique_du_traitment')->nullable(); //Data Protection officier .
            $table->string('categorie_des_personnes')->nullable(); //Data Protection officier .
            $table->string('donnes_a_carecter_personelle')->nullable(); //Data Protection officier .
            $table->string('destinataires')->nullable(); //Data Protection officier .
            $table->string('nature_des_donnees')->nullable(); //Data Protection officier .
            $table->string('duree_de_conservation')->nullable(); //Data Protection officier .
            $table->string('Pservice')->nullable(); //Data Protection officier .
            $table->string('mesures')->nullable(); //Data Protection officier .
            $table->string('description_generale')->nullable(); //Data Protection officier .





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};
