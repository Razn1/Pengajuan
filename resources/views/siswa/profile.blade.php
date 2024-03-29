@extends('layouts.master')
@section('title', 'Profile')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center"> <!-- Centering the content -->
                <div class="col-md-7 mt-5"> <!-- Adjusted column width -->
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
                                <a class="btn btn-primary" href="/siswa/change-password/{{ Auth()->User()->id }}">
                                    Change Password
                                </a>
                                <button type="submit" class="btn btn-warning">Edit Akun</button>
                                <a href="/siswa/{{ Auth()->User()->id }}/delete" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')">Delete</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

