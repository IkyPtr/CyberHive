<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::dropIfExists('labs');  // Drop labs table first
    Schema::dropIfExists('mahasiswas');  // Then drop mahasiswas table
    Schema::dropIfExists('pesertas');  // Finally drop pesertas table
    Schema::dropIfExists('koordinators');  // Finally drop coordinators table
    Schema::dropIfExists('matakuliahs');  // Finally drop matakuliahs table


    Schema::create('koordinators', function (Blueprint $table) {
        $table->id();
        $table->string('id_ko')->unique()->default(uniqid());
        $table->string('nama');
        $table->string('email');
        $table->integer('jumlah');
        $table->string('nim_nip');
        $table->string('kegiatan');
        $table->date('tanggal_mulai');
        $table->date('tanggal_selesai');
        $table->string('Keterangan_status')->nullable()->default('-');
        $table->string('status');
        $table->string(column: 'lab_id');
        $table->timestamps();
    });
    Schema::create('pesertas', function (Blueprint $table) {
        $table->id();
        $table->string('id_ps')->unique()->default(uniqid());
        $table->string('nama');
        $table->string('nim_nip');
        $table->string('lab_id');
        $table->timestamps();
    });

    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim');
        $table->string('kelas');
        $table->string(column: 'lab_id');
        $table->timestamps();
    });
    Schema::create('matakuliahs', function (Blueprint $table) {
        $table->id();
        $table->string('matakuliah');
        $table->string('dosen');
        $table->time('jam_masuk');
        $table->time('jam_keluar');
        $table->string(column: 'lab_id');
        $table->timestamps();
    });

    Schema::create('labs', function (Blueprint $table) {
        $table->id();
        $table->string('lab_id')->index(); // hanya sekali
        $table->string('nomor_pc')->nullable();
        $table->string('no_loker');
        $table->string('ruang_lab');
        $table->date('tanggal');
        $table->string('monitor');
        $table->string('keyboard');
        $table->string('mouse');
        $table->string('jaringan');
        $table->text('keterangan')->nullable();
        $table->text('alat')->nullable();
        $table->string('status')->nullable();
        $table->date('tanggal_status')->nullable();
        $table->timestamps();
    });

}

public function down()
{
    Schema::dropIfExists('labs');
    Schema::dropIfExists('mahasiswas');
    Schema::dropIfExists('pesertas');
    Schema::dropIfExists('koordinators');
    Schema::dropIfExists('matakuliahs');
}

};
