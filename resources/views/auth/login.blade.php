<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Yönetici-Giriş</title>
</head>
<body>
    <div class="home-buttons">
        <a class="links" href="{{route("home")}}">ana sayfa</a>
    </div>
<style>
    /* .container{
        box-sizing: content-box;
        margin-top: 5px;
        justify-content: center;
    } */
    </style>
<div class="container-misc">
    <div class="container">
    <form method="post">
        @csrf
        <div class="email-styling">
            <label for="email">{{ __('Email Address') }}</label>
            <div>
                <input id="email" type="email" name="email" required autocomplete="email">
            </div>
        </div>
    
        <div class="password-styling">
            <label for="password">{{ __('Password') }}</label>
            <div>
                <input id="password" type="password"  name="password" required autocomplete="current-password">
            </div>
        </div>
    
        <div class="remember-styling">
            <input id="remember" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        
    
        <button type="submit" class="login-button">
            {{ __('Login') }}
        </button>
        
    
        <div class="forgot-password">
            @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
            @endif
        </div>
    </form>
    </div>
</div>
<div id="mySidebar" class="sidebar">
    <button class="openbtn" onclick="openNav()">☰</button>  
    <div id ="dashboard-content">
        <a class= "navbar-link" href="{{route('home')}}">Yangın Bilgilendirme</a>
        @guest
            <a href="{{route('product-register')}}" class="navbar-link auth-link">Ürününüzü kayıt edin</a>
            <a href="{{route('login')}}" class="navbar-link auth-link">Yönetici Giriş</a>
        @endguest
        @auth
        <form method = "post" action="{{route('logout')}}">
        @csrf
        <button class = "log-out-button,navbar-link auth-link" type = "submit">Log Out</button>
        </form>
        <a class="navbar-link auth-link" href="{{route("admin-product-register")}}">Yönetici Ürün Ekleme</a>
        @endauth
        <a href="{{route("about-us")}}">Hakkımızda</a>
        <a href="{{route("services")}}">Sağladığımız servisler</a>
        <a href="{{route("contact-us")}}">Bize ulaşın</a>
    </div>
</div> 
</body>
</html>


