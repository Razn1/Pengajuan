@extends('layouts.master')
@section('title', 'Persetujuan')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h2>Data Persetujuan</h2>
                                <div class="table-responsive">
                                    <table class="table text-dark" id="example">
                                        <thead>
                                            <tr align="center">
                                                <th>Nis</th>
                                                <th>Pembimbing</th>
                                                <th>Judul Laporan</th>
                                                <th>Tanggal ACC</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($persetujuan as $ps)
                                                <tr align="center">
                                                    <td>{{ $ps->nis }}</td>
                                                    <td>{{ $ps->User->nama }}</td>
                                                    <td>{{ $ps->Pengajuan->judul_laporan }}</td>
                                                    <td>{{ $ps->tanggal_acc }}</td>
                                                    <td>{{ $ps->status }}</td>
                                                    <td>
                                                        @if ($persetujuan->where('status', 'ditolak'))
                                                            <a href="{{ 'https://api.whatsapp.com/send?phone=' . urlencode(62895369564349) . '&text=' . urlencode('pengajuan anda ditolak') }}"
                                                                target="_blank" class="btn btn-info">Kirim Pesan WA</a>
                                                        @else
                                                            <a href="{{ 'https://api.whatsapp.com/send?phone=' . urlencode(62895369564349) . '&text=' . urlencode('pengajuan anda diterima') }}"
                                                                target="_blank" class="btn btn-info">Kirim Pesan WA</a>
                                                        @endif
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
