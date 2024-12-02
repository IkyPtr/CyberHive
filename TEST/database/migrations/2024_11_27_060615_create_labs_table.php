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
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->string('lab_id',10)->unique();
            $table->string('no_ruangan',4);
            $table->string('no_loker',2);
            $table->string('no_pc',2);
            $table->enum('mouse', ['Rusak','Baik'])->default('Baik');
            $table->enum('keyboard', ['Rusak','Baik'])->default('Baik');
            $table->enum('monitor', ['Rusak','Baik'])->default('Baik');
            $table->enum('jaringan', ['Rusak','Baik'])->default('Baik');
            $table->text('keterangan')->nullable();
            $table->text('alat')->nullable();
            $table->date('tanggal');
            $table->string('nim',10);
            $table->string('mk_id',5);
            $table->string('id_ko',4);
            $table->string('id_ps',4);
            $table->timestamps();
            // Set foreign key constraints
            $table->foreign('nim')->references('nim')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('mk_id')->references('mk_id')->on('matakuliahs')->onDelete('cascade');
            $table->foreign('id_ko')->references('id_ko')->on('koordinators')->onDelete('cascade');
            $table->foreign('id_ps')->references('id_ps')->on('pesertas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labs');
    }
};
