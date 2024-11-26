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
            $table->integer('id')->autoIncrement();
            $table->integer('no_ruangan');
            $table->integer('no_loker');
            $table->integer('no_pc');
            $table->enum('mouse', ['Bagus', 'Rusak']);
            $table->enum('keyboard', ['Bagus', 'Rusak']);
            $table->enum('monitor', ['Bagus', 'Rusak']);
            $table->enum('jaringan', ['Bagus', 'Rusak']);
            $table->text('keterangan');
            $table->text('alat');
            $table->dateTime('tanggal');
            $table->foreignId('nim')->nullable();
            $table->foreignId('mk_id')->nullable();
            $table->foreignId('id_ko')->nullable();
            $table->foreignId('id_ps')->nullable();
            $table->timestamps();
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
