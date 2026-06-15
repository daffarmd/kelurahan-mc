<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Jangan lupa import DB jika pakai Query Builder

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penduduks')->insert([
            [
                'nik' => '3501010101010001',
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Merdeka No. 17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nik' => '3501010101010002',
                'nama' => 'Siti Aminah',
                'alamat' => 'Jl. Mawar No. 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}