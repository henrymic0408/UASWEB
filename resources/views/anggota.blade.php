@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $mhs)
                            <tr>
                                <td> {{ $mhs['nama'] }}</td>
                                <td> {{ $mhs['alamat'] }}</td>
                                <td>{{ $mhs['nohp'] }} </td>
                                <td>
                                    <a href="/anggota/detail/{{ $mhs['id'] }}" class="badge badge-info">Detail</a>
                                    <a href="/anggota/detail/{{ $mhs['id'] }}" class="badge badge-warning">Edit</a>
                                    <a href="/anggota/hapus/{{ $mhs['id'] }}" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
