@extends('layouts.master')
@section('title', 'Pengajuan Siswa')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h2>Data Pengajuan</h2>
                                {{-- </div>
                        <div class="card-body bg-light"> --}}
                                <div class="table-responsive">
                                    <table class="table text-dark" id="example">
                                        <thead>
                                            <tr align="center">
                                                <th>Nis</th>
                                                <th>Judul Laporan</th>
                                                <th>Proposal</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengajuan as $pg)
                                                <tr align="center">
                                                    <td>{{ $pg->nis }}</td>
                                                    <td>{{ $pg->judul_laporan }}</td>
                                                    <td><a href="/">{{ $pg->proposal }}</a></td>
                                                    <td>{{ $pg->status }}</td>
                                                    {{-- <td>
                                                        <form class="background bg-success"> terima
                                                        </form>
                                                        <form class="background bg-danger">tolak</form>
                                                        
                                                    </td> --}}
                                                    <td>
                                                        <a href="/pengajuan/{{ $pg->id }}/open" target="_blank"
                                                            class="btn btn-info">Open</a>
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
