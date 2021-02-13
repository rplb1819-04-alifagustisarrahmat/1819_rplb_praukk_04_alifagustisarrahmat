<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPMat</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            padding: 0px;
            margin: 0px;
            font-family : sans-serif;
            background-color: whitesmoke;
        }
        .wrapper{
            max-width: 500px;
            width: 100%;
            background: none;
            box-shadow: 5px 5px 5px darkgray;
        }

        input
        {
            max-width: 300px;
            width: 100%;
            border: 2px solid slateblue !important;
            border-radius : 22px !important;
            outline: none !important;
            color: white !important;
            background: none !important;
            transition: 0.5s !important;
            text-align: center !important;
        }
        input:hover{
            max-width:400px;
            width: 100%;
            background: none;
        }
        input:focus{
            max-width:400px;
            width: 100%;
            background: none;
            border-color:royalblue;
        }

        button{
            max-width: 260px;
            width: 100%;
            height: 30px;
            border: 2px solid royalblue;
            border-radius: 15px;
            cursor: pointer;
            background: none;
            transition: 0.50s;
        }
        button:hover{
            max-width: 360px;
            width: 100%;
            background-color:slateblue;
        }
    </style>
</head>
<body>
    <div class="wrapper mx-auto" style="margin-top: 5%;margin-bottom:5%;">
    <div class="card" style="background-color: #202020;">
        <div class="card-body text-center text-light">
            <h2 class="card-title text-uppercase">Register</h2>
            <hr class="bg-light">
            <form action="{{ route('register') }}" method="POST">
                <div class="form-group p-1 mb-0">
                    <label for="nik">NIK</label>
                    <input class="form-control mx-auto" type="text" name="nik" id="nik" placeholder="Max: 16 Characters">
                </div>
                <div class="form-group p-1 mb-0">
                    <label for="nama">Nama</label>
                    <input class="form-control mx-auto" type="text" name="nama" id="nama" placeholder="example: John">
                </div>
                <div class="form-group p-1 mb-0">
                    <label for="username">Username</label>
                    <input class="form-control mx-auto" type="text" name="username" id="username" placeholder="example: John11">
                </div>
                <div class="form-group p-1 mb-0">
                    <label for="username">Email</label>
                    <input class="form-control mx-auto" type="text" name="username" id="username" placeholder="John11">
                </div>
                <div class="form-group p-1 mb-0">
                    <label for="password">Password</label>
                    <input class="form-control mx-auto" type="password" name="password" id="password" placeholder="password">
                </div>
                <div class="form-group p-1 mb-0">
                    <label for="password-confirmation">Password Confirmation</label>
                    <input class="form-control mx-auto" type="password" name="password-confirmation" id="password-confirmation" placeholder="confirm your password">
                </div>
                <div class="form-group p-1">
                    <label for="telp">No. Telp.</label>
                    <input class="form-control mx-auto" type="number" name="telp" id="telp" placeholder="+62 xxx xxxx xxxx">
                </div>
                <button type="submit">Daftar</button>
            </form>
            <hr class="bg-light">
            <p class="mb-0">Punya Akun?</p>
            <a class="btn btn-link text-uppercase mb-0" href="{{ route('login') }}">Tekan Ini!</a>
        </div>
    </div>
    </div>
</body>
</html>