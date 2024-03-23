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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('profile');
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telfone');
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->foreignId('kelas_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
