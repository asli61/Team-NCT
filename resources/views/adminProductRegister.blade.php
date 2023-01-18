<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yeni Ürün Kayıt</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="remember-styling">
                <input type="text" name="serial_number">
                <label class="form-check-label" for="product-serial">Yeni Ürün Kayıt Et</label>
            </div>
        
            <button type="submit" class="login-button">
                {{ __('Kayıt Et') }}
            </button>
        </form>
        </div>
</body>
</html>