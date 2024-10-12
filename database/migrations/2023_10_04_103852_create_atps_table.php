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
        Schema::create('atps', function (Blueprint $table) {
            $table->id();
            $table->string('elemen',254);
            $table->string('cp',254);
            $table->string('tp',254);
            $table->string('atp',254);
            $table->string('renas',254);
            $table->foreignId('kktps_id')->constrained('kktps');
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atps');
    }
};
