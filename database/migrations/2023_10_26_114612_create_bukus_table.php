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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoris_id')->constrained();
            $table->foreignId('raks_id')->constrained();
            $table->text('judul', 100);
            $table->string('gambar', 100);
            $table->string('jumlah');
            $table->string('tingkat');
            $table->text('pengarang');
            $table->text('penerbit');
            $table->string('tahun_terbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
