@extends('layouts.master')
@section('title', 'Password')
@section('content')
<div class="content-wrapper d-flex justify-content-center align-items-center" style="font-family:Arial, Helvetica, sans-serif;"> <!-- Centering both horizontally and vertically -->
    <div class="col-lg-8 mt-6"> <!-- Adjusted column width -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    Change Password {{ Auth()->User()->nama }}
                </h4>
                <form action="{{ route('siswa.change.password', ['id' => Auth()->user()->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="password" class="form-label">Input Old Password</label>
                        <input class="form-control" type="password" id="password" name="old_password"
                            placeholder="Insert old password" required>
                        @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="newpassword" class="form-label">Input New Password</label>
                        <input class="form-control" type="password" id="newpassword" name="new_password"
                            placeholder="New Password" required>
                        @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="form-label">Confirm New Password</label>
                        <input class="form-control" type="password" id="confirm_password"
                            name="new_password_confirmation" placeholder="Confirm Password" required>
                        @error('new_password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/js.js')}}"></script>

@endsection
