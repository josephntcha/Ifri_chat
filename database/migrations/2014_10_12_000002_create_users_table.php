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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('matricule');
            $table->unsignedBigInteger('promotion_id'); // Clé étrangère
            $table->enum('isAdmin',['true','false'])->default('false');
            $table->text('description')->nullable();
            $table->string('poste')->nullable();
            $table->string('cv')->nullable();
           $table->string('Numero_telephone')->nullable();
           $table->unsignedBigInteger('filiere_id'); 
            $table->string('langage')->nullable();
            $table->string('expérience')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('besoin_emploi')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('promotion_id')->references('id')->on('promotions');
            $table->foreign('filiere_id')->references('id')->on('filieres');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
