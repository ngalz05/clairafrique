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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('numero_commande')->unique();
            $table->foreignId('utilisateur_id')->constrained()->cascadeOnDelete();
            $table->decimal('montant', 10, 2)->nullable();
            $table->decimal('frais_port', 10, 2)->nullable();
            $table->decimal('remise_globale', 5, 2)->nullable();
            $table->string('mode_paiement')->nullable(); // WAVE, OM, CB
            $table->string('statut')->default('en_attente');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
