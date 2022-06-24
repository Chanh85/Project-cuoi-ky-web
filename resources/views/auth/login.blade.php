<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../frontend/css/style_login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/style_login.css">
    <script src="../frontend/js/scripts.js"></script>

    <style>
        /* Login Form */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        height: 100vh;
        width:100%;
        display: flex;
        align-items: center;
        justify-content: center;
<<<<<<< HEAD
        background-image: linear-gradient(to left, black,right);
        padding-left:500px;
        padding-right:500px;
        margin-bottom:20px;
=======
        background-image: url(../images/Background_Login.jpg);
        background-repeat: no-repeat;
        background-color: black;
        background-size:90%;
>>>>>>> 8f8b6ad20750ec75c1c4cd086bf6ec3bae9a6301
    }

    .container{
        position: relative;
        max-width: 500px;
        width: 100%;
        background: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
<<<<<<< HEAD
        margin-bottom:20px;
        height:500px;
=======
>>>>>>> 8f8b6ad20750ec75c1c4cd086bf6ec3bae9a6301
    }

    .container .form{
        padding: 30px
    }

    .container .forms{
        display: flex;
        align-items: center;
<<<<<<< HEAD
        width: 200%;
=======
        width: 100%;
>>>>>>> 8f8b6ad20750ec75c1c4cd086bf6ec3bae9a6301
    }

    .container .form{
        width: 50%;
        padding: 30px;
    }

    .container .form .title{
        position: relative;
        font-size: 27px;
        font-weight: 600;
    }

    .form .title::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background-color: #ff523b;
        border-radius: 25px;
    }

    .form .input-field{
        margin-top: 30px;
        position: relative;
        height: 50px;
        width: 100%;
    }

    .form login{

    }
    .input-field input{
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
    }

    .input-field input:is(:focus, :valid){
        border-bottom-color: #ff523b;
    }

    .input-field i{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
    }

    .input-field input:is(:focus, :valid) ~ i{
        color: #ff523b;
    }

    .input-field i.icon{
        left: 0;
    }
    .input-field i.showHidePw{
        right: 0;
        cursor: pointer;
        padding: 10px;
    }

    .form .checkbox-text{
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .checkbox-text .checkbox-content{
        display: flex;
        align-items: center;
    }

    .checkbox-content input{
        margin: 0 8px -2px 4px;
        accent-color: #ff523b;
    }

    .form a.text{
        color: #4070f4;
        font-size: 14px;
    }

    .form a{
        color: #ff523b;
        text-decoration: none;
    }
    .form a:hover{
        text-decoration: underline;
    }

    .form .button{
        margin-top: 35px;
    }

    .form .button input{
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #ff523b;
        cursor: pointer;
<<<<<<< HEAD
    }
    .from{
        margin-bottom: 10px;
    }
=======
>>>>>>> 8f8b6ad20750ec75c1c4cd086bf6ec3bae9a6301

    </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .btn-primary {
                width:450px;
                height:50px;
                font-size:27px;
                color:white;
                background-color:#ff523b;
                border:none;
                border-radius:5px;
                cursor:pointer;
            }
    </style>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-field">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login Now') }}
                        </button>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

