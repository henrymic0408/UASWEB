@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <br>
                <h2>Detail Data Anggota</h2>
                <table class="table table-bordered table-hover table-striped">
                <thead></thead>
                <tbody>
                @foreach ($anggota as $mhs)
                            <tr>
                                <td> {{ $mhs['nama'] }}</td>
                                <td> {{ $mhs['alamat'] }}</td>
                                <td>{{ $mhs['nohp'] }} </td>
                                <td>
                                    <a href="/anggota/detail/{{ $mhs['id'] }}" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
