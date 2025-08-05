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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name'); // Diambil dari input nama
            $table->string('customer_phone'); // Diambil dari input No. HP
            $table->date('pickup_date'); // Tanggal pengambilan pesanan
            // $table->string('pickup_time_slot'); // Slot waktu pengambilan, e.g., "10.00 - 11.00"
            $table->integer('grand_total')->comment('Total harga pesanan'); // e.g., 17000
            $table->enum('payment_method', ['cash', 'qris']); // Metode pembayaran
            $table->enum('payment_status', ['pending', 'paid'])->default('pending');
            $table->timestamps(); // `created_at` akan berfungsi sebagai tanggal pesan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
