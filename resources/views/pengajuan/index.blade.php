@extends('layouts.master')
@section('title', 'Pengajuan')
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
                                                    <td><a href="/">{{ $pg->proposal }}</a></td>
                                                    <td>{{ $pg->status }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-lg"
                                                            data-bs-toggle="modal" data-bs-target="#modalId"
                                                            onclick="prepareModal({{ $pg->id }},'{{ $pg->nis }}')">
                                                            Eksekusi
                                                        </button>
                                                        <a href="/pengajuan/{{ $pg->id }}/open" target="_blank"
                                                            class="btn btn-info">Open</a>
                                                    </td>
                                                    <td>
                                                        
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

    <!-- Modal trigger button -->

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                    <form action="/pengajuan/eksekusi" method="POST">
                        @csrf
                        <div class="mb-3">
                            {{-- untuk id pengajuan --}}
                            <input type="hidden" class="form-control" name="id_pengajuan" value="" />
                        </div>

                        <div class="mb-3">
                            {{-- untuk nis --}}
                            <input type="hidden" class="form-control" name="nis" value="" />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Pembimbing</label>
                            <select name="id_user" class="form-control" id="">
                                @foreach ($user as $user)
                                    <option value="{{ $user->id }}">{{ Auth()->user()->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Status</label>
                            <select name="status" class="form-control " id="">
                                <option value="ditolak">ditolak</option>
                                <option value="diterima">diterima</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            {{-- untuk tanggal --}}
                            <label for="" class="form-label" value="{{ old('tanggal_acc') }}">Tanggal
                                Konfirmasi</label>
                            <input type="date" class="form-control @error('tanggal_acc') is-invalid @enderror"
                                name="tanggal_acc" value="" autofocus />
                            @error('tanggal_acc')
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
        function prepareModal(idPengajuan, Nis) {
            // Mengisi nilai ID PENGAJUAN pada formulir modal
            document.querySelector('input[name="id_pengajuan"]').value = idPengajuan;
            document.querySelector('input[name="nis"]').value = Nis;
            myModal.show();
        }
    </script>

@endsection

