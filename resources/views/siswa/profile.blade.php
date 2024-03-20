@extends('layouts.master')
@section('title', 'Profile')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-dark">
                                        <tr>
                                            <th>NIS :</th>
                                            <td>
                                                <hr class="vertical dark mt-0">
                                            </td>
                                            <td>{{ Auth()->user()->nis }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama :</th>
                                            <td>
                                                <hr class="vertical dark mt-0">
                                            </td>
                                            <td>{{ Auth()->user()->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kelas :</th>
                                            <td>
                                                <hr class="vertical dark mt-0">
                                            </td>
                                            <td>{{ Auth()->user()->kelas }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jurusan:</th>
                                            <td>
                                                <hr class="vertical dark mt-0">
                                            </td>
                                            <td>{{ Auth()->user()->jurusan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat PKL :</th>
                                            <td>
                                                <hr class="vertical dark mt-0">
                                            </td>
                                            <td>{{ Auth()->user()->tempat_pkl }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telepon :</th>
                                            <td>
                                                <hr class="vertical dark mt-0">
                                            </td>
                                            <td>{{ Auth()->user()->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username :</th>
                                            <td>
                                                <hr class="vertical dark mt-0">
                                            </td>
                                            <td>{{ Auth()->user()->username }}</td>
                                        </tr>
                                        <tr>
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
                                <form action="/siswa/{{ Auth()->user()->id }}/update" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Edit Akun</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
