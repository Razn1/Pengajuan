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
                                <form action="/siswa/{{ $user->id }}/up" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" name="password" id=""
                                            class="form-control @error('password') is-invalid @enderror"
                                            aria-describedby="helpId">
                                        @error('password')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-info text-dark">Save</button>
                                    <a href="/siswa" type="reset" class="btn btn-secondary text-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
