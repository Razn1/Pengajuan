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
                                    <table class="table text-dark">
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
                                                    <td><a href="/pengajuan/{{ $pg->id }}/open">{{ $pg->proposal }}</a></td>
                                                    <td>
                                                        @if($pg->status == 'diterima')
                                                            <a class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                        @elseif($pg->status == 'ditolak')
                                                            <a class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                        @else
                                                            <a class="btn btn-primary"><i class="fa fa-spinner" aria-hidden="true"></i></a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/pengajuan/{{ $pg->id }}/open" target="_blank" class="btn btn-info"><i class="fa fa-folder-open" aria-hidden="true"></i></a>
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
