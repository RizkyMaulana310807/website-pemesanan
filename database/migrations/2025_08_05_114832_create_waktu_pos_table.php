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
        Schema::create('waktu_pos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_po'); // contoh: "PO Hari Jumat"
            $table->date('open_po')->nullable(); // kalau PO hanya berlaku di hari tertentu
            $table->date('close_po')->nullable(); // kalau PO hanya berlaku di hari tertentu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktu_pos');
    }
};
