@extends('layouts.app', ['title' => 'Laporan Data Pasien'])
@section('content')
    <div class="card">
        <div class="card-header fw-bold text-dark">LAPORAN DATA PASIEN</div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="/laporan-pasien/create" class="btn btn-primary btn-sm">Buat Laporan Baru</a>
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
                        <th>Tanggal Buat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_pasien }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ ucfirst($item->jenis_kelamin) }}</td>
                            <td>{{ $item->created_at->format('d - M - Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
