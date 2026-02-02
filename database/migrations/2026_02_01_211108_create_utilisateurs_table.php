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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('code_client_web')->unique();
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->string('nom');
            $table->string('adresse1');
            $table->string('adresse2')->nullable();
            $table->string('adresse3')->nullable();
            $table->string('code_postal');
            $table->string('ville');
            $table->string('pays');
            $table->string('telephone')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
