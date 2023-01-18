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
    <title>Teammate Finder | @yield('title', 'Home Page')</title>
</head>
<body>
    <div class = "navbar" id="navbar">
        <a class= "navbar-link" href="{{route('home')}}">Yangın Bilgilendirme</a>
        <a class= "navbar-link" href="{{route('home')}}">template</a>

        @guest
        <a href="{{route('product-register')}}" class="navbar-link auth-link">Ürününüzü kayıt edin</a>
        <a href="{{route('login')}}" class="navbar-link auth-link">Yönetici Giriş</a>
        @endguest

        @auth
        <form method = "post" action="{{route('logout')}}">
        @csrf
        <button class = "navbar-link auth-link" type = "submit">Log Out</button>
        </form>
        <a class="navbar-link auth-link" href="{{route("admin-product-register")}}">Yönetici Ürün Ekleme</a>
        @endauth
    </div>


    <div id="mySidebar" class="sidebar">
        <button class="openbtn" onclick="openNav()">☰</button>  
        <div id ="dashboard-content">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
        </div>
      </div>
      
      
    <div id="content">
        <div>
            <h2>Collapsed Sidebar</h2>
            <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
        </div>
        
        @yield('content')
    </div> 

</body>
</html>