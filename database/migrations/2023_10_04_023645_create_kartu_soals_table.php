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
        Schema::create('kartu_soals', function (Blueprint $table) {
            $table->id();
            $table->string('kj',254);
            $table->string('desk_soal',254);
            $table->string('buac',254);
            $table->foreignId('kisi_kisis_id')->constrained('kisi_kisis');
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartu_soals');
    }
};
