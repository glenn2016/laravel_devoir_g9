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
        Schema::create('projetencours', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table ->string('libelle')->nullable();
            $table ->string('description')->nullable();
            $table ->date('datedebut')->nullable();
=======
>>>>>>> 1a44ab56fe4a021dd1b0a2706e2d4a497b9f7ec4
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetencours');
    }
};
