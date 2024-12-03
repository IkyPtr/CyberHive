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
        Schema::create('koordinators', function (Blueprint $table) {
            $table->id();
            $table->string('id_ko',4)->unique()->nullable();
            $table->string('nama_ko');
            $table->string('nim_nip',10)->unique();
            $table->string('no_hp',12)->unique();
            $table->string('email')->unique();
            $table->string('username',10);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koordinators');
    }
};
