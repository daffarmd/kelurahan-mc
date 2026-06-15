@extends('layouts.app')

@section('title', 'Buat Surat')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Buat Surat</h3>
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

            <form action="{{ route('surat.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nomor_surat" class="form-label">Nomor Surat</label>
                    <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat') }}" required>
                    @error('nomor_surat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="jenis_surat" class="form-label">Pilih Jenis Surat</label>
                    <select class="form-select @error('jenis_surat') is-invalid @enderror" id="jenis_surat" name="jenis_surat" required>
                        <option value="">-- pilih jenis surat --</option>
                        <option value="surat_keterangan" {{ old('jenis_surat')=='surat_keterangan' ? 'selected' : '' }}>Surat Keterangan</option>
                        <option value="surat_permohonan" {{ old('jenis_surat')=='surat_permohonan' ? 'selected' : '' }}>Surat Permohonan</option>
                        <option value="surat_pengantar" {{ old('jenis_surat')=='surat_pengantar' ? 'selected' : '' }}>Surat Pengantar</option>
                    </select>
                    @error('jenis_surat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nik" class="form-label">NIK Pemohon</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" required>
                        @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label">Nama Warga</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk_l" value="L" {{ old('jk')=='L' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jk_l">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk_p" value="P" {{ old('jk')=='P' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jk_p">Perempuan</label>
                    </div>
                    @error('jk') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                    @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal_ajuan" class="form-label">Tanggal Ajuan</label>
                    <input type="date" class="form-control @error('tanggal_ajuan') is-invalid @enderror" id="tanggal_ajuan" name="tanggal_ajuan" value="{{ old('tanggal_ajuan') }}" required>
                    @error('tanggal_ajuan') <div class="invalid-feedback">{{ $message }}</div> @enderror
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