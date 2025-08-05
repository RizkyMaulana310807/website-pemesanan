<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nonaktifkan foreign key checks agar bisa truncate
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Hapus semua data produk
        Product::truncate();

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Masukkan data produk
        Product::create([
            'name' => 'Apple Fritters',
            'description' => 'Garing di luar, lembut di dalam Apel manis di balut adonan goreng.',
            'price' => 7000,
            'image' => 'images/applefritter.png',
            'unlocked_at' => Carbon::now(),
        ]);

        Product::create([
            'name' => 'Japanese Coffee Jelly',
            'description' => 'Dessert coffee ala jepang. disajikan dingin dengan krim manis yang creamy.',
            'price' => 5000,
            'image' => 'images/cff-jelly1.png',
            'unlocked_at' => Carbon::now(),
        ]);

        Product::create([
            'name' => 'Cube Bites',
            'description' => 'Brownies manis potong dengan topping yang melimpah.',
            'price' => 8000,
            'image' => 'images/brownesbite.png',
            'unlocked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-10'),
        ]);

        Product::create([
            'name' => 'Ice Cream Scoops',
            'description' => 'Ice cream yang dingin, lembut, dan manis di tambah dengan topping yang melimpah.',
            'price' => 7000,
            'image' => 'images/icecream.png',
            'unlocked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-10'),
            'is_special' => true,
        ]);
    }
}
