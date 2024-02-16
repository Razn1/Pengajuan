@extends('layouts.master')
@section('title', 'Mengajukan')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Mengajukan Data</h2>
                                <a href="">Halo</a>
                            </div>
                            <div class="card-body">
                                <form action="/pengajuan/simpan" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nis</label>
                                        <input type="number" name="nis" class="form-control" value="{{Auth()->user()->nis }}"> 
                                        {{-- <select name="nis" id="" class="form-control">
                                            @foreach ($siswa as $s)
                                                <option value="{{ $s->nis }}">{{Auth()->user()->nis }}</option>
                                            @endforeach
                                        </select> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Judul Laporan</label>
                                        <input type="text" name="judul_laporan"  id="" class="form-control @error('judul_laporan') is-invalid @enderror" value="{{old('judul_laporan')}}"
                                            placeholder="Masukan Judul Laporan" aria-describedby="helpId">
                                            @error('judul_laporan')
                                            <div class="invalidate-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                        <div class="form-group">
                                            <label for="proposal">Proposal</label>
                                            <input type="file" class="form-control @error('proposal') is-invalid @enderror" value="{{old('proposal')}}" accept=".pdf" name="proposal" id="proposal"> 
                                            @error('proposal')
                                            <div class="invalidate-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="/siswa" type="reset" class="btn btn-secondary">cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
