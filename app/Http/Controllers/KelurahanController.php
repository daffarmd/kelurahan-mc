<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
    public function penduduk()
    {
        $penduduk = [
        [
            'id' => 1,
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Merdeka No. 12, Kel. Madyopuro',
            'action' => 'Edit'
        ],
        [
            'id' => 2,
            'nama' => 'Siti Aminah',
            'alamat' => 'Jl. Danau Toba No. 45, Kel. Sawojajar',
            'action' => 'Edit'
        ],
        [
            'id' => 3,
            'nama' => 'Ahmad Fauzi',
            'alamat' => 'Jl. Borobudur No. 7, Kel. Mojolangu',
            'action' => 'Edit'
        ]
    ];

    // Cast it to an object collection so it behaves exactly like Eloquent database data
    $penduduk = collect($penduduk)->map(fn($item) => (object)$item);
        return view('penduduk', compact('penduduk'));
    }
}
