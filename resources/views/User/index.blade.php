@extends('layouts.master')
@section('title', 'User')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h2>Data User</h2>

                                {{-- </div>
                        <div class="card-body bg-gradient-secondary"> --}}
                                <div class="table-responsive">
                                    <table class="table text-dark">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $u)
                                                <tr align="center">
                                                    <td>{{ $u->id }}</td>
                                                    <td>{{ $u->nama }}</td>
                                                    <td>{{ $u->username }}</td>
                                                    <td>{{ $u->level }}</td>
                                                    <td>
                                                        <a href="/user/{{ $u->id }}/edit" class="btn btn-warning"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="/user/{{ $u->id }}/delete" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a>
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
