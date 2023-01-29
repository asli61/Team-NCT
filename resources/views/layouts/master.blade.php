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
        
        <form method = "post" action="{{route('fire-display')}}">
            @csrf
            <select name="city">
                <option value="">Şehir seçiniz</option>
                <option value="34">İstanbul</option>
                <option value="6">Ankara</option>
                <option value="35">İzmir</option>
                <option value="1">Adana</option>
                <option value="2">Adıyaman</option>
                <option value="3">Afyonkarahisar</option>
                <option value="4">Ağrı</option>
                <option value="68">Aksaray</option>
                <option value="5">Amasya</option>
                <option value="7">Antalya</option>
                <option value="75">Ardahan</option>
                <option value="8">Artvin</option>
                <option value="9">Aydın</option>
                <option value="10">Balıkesir</option>
                <option value="74">Bartın</option>
                <option value="72">Batman</option>
                <option value="69">Bayburt</option>
                <option value="11">Bilecik</option>
                <option value="12">Bingöl</option>
                <option value="13">Bitlis</option>
                <option value="14">Bolu</option>
                <option value="15">Burdur</option>
                <option value="16">Bursa</option>
                <option value="17">Çanakkale</option>
                <option value="18">Çankırı</option>
                <option value="19">Çorum</option>
                <option value="20">Denizli</option>
                <option value="21">Diyarbakır</option>
                <option value="81">Düzce</option>
                <option value="22">Edirne</option>
                <option value="23">Elazığ</option>
                <option value="24">Erzincan</option>
                <option value="25">Erzurum</option>
                <option value="26">Eskişehir</option>
                <option value="27">Gaziantep</option>
                <option value="28">Giresun</option>
                <option value="29">Gümüşhane</option>
                <option value="30">Hakkâri</option>
                <option value="31">Hatay</option>
                <option value="76">Iğdır</option>
                <option value="32">Isparta</option>
                <option value="46">Kahramanmaraş</option>
                <option value="78">Karabük</option>
                <option value="70">Karaman</option>
                <option value="36">Kars</option>
                <option value="37">Kastamonu</option>
                <option value="38">Kayseri</option>
                <option value="71">Kırıkkale</option>
                <option value="39">Kırklareli</option>
                <option value="40">Kırşehir</option>
                <option value="79">Kilis</option>
                <option value="41">Kocaeli</option>
                <option value="42">Konya</option>
                <option value="43">Kütahya</option>
                <option value="44">Malatya</option>
                <option value="45">Manisa</option>
                <option value="47">Mardin</option>
                <option value="33">Mersin</option>
                <option value="48">Muğla</option>
                <option value="49">Muş</option>
                <option value="50">Nevşehir</option>
                <option value="51">Niğde</option>
                <option value="52">Ordu</option>
                <option value="80">Osmaniye</option>
                <option value="53">Rize</option>
                <option value="54">Sakarya</option>
                <option value="55">Samsun</option>
                <option value="56">Siirt</option>
                <option value="57">Sinop</option>
                <option value="58">Sivas</option>
                <option value="73">Şırnak</option>
                <option value="59">Tekirdağ</option>
                <option value="60">Tokat</option>
                <option value="61">Trabzon</option>
                <option value="62">Tunceli</option>
                <option value="63">Şanlıurfa</option>
                <option value="64">Uşak</option>
                <option value="65">Van</option>
                <option value="77">Yalova</option>
                <option value="66">Yozgat</option>
                <option value="67">Zonguldak</option>
            </select>
            <button class = "navbar-link auth-link" type = "submit">Yangınlar</button>
        </form>

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