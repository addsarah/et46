<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programsemesters', function (Blueprint $table) {
            $table->id();
            $table->string('komdas',249);
            $table->string('alokasi_waktu', 100);
            $table->enum('semester', ['semester_gjl', 'semester_gnp']);
            $table->enum('bulan', ['januari', 'februari', 'maret', 'april', 'mei', 'juni','juli', 'agustus', 'september', 'oktober', 'november', 'desember']);
            $table->string('keterangan', 100);
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
        Schema::dropIfExists('programsemesters');
    }
}
