@extends('layouts.app')

@section('title', 'Data Surat')

@section('content')
    <h1>Data Surat</h1>
    <a href="{{ route('surat.create') }}" class="btn btn-primary">Buat Surat</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nomor Surat</th>
                <th>Jenis Surat</th>
                <th>NIK Pemohon</th>
                <th>Nama Warga</th>
                <th>Alamat</th>
                <th>Tanggal Ajuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $jenisLabels = [
                    'surat_keterangan' => 'Surat Keterangan',
                    'surat_permohonan' => 'Surat Permohonan',
                    'surat_pengantar' => 'Surat Pengantar',
                ];
            @endphp

            @foreach($semuaSurat as $surat)
                <tr>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $jenisLabels[$surat->jenis_surat] ?? $surat->jenis_surat }}</td>
                    <td>{{ $surat->penduduk->nik ?? 'Unknown' }}</td>
                    <td>{{ $surat->penduduk->nama ?? 'Unknown' }}</td>
                    <td>{{ $surat->penduduk->alamat ?? 'Unknown' }}</td>
                    <td>{{ isset($surat->tanggal_ajuan) ? \Carbon\Carbon::parse($surat->tanggal_ajuan)->format('d-m-Y') : '-' }}</td>
                    <td>
                        <a href="{{ route('surat.edit', $surat->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('surat.destroy', $surat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
