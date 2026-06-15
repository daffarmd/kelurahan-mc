<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Surat;
use App\Models\Penduduk;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warga = Penduduk::first(); // Ambil penduduk pertama untuk contoh
        if ($warga) {
            Surat::create([
                'nomor_surat' => '001/MK/2026',
                'jenis_surat' => 'Surat Keterangan Domisili',
                'tanggal_ajuan' => now(),
                'penduduk_id' => $warga->id,
            ]);

            Surat::create([
                'nomor_surat' => '002/MK/2026',
                'jenis_surat' => 'Surat Keterangan Tidak Mampu',
                'tanggal_ajuan' => now(),
                'penduduk_id' => $warga->id,
            ]);
        }


    }
}
