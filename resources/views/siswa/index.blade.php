@extends('layouts.master')
@section('title', 'Siswa')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h2>Data Siswa</h2>
                                <div class="table-responsive">
                                    <table class="table text-dark">
                                        <thead>
                                            <tr align="center">
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Tempat PKL</th>
                                                <th>Nomor Telepon</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswa as $s)
                                                <tr align="center">
                                                    <td>{{ $s->nis }}</td>
                                                    <td>{{ $s->nama }}</td>
                                                    <td>{{ $s->kelas }}</td>
                                                    <td>{{ $s->jurusan }}</td>
                                                    <td>{{ $s->tempat_pkl }}</td>
                                                    <td>{{ $s->no_telp }}</td>
                                                    <td>{{ $s->email }}</td>
                                                    <td>{{ $s->username }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
