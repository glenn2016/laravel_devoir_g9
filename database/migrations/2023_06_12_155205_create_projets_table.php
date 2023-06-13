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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table ->string('libele')->nullable();
            $table ->integer('description')->nullable();
            $table ->integer('etat')->nullable();
            $table ->date('dateDebut')->nullable();
            $table ->date('datefin')->nullable();
            $table->unsignedBigInteger('tache_id');
            $table->foreign('tache_id')->references('id')->on('tache');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
