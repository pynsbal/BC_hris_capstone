<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

        :root {
            --bg-image: url('http://127.0.0.1:8000/assets/img/bcschool.png');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: var(--bg-image);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            width: 400px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: #fff;
            border-radius: 15px;
            padding: 30px 40px;
            text-align: center;
        }

        .wrapper .bclogo img {
            width: 70px;
        }

        .wrapper .bclogo h1 {
            font-size: 12px;
            text-align: center;
        }

        .wrapper .hrlogo img {
            width: 250px;
        }

        .wrapper .hrlogo h2 {
            font-size: 40px;
            text-align: center;
        }

        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            margin-top: 20px;
        }
    </style>
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
                <h3>Welcome</h3>

                <!-- Login Button -->
                <a href="{{ route('login') }}">
                    <button class="btn">Login</button>
                </a>

                <!-- Register Button -->
                <a href="{{ route('register') }}">
                    <button class="btn">Register</button>
                </a>


            </div>
        </div>
    </div>
</body>

</html>