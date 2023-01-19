<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Yeni Ürün Kayıt</title>
</head>
<body>
    <div class="home-buttons">
        <a class="links" href="{{route("home")}}">ana sayfa</a>
    </div>
    <div class="container-misc">
    <div class="container">
        <form method="post">
            @csrf
            <div class="remember-styling">
                <input type="text" name="serial_number">
                <label for="product-serial">Yeni Ürün Kayıt Et</label>
            </div>
        
            <button type="submit" class="login-button">
                {{ __('Kayıt Et') }}
            </button>
        </form>
        </div>

@if (session()->get("error"))
{!!session()->get("flash")!!}
@endif
</div>
</body>
</html>
