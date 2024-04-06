@extends('layouts.master')
@section('title','Laporan Edit')
@section('content')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Edit Data laporan</h2>
                        </div>
                        <div class="card-body">
                            <form action="/laporan/{{$laporan->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" name="nis" value="{{ Auth()->User()->nis }}" />
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" name="judul" value="{{$laporan->judul}}" id="" class="form-control @error('judul') is-invalid @enderror"  aria-describedby="helpId" required>
                                    @error('judul')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
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
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/laporan" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection