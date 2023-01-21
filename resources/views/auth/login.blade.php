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
        <a class="links" href="{{route("home")}}">Ana sayfa</a>
    </div>

<div class="container-misc">
    <div class="container">
    <form method="post">
        @csrf
        <div class="email-styling">
            <label for="email">{{ __('E-posta adresi') }}</label>
            <div>
                <input id="email" type="email" name="email" required autocomplete="email">
            </div>
        </div>
    
        <div class="password-styling">
            <label for="password">{{ __('parola') }}</label>
            <div>
                <input id="password" type="password"  name="password" required autocomplete="current-password">
            </div>
        </div>
    
        <div class="remember-styling">
            <input id="remember" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Beni hatırla') }}
            </label>
        </div>
        
    
        <button type="submit" class="login-button">
            {{ __('Giriş yap') }}
        </button>
        
    
        
            @if (Route::has('password.request'))
                                        <a class="forgot-password btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Parolamı unuttum') }}
                                        </a>
            @endif
        
    </form>
    </div>
</div>
@if (session()->get("error"))
    
{{session()->get("flash")}}
    
@endif
<strong>{{ $message }}</strong>
</body>
</html>


