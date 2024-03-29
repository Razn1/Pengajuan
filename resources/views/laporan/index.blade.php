@extends('layouts.master')
@section('title', 'Laporan')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h2>Data Laporan</h2>
                                @if (Auth::user()->level == 'Siswa')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalId" onclick="prepareModal()">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                @endif
                                <div class="table-responsive">
                                    <table class="table text-dark" id="example">
                                        <thead>
                                            <tr align="center">
                                                <th>Nis</th>
                                                <th>Judul</th>
                                                <th>Laporan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($laporan as $l)
                                                <tr align="center">
                                                    <td>{{ $l->nis }}</td>
                                                    <td>{{ $l->judul }}</td>
                                                    <td><a
                                                            href="/pengajuan/{{ $l->id }}/open">{{ $l->laporan }}</a>
                                                    </td>
                                                    <td>
                                                        @if (Auth::user()->level == 'Siswa')
                                                            <a href="/laporan/{{ $l->id }}/edit" type="button"
                                                                class="btn btn-primary"><i class="fa fa-pencil-square-o"
                                                                    aria-hidden="true"></i>
                                                            </a>
                                                        @endif
                                                        <a href="/laporan/{{ $l->id }}/open" target="_blank"
                                                            class="btn btn-info"><i class="fa fa-folder-open"></i></a>
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

    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Eksekusi Laporan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/laporan/tambah" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" name="id" value="" /> <!-- Input untuk ID -->

                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="nis" value="{{ Auth()->User()->nis }}" />
                        </div>

                        <div class="mb-3">
                            <label for="laporan">Judul</label>
                            <input type="text" class="form-control" name="judul" value="" />
                        </div>

                        <div class="form-group">
                            <label for="laporan">Laporan</label>
                            <input type="file" class="form-control @error('laporan') is-invalid @enderror"
                                value="{{ old('laporan') }}" accept=".pdf" name="laporan" id="laporan">
                            @error('laporan')
                                <div class="invalidate-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>
    <script>
        function prepareModal(Id, Nis) {
            // Mengisi nilai ID PENGAJUAN pada formulir modal
            document.querySelector('input[name="id"]').value = Id;
            document.querySelector('input[name="nis"]').value = Nis;
            myModal.show();
        }
    </script>

@endsection
