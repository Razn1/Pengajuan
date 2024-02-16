@extends('layouts.master')
@section('title','Siswa')
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
                            <form action="/siswa/{{$user->id}}/update" method="post">
                                @csrf
                              
                                <div class="form-group">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" name="nama" value="{{$user->nama}}" id="" class="form-control @error('nama') is-invalid @enderror"  aria-describedby="helpId">
                                    @error('nama')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Kelas</label>
                                    <input type="text" name="username" value="{{$user->username}}" id="" class="form-control @error('username') is-invalid @enderror" aria-describedby="helpId">
                                    @error('username')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password" value="{{$user->password}}" id="" class="form-control @error('password') is-invalid @enderror" aria-describedby="helpId">
                                    @error('password')
                                    <div class="invalidate-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Level</label><select name="level" class="form-control" value="{{old('level')}}" id="">
                                        <option value="Admin">Admin</option>
                                        <option value="Kasir">Pembimbing</option>
                                        <option value="Siswa">Siswa</option>
                                    </select>   
                                </div>
                                <button type="submit" class="btn btn-info text-dark">Save</button>
                                <a href="/user" type="reset" class="btn btn-secondary text-dark">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection