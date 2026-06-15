<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penduduk;
use App\Models\Surat;

class PendudukController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function penduduk()
    {
        $warga = Penduduk::all();

        return view('penduduk', compact('warga'));
    }

    public function daftarSurat()
    {
        $semuaSurat = Surat::with('penduduk')->get();

        return view('surat_index', compact('semuaSurat'));
    }
}