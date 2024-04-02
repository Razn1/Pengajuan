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
                                    <table class="table text-dark" id="example">
                                        <thead>
                                            <tr align="center">
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Tempat PKL</th>
                                                <th>Nomor Telepon</th>
                                                <th>Username</th>
                                                <th>Aksi</th>
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
                                                    <td>{{ $s->username }}</td>
                                                    <td><a href="/siswa/{{ $s->id }}/ed"
                                                        class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="/user/{{ $s->id }}/delete"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>
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
