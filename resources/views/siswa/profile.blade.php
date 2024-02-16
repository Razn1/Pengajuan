@extends('layouts.master')
@section('title', 'Profile')
@section('content')
    <br>

    <body class="tengah">
        <div class="content">
            <section class="content-profile">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        
                                        <table class="table text-dark">
                                            <tr align="center">
                                                <th>ID :</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->id }}</td>
                                            </tr>
                                            <tr align="center">
                                                <th>Nama :</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->nama }}</td>
                                            </tr>
                                            <tr align="center">
                                                <th>Kelas :</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->kelas }}</td>
                                            </tr>
                                            <tr align="center">
                                                <th>Jurusan:</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->jurusan }}</td>
                                            </tr>
                                            <tr align="center">
                                                <th>Tempat PKL :</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->tempat_pkl }}</td>
                                            </tr>
                                            <tr align="center">
                                                <th>Nomor Telepon :</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->no_telp }}</td>
                                            </tr>
                                            <tr align="center">
                                                <th>Username :</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->username }}</td>
                                            </tr>
                                            <tr align="center">
                                                <th>Level :</th>
                                                <td>
                                                    <hr class="vertical dark mt-0">
                                                </td>
                                                <td>{{ Auth()->user()->level }}</td>
                                                
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="/siswa/{id}/update" class="btn btn-primary">Edit Akun</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
@endsection
