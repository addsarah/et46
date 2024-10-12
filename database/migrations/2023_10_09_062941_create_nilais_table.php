<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai_tugas')->nullable();
            $table->integer('nilai_ulangan_harian')->nullable();
            $table->integer('nilai_tengah_semester')->nullable();
            $table->integer('nilai_akhir_semester')->nullable();
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('mapels_id')->constrained('mapels');
            $table->foreignId('siswas_id')->constrained('siswas');
            $table->string('semester');
            $table->string('ta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
