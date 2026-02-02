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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('code_produit')->unique(); // identifiant i‑préface
            $table->string('titre');
            $table->string('auteur')->nullable();
            $table->string('editeur')->nullable();
            $table->string('type')->nullable();
            $table->string('ean13')->nullable();
            $table->decimal('tva', 5, 2)->nullable();
            $table->decimal('prix_ht', 10, 2)->nullable();
            $table->decimal('prix_ttc', 10, 2)->nullable();
            $table->integer('stock')->default(0);
            $table->string('rayon')->nullable();
            $table->tinyInteger('disponibilite')->default(1);
            $table->string('collection')->nullable();
            $table->date('date_parution')->nullable();
            $table->integer('poids')->nullable();
            $table->string('format')->nullable();
            $table->text('resume')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
