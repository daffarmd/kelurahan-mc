@extends('layouts.app')

@section('title', 'Data Penduduk')

@section('content')
    <h1>Data Penduduk</h1>
    <table class="table">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($warga as $penduduk)
                <tr>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->nama }}</td>
                    <td>{{ $penduduk->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection