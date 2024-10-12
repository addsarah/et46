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
        Schema::create('remedials', function (Blueprint $table) {
            $table->id();
            $table->string('sesudah');
            $table->string('sebelum');
            $table->string('nama_ulangan');
            $table->foreignId('mapels_id')->constrained('mapels');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('nilais_id')->constrained('nilais');
            $table->foreignId('siswas_id')->constrained('nilais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remedials');
    }
};
