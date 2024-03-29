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
                                @if (Auth::user()->level == 'Pembimbing')
                                    <a href="/persetujuan/cetak" class="btn bg-info text-dark" target="_blank">Cetak Data</a>
                                @endif
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
                                                @if ($ps->id_user == Auth()->id())
                                                    <tr align="center">
                                                        <td>{{ $ps->nis }}</td>
                                                        <td>{{ $ps->User->nama }}</td>
                                                        <td>{{ $ps->Pengajuan->judul_laporan }}</td>
                                                        <td>{{ $ps->tanggal_acc }}</td>
                                                        <td>
                                                            @if ($ps->status === 'Diterima')
                                                                <a class="btn btn-success"><i class="fa fa-check"
                                                                        aria-hidden="true"></i></a>
                                                            @elseif ($ps->status === 'Ditolak')
                                                                <a class="btn btn-danger"><i class="fa fa-times"
                                                                        aria-hidden="true"></i></a>
                                                            @else
                                                                <a class="btn btn-primary"><i class="fa fa-spinner"
                                                                        aria-hidden="true"></i></a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($ps->status === 'Ditolak')
                                                                <a href="{{ 'https://api.whatsapp.com/send?phone=' . urlencode('62895369564349') . '&text=' . urlencode('pengajuan anda ditolak') }}"
                                                                    target="_blank" class="btn btn-info">Kirim Pesan WA</a>
                                                            @elseif ($ps->status === 'Diterima')
                                                                <a href="{{ 'https://api.whatsapp.com/send?phone=' . urlencode('62895369564349') . '&text=' . urlencode('pengajuan anda diterima') }}"
                                                                    target="_blank" class="btn btn-info">Kirim Pesan WA</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endif
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
