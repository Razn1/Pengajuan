@extends('layouts.master')
@section('title', 'Siswa Edit')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit Data Siswa</h2>
                            </div>
                            <div class="card-body">
                                <form action="/siswa/{{ $user->id }}/simpan" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" name="nama" value="{{ $user->nama }}" id=""
                                            class="form-control @error('nama') is-invalid @enderror"
                                            aria-describedby="helpId">
                                        @error('nama')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Kelas</label><select name="kelas"
                                            class="form-control" value="{{ old('level') }}" id="">
                                            <option value="XII PPLG 1">XII PPLG 1</option>
                                            <option value="XII PPLG 2">XII PPLG 2</option>
                                            <option value="XII PPLG 3">XII PPLG 3</option>
                                            <option value="XII PPLG 4">XII PPLG 4</option>
                                            <option value="XII TMS 1">XII TMS 1</option>
                                            <option value="XII TMS 2">XII TMS 2</option>
                                            <option value="XII TMS 3">XII TMS 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Jurusan</label><select name="jurusan"
                                            class="form-control" value="{{ old('level') }}" id="">
                                            <option value="Pengembangan Perangkat Lunak dan Gim">Pengembangan Perangkat
                                                Lunak dan Gim</option>
                                            <option value="Teknik Mesin">Teknik Mesin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tempat PKL</label>
                                        <input type="text" name="tempat_pkl" value="{{ $user->tempat_pkl }}"
                                            id="" class="form-control @error('username') is-invalid @enderror"
                                            aria-describedby="helpId">
                                        @error('tempat_pkl')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nomor Telepon</label>
                                        <input type="number" name="no_telp" value="{{ $user->no_telp }}" id=""
                                            class="form-control @error('username') is-invalid @enderror"
                                            aria-describedby="helpId">
                                        @error('no_telp')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-info text-dark">Save</button>
                                    <a href="/profile" type="reset" class="btn btn-secondary text-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
