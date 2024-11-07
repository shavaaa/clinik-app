@extends('layouts.app', ['title' => 'Data Pasien'])
@section('content')
    <div class="card">
        <div class="card-header fw-bold text-dark">Data Pasien</div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>No Pasien</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Buat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_pasien }}</td>
                            <td>
                                <div class="showPhoto">
                                    <div id="imagePreview"
                                        style="@if ($item->foto != '') background-image:url('{{ url('/') }}/uploads/{{ $item->foto }}')
                                  @else background-image: url('{{ url('/storage/avatar.png') }}') @endif;">
                                    </div>
                                </div>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ ucfirst($item->jenis_kelamin) }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="/pasien/{{ $item->id }}" class="btn btn-primary btn-sm mt-1">Edit</a>
                                <form action="/pasien/{{ $item->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger mt-1"
                                        onclick="return confirm('Yakin ingin hapus data?')"> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pasien->links() !!}
        </div>
    </div>
@endsection
<style>
    .showPhoto {
        width: 80%;
        height: 45px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .showPhoto>div {
        width: 80%;
        height: 80%;
        border-radius: 60%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
