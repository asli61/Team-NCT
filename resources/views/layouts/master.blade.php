<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/navbar.css")}}">
    <link rel="stylesheet" href="{{asset("css/dashboard.css")}}">
    <script src="{{asset("js/dashboard.js")}}"></script>
    
    @stack('script')
    <title> Yangin bilgi | @yield('title', 'Home Page')</title>
</head>
<body>
    <div class = "navbar" id="navbar">
        <a class= "navbar-link" href="{{route("home")}}">Yangın Bilgilendirme</a>
        <a class="navbar-link" href="{{route("fire-display")}}">Yangınlar</a>

        @guest
        <a href="{{route('product-register')}}" class="navbar-link auth-link">Ürününüzü kayıt edin</a>
        <a href="{{route('login')}}" class="navbar-link auth-link">Yönetici Giriş</a>
        @endguest

        @auth
        <form method = "post" action="{{route('logout')}}">
        @csrf
        <button class = "navbar-link auth-link" type = "submit">Çıkış yap</button>
        </form>
        <a class="navbar-link auth-link" href="{{route("admin-product-register")}}">Yönetici Ürün Ekleme</a>
        @endauth
    </div>


    <div id="mySidebar" class="sidebar">
        <button class="openbtn" onclick="openNav()">☰</button>  
        <div id ="dashboard-content">
            @auth
            <form method = "post" action="{{route('logout')}}">
            @csrf
            <div class="log-out-button">
                <button class = "navbar-link auth-link" type = "submit">Çıkış yap</button>
            </div>
            </form>
            <a class="navbar-link auth-link" href="{{route("admin-product-register")}}">Yönetici Ürün Ekleme</a>
            @endauth
            <a class= "navbar-link" href="{{route('home')}}">Yangın Bilgilendirme</a>

            @guest
                <a href="{{route('login')}}" class="navbar-link auth-link">Yönetici Giriş</a>
                <a href="{{route('product-register')}}" class="navbar-link auth-link">Ürününüzü kayıt edin</a>
            @endguest
           <!-- @auth
            <form method = "post" action="{{route('logout')}}">
            @csrf
            <div class="log-out-button">
                <button class = "navbar-link auth-link" type = "submit">Çıkış yap</button>
            </div>
            </form>
            <a class="navbar-link auth-link" href="{{route("admin-product-register")}}">Yönetici Ürün Ekleme</a>
            @endauth-->
            <a href="{{route("about-us")}}">Hakkımızda</a>
            <a href="{{route("services")}}">Sağladığımız servisler</a>
            <a href="{{route("contact-us")}}">Bize ulaşın</a> 
        </div>
    </div> 
      
    <div class="content2" id="content">
        @yield('content')
    </div> 

</body>
</html>