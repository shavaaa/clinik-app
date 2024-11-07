@extends('layouts.app', ['title' => 'Pendaftaran Pasien'])
@section('content')
    <div class="card">
        <div class="card-header fw-bold text-dark">Data Pendaftaran Pasien</div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="daftar/create" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Daftar</th>
                        <th>Poli</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pasien->nama }}</td>
                                        <td>{{ ucfirst($item->pasien->jenis_kelamin) }}</td>
                                        <td>{{ $item->tanggal_daftar }}</td>
                                        <td>{{ $item->poli->nama }}</td>
                                        <td>{{ $item->keluhan }}</td>
                                        <td>
                                            <a href="/daftar/{{ $item->id }}" class="btn btn-primary btn-sm">Detail</a>
                                            <form action="/daftar/{{ $item->id }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm ml-2"
                                                        onclick="return confirm('Yakin ingin hapus data?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
