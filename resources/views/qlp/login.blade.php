<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/bec8d97be0.js" crossorigin="anonymous"></script>
    <link rel="icon" href="https://media-exp1.licdn.com/dms/image/C560BAQH98pFRNb1XUw/company-logo_200_200/0/1630065091001?e=2159024400&v=beta&t=2Z-ubDhWgv2dmLSNR87sdyaaSDVywJ6n4S1FB_cwOss">
    <link rel="stylesheet" href="{{ asset('/qlp/css/loginregister_style.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a class="link_kembali" href="#"><i class="back fa-solid fa-angle-left"></i> Kembali</a>
                <h1 class="header_title">Selamat datang di</h1>
                <h1 class="header_title">Quarter Life Project</h1>
                <p class="login_text">Login</p>
                <div class="col-lg-10">
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Masukkan password">
                            <a href="#" id="resetPass" class="form-text">Lupa password ?</a>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn">Login</button>
                            <p class="text-center">Belum punya akun? <a href="#" class="signup_text">Buat akun baru</a></p>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-6">
                <img class="img_bg" src="{{ asset('/qlp/img/login_bg.png') }}">
                <img class="img_vector" src="{{ asset('/qlp/img/login_vector.png') }}">
             </div>
        </div>
    </div>
</body>
</html>