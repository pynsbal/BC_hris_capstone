<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCHRIS</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="bclogo">
            <img src="{{ asset('assets/img/bclogo.png') }}">
            <div class="card-body">
                <h1>BROKENSHIRE COLLEGE INC.</h1>
            </div>

            <div class="hrlogo">
                <img src="{{ asset('assets/img/hrw.png') }}">
                <h2>BCHRIS</h2>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email Address">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn">
                        {{ __('Login') }}
                    </button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>