<!DOCTYPE html>
<html lang="en">
    <script>
        const container = document.querySelector(".container"),
            pwShowHide = document.querySelector(".showHidePw"),
            pwFileds = document.querySelectorAll(".password");

        // js code to show/hide password and change icon

        pwShowHide.forEach(eyeIcon =>{
            eyeIcon.addEventListener("click", ()=>{
                pwFileds.forEach(pwField =>{
                    if(pwField.type === "password"){
                        pwField.type = "text";

                        pwShowHide.forEach(icon =>{
                            icon.classList.replace("uil-eye-slash", "uil-eye")
                        })
                    }
                    else{
                        pwField.type = "password";
                        pwShowHide.forEach(icon =>{
                            icon.classList.replace("uil-eye", "uil-eye-slash")
                        })
                    }
            })
        })
    })
    </script>
<head>
    <meta charset="UTF-8">
    <title>Smartphone Store</title>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="js/scripts.js"></script>
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
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: linear-gradient(180deg, orange , red);
    background-repeat: no-repeat;
    background-size: 125%;
}

.container{
    position: relative;
    max-width: 500px;
    width: 100%;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.container .form{
    padding: 30px
}

.container .forms{
    display: flex;
    align-items: center;
    width: 200%;
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
    top:50px;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
}

.input-field input:is(:focus, :valid) ~ i{
    color: #ff523b;
}

.input-field i.icon{
    position:absolute;
    top:50px;
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

.btn-primary{
    border: none;
    color: #fff;
    font-size: 25px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 6px;
    background-color: #ff523b;
    cursor: pointer;
    width:445px;
    height:50px;
}

    .logo{
        position:absolute;
        top:-20px;
        left:20 px;
    }
    </style>
</head>
<body>
    <div class="logo">
        <a href="/home"><img src="/frontend/images/logoASMD.png" width="125px"></a>
    </div>
<div class="container">
    <div class="forms">
        <div class="form Register" style="padding-top:10px;">
            <span class="title">Register</span>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-field">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                    <br>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Enter your name"autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label><br>

                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <i class="uil uil-envelope"></i>
                </div>
                <div class="input-field">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label><br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="uil uil-lock icon"></i>
                </div>
                <div class="input-field">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                    </div>
                    <i class="uil uil-lock icon "></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div>
                    <br>
                    <i class="uil uil-venus"></i>
                    <i class="uil uil-mars"></i>
                    <label>Gender</label><br>
                    <div class="col-md-6" style="margin-top:10px">
                        <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label><br>
                                <div class="col-md-6" style="margin-top:10px">
                                    <input type="radio" id="male" name="gender" value="1">
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="0">
                                    <label for="female">Female</label>
                                    <input type="radio" id="unknown" name="gender" value="2">
                                    <label for="unknown">Unknown</label><br>
                                </div>
                    </div>
                </div>
                <div class="input-field button">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
