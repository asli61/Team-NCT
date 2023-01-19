<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Ürün Kayıt</title>
</head>
<body>
    <div class="home-buttons">
        <a class="links" href="{{route("home")}}">ana sayfa</a>
    </div>
    <div class="container-misc">
    <div>Ürün kayıt et</div> 

    <form method="post">
        @csrf
        <label for="serial_number">Ürün seri numarasını giriniz</label>
        <input type = "text" name = "serial_number" placeholder = "Ürün seri numarasını giriniz" >
        <label for="adress">Ürünün yerleştirileceği yerin açık adresi</label>
        <input type = "text" name = "adress" placeholder ="Ürünün yerleştirileceği yerin açık adresi" >
        <button type = "submit">Kayıt Et</button>
     </form>
    
    @if (session()->get("error"))
        
    {{session()->get("flash")}}
        
    @endif
</div>
</body>
</html>