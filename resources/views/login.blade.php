<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="registercss/app.css">

    <title>تسجيل الدخول</title>
    <style>
        body{
            /* background: url('img/42341.jpg');
            background-position:100% 100%;
            background-repeat: no-repeat;
            background-size: cover;
            width:100%;
            height: 100%; */
        }
    </style>
</head>

<body>
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>تسجيل الدخول</h2>
            </div>
            <div class="row clearfix">

                <form action="{{route('login')}}" method="post">
                    @csrf
                    <label for="username">البريد الالكتروني :</label><br />
                    <input type="text"  name="email" placeholder="ادخل البريد الالكتروني" required /><br /><br />
                    <label for="password">كلمة المرور :</label><br />
                    <input type="password" name="password" required /><br /><br />
                    <input type="submit" value="تسجيل الدخول" name="" id="">
                </form>
            </div>

        </div>
    </div>


</body>

</html>
