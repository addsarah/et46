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
        Schema::create('ulangan_harians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mapels_id')->constrained('mapels');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('siswas_id')->constrained('siswas');
            $table->string('nilai_tugas');
            $table->string('nilai_ulangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulangan_harians');
    }
};
