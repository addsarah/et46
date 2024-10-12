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
        Schema::create('kisi_kisis', function (Blueprint $table) {
            $table->id();
            $table->string('kompeda',254);
            $table->string('materi',254);
            $table->string('rako',254);
            $table->string('indikator',254);
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kisi_kisis');
    }
};
