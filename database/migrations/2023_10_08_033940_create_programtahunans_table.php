<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramtahunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programtahunans', function (Blueprint $table) {
            $table->id();
            $table->string('materi', 249);
            $table->string('alokasi_waktu', 100); // Menggunakan tipe data time
            $table->enum('semester', ['semester_gjl', 'semester_gnp']);
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('mapels_id')->constrained('mapels');
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
        Schema::dropIfExists('programtahunans');
    }
}
