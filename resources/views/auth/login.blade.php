<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/sass/app.scss')
    <style>
        body {
            background-color: #007bff; /* ini warna background di /login */
        }
    </style>
</head>

<body>
    <div class="container-sm d-flex justify-content-center align-items-center min-vh-100">
        <div class="p-5 bg-light rounded-3 col-xl-4 border text-center">
            <div class="mb-4">
                <i class="bi-hexagon-fill fs-1 text-primary"></i>
                <h4 class="mt-3"><strong>Employee Data Master</strong></h4>
            </div>
            <hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 text-start">
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email"
                        required autofocus style="font-weight: bold">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 text-start">
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password"
                        required style="font-weight: bold">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <hr>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="bi-box-arrow-in-right me-2"></i>Log In
                    </button>
                </div>
            </form>
        </div>
    </div>
    @vite('resources/js/app.js')

</body>

</html>
