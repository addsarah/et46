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
        Schema::create('ledgers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ulangan_harians_id')->constrained('ulangan_harians');
            $table->foreignId('tengah_semesters_id')->constrained('tengah_semesters');
            $table->foreignId('akhir_semesters_id')->constrained('akhir_semesters');
            $table->foreignId('nilais_id')->constrained('nilais');
            $table->foreignId('remedials_id')->constrained('remedials');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ledgers');
    }
};
