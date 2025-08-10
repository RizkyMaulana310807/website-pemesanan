<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\WaktuPo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // ubah sesuai kebutuhan
            'role' => 'super_admin',
        ]);

        $today = Carbon::now();
        WaktuPo::create([
            'nama_po' => 'Test Batch',
            'open_po' => Carbon::now(),
            'close_po' => $today->addDays(3),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Hapus semua data produk
        Product::truncate();

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Product::create([
            'name' => 'Brownies Bites',
            'description' => '1 box Brownies lembut, pakai cokelat premium, manisnya pas, lumer dalam sekali gigitan',
            'price' => 10000,
            'img_path' => 'images/brownisbite.png',
            'unlocked_at' => Carbon::now(),
            'locked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-31'),
        ]);

        Product::create([
            'name' => 'Japanese Coffee Jelly',
            'description' => 'Dessert coffee ala jepang. disajikan dingin dengan krim manis yang creamy',
            'price' => 5000,
            'img_path' => 'images/kopijely.png',
            'unlocked_at' => Carbon::now(),
            'locked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-10'),
        ]);

        Product::create([
            'name' => 'Kopi Susu Regal',
            'description' => 'Kopi susu creamy yang dipadu dengan biskuit regal yang lembut dan crunchy. Cocok pas lagi cuaca panas.',
            'price' => 7000,
            'img_path' => 'images/kpssrgl.png',
            'unlocked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-10'),
            'locked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-17'),
        ]);

        Product::create([
            'name' => 'Ice Cream Scoops',
            'description' => 'Ice Cream yang dingin, lembut, dan manis di tambah dengan topping yang melimpah, cocok banget sambil nonton agustusan',
            'price' => 7000,
            'img_path' => 'images/eskrim.png',
            'unlocked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-17'),
            'locked_at' => Carbon::createFromFormat('Y-m-d', '2025-08-31'),
            'is_special' => true,
        ]);
    }
}
