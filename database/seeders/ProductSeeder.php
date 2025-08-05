<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat
        Product::truncate();

        Product::create([
            'name' => 'Apple Fritters',
            'description' => 'Garing di luar, lembut di dalam Apel manis di balut adonan goreng.',
            'price' => 7000,
            // Path ini mengasumsikan gambar ada di folder 'public/images/'
            'image' => 'images/applefritter.png',
            'unlocked_at' => Carbon::now(),
        ]);

        Product::create([
            'name' => 'Japanese Coffee Jelly',
            'description' => 'Dessert coffee ala jepang. disajikan dingin dengan krim manis yang creamy.',
            'price' => 5000,
            // Path ini mengasumsikan gambar ada di folder 'public/images/'
            'image' => 'images/cff-jelly1.png',
            'unlocked_at' => Carbon::now(),
        ]);

        Product::create([
            'name' => 'Cube Bites',
            'description' => 'Brownies manis potong dengan topping yang melimpah.',
            'price' => 8000,
             // Path ini mengasumsikan gambar ada di folder 'public/images/'
            'image' => 'images/brownesbite.png',
            'unlocked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-10'),
        ]);

        Product::create([
            'name' => 'Ice Cream Scoops',
            'description' => 'Ice cream yang dingin, lembut, dan manis di tambah dengan topping yang melimpah.',
            'price' => 7000,
             // Path ini mengasumsikan gambar ada di folder 'public/images/'
            'image' => 'images/icecream.png',
            'unlocked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-10'),
            'is_special' => true,
        ]);
    }
}
