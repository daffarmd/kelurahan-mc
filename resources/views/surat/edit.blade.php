@extends('layouts.app')

@section('title', 'Edit Surat')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Edit Surat</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('surat.update', $surat->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nomor_surat" class="form-label">Nomor Surat</label>
                    <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}" required>
                    @error('nomor_surat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                {{-- <div class="form-group mb-3">
                    <label for="jenis_surat">Jenis Surat</label>>
                    <select name="jenis_surat" id="jenis_surat" class="form-control" required>
                        <option value="Surat Pengantar" {{ $surat->jenis_surat == 'Surat Pengantar' ? 'selected' : '' }}>Surat Pengantar</option>
                        <option value="Surat Keterangan Tidak Mampu" {{ $surat->jenis_surat == 'Surat Keterangan Tidak Mampu' ? 'selected' : '' }}>Surat Keterangan Tidak Mampu</option>
                        <option value="Surat Domisili" {{ $surat->jenis_surat == 'Surat Domisili' ? 'selected' : '' }}>Surat Domisili</option>
                    </select>
                </div> --}}

                <div class="mb-3">
                    <label for="jenis_surat" class="form-label">Pilih Jenis Surat</label>
                    <select class="form-select @error('jenis_surat') is-invalid @enderror" id="jenis_surat" name="jenis_surat" required>
                        <option value="surat_keterangan" {{ old('jenis_surat', $surat->jenis_surat) == 'surat_keterangan' ? 'selected' : '' }}>Surat Keterangan</option>
                        <option value="surat_permohonan" {{ old('jenis_surat', $surat->jenis_surat) == 'surat_permohonan' ? 'selected' : '' }}>Surat Permohonan</option>
                        <option value="surat_pengantar" {{ old('jenis_surat', $surat->jenis_surat) == 'surat_pengantar' ? 'selected' : '' }}>Surat Pengantar</option>
                    </select>
                    @error('jenis_surat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="penduduk_id" class="form-label">Pilih Penduduk (NIK - Nama)</label>
                    <select name="penduduk_id" id="penduduk_id" class="form-select @error('penduduk_id') is-invalid @enderror" required>
                        <option value="">-- pilih penduduk --</option>
                        @foreach($penduduks as $p)
                            <option value="{{ $p->id }}" {{ old('penduduk_id', $surat->penduduk_id) == $p->id ? 'selected' : '' }}>{{ $p->nik }} - {{ $p->nama }}</option>
                        @endforeach
                    </select>
                    @error('penduduk_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal_ajuan">Tanggal Ajuan</label>
                    <input type="date" name="tanggal_ajuan" id="tanggal_ajuan" class="form-control" value="{{ old('tanggal_ajuan', $surat->tanggal_ajuan) }}" required>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('surat.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Buat Surat</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
