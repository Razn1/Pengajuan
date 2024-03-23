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
    <title>Home</title>
</head>

<body>
    {{-- <div class="container-fluid" id="container"> --}}
        <div class="container-fluid" id="container">
            <div class="form-container">
                <form action="/login" method="get" role="form">
                    @csrf
                    <button class="btn mt-3">User</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-right">
                        <p>Choose Your Role to Login</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid" id="container">
            <div class="form-container">
                <form action="/loginsiswa" method="get" role="form">
                    @csrf
                    <button class="btn mt-3">Siswa</button>
                    
                </form>
                <button class="btn mt-3">Siswa</button>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-right">
                        <p>Choose Your Role to Login</p>
                    </div>
                </div>
            </div>
        </div>
        

    {{-- </div> --}}

    <script src="{{ asset('assets/js/plugins/script.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
