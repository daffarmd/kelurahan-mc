<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat user bawaan untuk login (opsional)
        // Gunakan firstOrCreate agar tidak error bila sudah ada
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        // 2. Panggil Seeder yang kamu buat secara berurutan
        $this->call([
            PendudukSeeder::class, // Wajib di atas karena Surat butuh data Penduduk
            SuratSeeder::class,
        ]);
    }
}