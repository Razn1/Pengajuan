<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/i.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login</title>
</head>

<body>
    @if (Session::has('delete'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.error("{{ Session::get('delete') }}");
        </script>
    @endif
    <div class="container" id="container">
        <div class="form-container sign-in">
            <div class="scrollbar" id="style-1">
                <div class="force-overflow">
                    <form action="/regis" method="post" role="form">
                        @csrf
                        <img src="{{ asset('/assets/img/i.png') }}" alt="main_logo">
                        <h1>Login</h1>
                        <span>Enter Your Data</span>
                        <input class="form-control @error('nis') is-invalid @enderror" value="{{old('nis')}}" type="text" name="nis"
                            placeholder="NIS">
                        @error('nis')
                            <div class="invalidate-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" type="email" name="email" placeholder="Email">
                        @error('email')
                        <div class="invalidate-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        <input class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}" type="text" name="username" placeholder="Username">
                        @error('username') 
                        <div class="invalidate-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        <input class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" type="password" name="password" placeholder="Password">
                        @error('password')
                        <div class="invalidate-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        <button class="btn mt-3">Register</button>
                        <a href="/loginsiswa" class="hidden" id="login">Back</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Siswa!</h1>
                    <p>Login with your personal details to use all of site features</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/plugins/script.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
