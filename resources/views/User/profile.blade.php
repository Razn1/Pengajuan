@extends('layouts.master')
@section('title', 'Profile')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center"> <!-- Centering the content -->
                <div class="col-md-6 mt-5"> <!-- Adjusted column width -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-dark">
                                    <tr>
                                        <th>ID :</th>
                                        <td><hr class="vertical dark mt-0"></td>
                                        <td>{{ Auth()->user()->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama :</th>
                                        <td><hr class="vertical dark mt-0"></td>
                                        <td>{{ Auth()->user()->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Username :</th>
                                        <td><hr class="vertical dark mt-0"></td>
                                        <td>{{ Auth()->user()->username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Level :</th>
                                        <td><hr class="vertical dark mt-0"></td>
                                        <td>{{ Auth()->user()->level }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a class="btn btn-primary" href="/user/change-password/{{Auth()->User()->id}}">
                                Change Password
                            </a>
                            <a class="btn btn-waring" href="/user/{{Auth()->User()->id}}/edit">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
