<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="form_area">
            <p class="title">REGISTER</p>
            <form action="/Register" method="POST">
                @csrf
                <div class="form_group">
                    <label class="sub_title" >Name</label>
                    <input placeholder="Enter your full name" name="name" id="name" class="form_style" type="text" required value="{{ old('name') }}">
                </div>
                <div class="form_group">
                    <label class="sub_title">Username</label>
                    <input placeholder="Enter your Username" name="username"id="username" class="form_style" type="text" required value="{{ old('username') }}">
                </div>
                <div class="form_group">
                    <label class="sub_title" >Email</label>
                    <input placeholder="Enter your email" name="email" id="email" class="form_style" type="email" required value="{{ old('email') }}">
                </div>
                <div class="form_group">
                    <label class="sub_title" >Password</label>
                    <input placeholder="Enter your password" name="password" id="password" class="form_style" type="password" required>
                </div>
                <div>
                    <button class="btn">REGIST</button>
                    <p>Have an Account? <a class="link" href="/login">Login Here!</a></p><a class="link"
                        href="">
                    </a>
                </div><a class="link" href="">

                </a>
            </form>
        </div><a class="link" href="">
        </a>
    </div>
</body>

</html>
