<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="form_area">
            <p class="title">LOGIN</p>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('login gagal'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('login gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="form_group">
                    <label class="sub_title" for="email">Email</label>
                    <input placeholder="Enter your email" name="email" id="email" class="form_style" type="email" >
                </div>
                <div class="form_group">
                    <label class="sub_title" for="password">Password</label>
                    <input placeholder="Enter your password" name="password" id="password" class="form_style" type="password">
                </div>
                <div>
                    <button class="btn">LOGIN</button>
                    <p>Ga Punya Akun ? <a class="link" href="/Register">Daftar Disini!</a></p><a class="link"
                        href="">
                    </a>
                </div><a class="link" href="">

                </a>
            </form>
        </div><a class="link" href="">
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
