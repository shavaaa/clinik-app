@extends('layouts.app', ['title' => 'Laporan Data Pendaftaran'])
@section('content')
    <div class="card">
        <div class="card-header fw-bold text-dark">LAPORAN DATA PENDAFTARAN PASIEN</div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="/laporan-daftar/create" class="btn btn-primary btn-sm">Buat Laporan Baru</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead> 
                    <tr> 
                    <th width="1%">NO</th> 
                    <th>No Pasien</th> 
                    <th>Nama</th> 
                    <th>Umur</th> 
                    <th>Jenis Kelamin</th> 
                    <th>Tanggal Daftar</th> 
                    <th>Poli</th> 
                    </tr> 
                    </thead> 
                    <tbody> 
                    @foreach ($models as $item) 
                    <tr> 
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $item->pasien->no_pasien }}</td> 
                    <td>{{ $item->pasien->nama }}</td> 
                    <td>{{ $item->pasien->umur }}</td> 
                    <td>{{ $item->pasien->jenis_kelamin }}</td> 
                    <td>{{ $item->tanggal_daftar }}</td> 
                    <td>{{ $item->poli->nama }}</td> 
                    </tr> 
                    @endforeach 
                    </tbody> 
            </table>
        </div>
    </div>
@endsection
