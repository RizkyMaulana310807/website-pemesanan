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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Apple Fritters"
            $table->text('description'); // e.g., "Garing di luar, lembut di dalam..."
            $table->integer('price')->comment('Harga dalam Rupiah untuk menghindari koma'); // e.g., 7000
            $table->string('image'); // e.g., "images/applefritter.png"
            $table->timestamp('unlocked_at')->nullable()->comment('Waktu menu tersedia (untuk menu mingguan)'); // e.g., 10 Agustus 2025
            $table->boolean('is_special')->default(false)->comment('Penanda menu spesial seperti HUT RI'); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
