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
            </tr>
        </thead>
        <tbody>
            @foreach($semuaSurat as $surat)
                <tr>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $surat->jenis_surat }}</td>
                    <td>{{ $surat->penduduk->nik ?? 'Unknown' }}</td>
                    <td>{{ $surat->penduduk->nama ?? 'Unknown' }}</td>
                    <td>{{ $surat->penduduk->alamat ?? 'Unknown' }}</td>
                    <td>{{ $surat->tanggal_ajuan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection