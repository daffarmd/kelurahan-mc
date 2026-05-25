@extends('layouts.app')

@section('title', 'Data Penduduk')

@section('content')
<div class="content-wrapper">
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Penduduk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Penduduk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Penduduk</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="fas fa-plus"></i> Tambah Data
                                </button>
                            </div>
                        </div>
                        
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover m-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 80px;" class="text-center">ID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th style="width: 180px;" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- Loop dynamically through the mock data passed from the controller --}}
                                        @foreach($penduduk as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->id }}</td>
                                                <td><strong>{{ $item->nama }}</strong></td>
                                                <td>{{ $item->alamat }}</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-xs btn-warning">
                                                        <i class="fas fa-edit"></i> {{ $item->action }}
                                                    </a>
                                                    <button type="button" class="btn btn-xs btn-danger">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        {{-- Show an empty placeholder row if no data exists --}}
                                        @if($penduduk->isEmpty())
                                            <tr>
                                                <td colspan="4" class="text-center text-muted p-4">
                                                    <i class="fas fa-folder-open d-block mb-2 fa-2x"></i>
                                                    Belum ada data penduduk.
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    </div>
@endsection