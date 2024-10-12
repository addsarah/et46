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
        Schema::create('kktps', function (Blueprint $table) {
            $table->id();
            $table->string('elemen',255);
            $table->string('tp',255);
            $table->enum('interval', ['pb', 'cukup', 'baik', 'sb',]);
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kktps');
    }
};
