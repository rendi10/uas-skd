<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatkulDosenMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkul_dosen', function (Blueprint $table) {
            $table->string('id_matkul_dosen')->primary();
            $table->string('id_matkul');
            $table->foreign('id_matkul')->references('id_matkul')->on('matkul')->onDelete('cascade');
            $table->string('id_dosen');
            $table->foreign('id_dosen')->references('id_dosen')->on('dosen')->onDelete('cascade');
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
        Schema::dropIfExists('matkul_dosen_mahasiswa');
    }
}
