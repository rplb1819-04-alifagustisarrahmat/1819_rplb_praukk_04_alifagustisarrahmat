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
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 5px 5px 5px darkgray;
        }

        input[type = "text"],input[type = "password"]
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
        input[type = "text"]:hover,input[type = "password"]:hover{
            max-width:400px;
            width: 100%;
            background: none;
        }
        input[type = "text"]:focus,input[type = "password"]:focus{
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
    <div class="wrapper">
    <div class="card" style="background-color: #202020">
        <div class="card-body text-center text-light">
            <h2 class="card-title text-uppercase">masuk</h2>
            <hr class="bg-light">
            <form class="" action="" method="">
                <div class="form-group p-1 mb-0">
                    <label for="username">Username</label>
                    <input class="form-control mx-auto" type="text" name="username" id="username" placeholder="John11">
                </div>
                <div class="form-group p-1 mb-0">
                    <label for="password">Password</label>
                    <input class="form-control mx-auto" type="password" name="password" id="password" placeholder="password">
                </div>
                <div class="form-group mb-0">
                    <a class="btn btn-link" href="">Lupa Password?</a>
                </div>
                <button type="submit">masuk</button>
            </form>
            <hr class="bg-light">
            <p class="mb-0">Belum Punya Akun?</p>
            <a class="btn btn-link text-uppercase mb-0" href="{{ route('register') }}">daftar sekarang!</a>
        </div>
    </div>
    </div>
</body>
</html>