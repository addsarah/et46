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
        Schema::create('sikaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswas_id')->constrained('siswas');
            $table->foreignId('users_id')->constrained('users');
            $table->enum('nilai', ['sangatbaik', 'baik', 'cukup', 'kurang']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sikaps');
    }
};
