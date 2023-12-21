<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرئيسيه</title>
    <link rel="icon" href="{{ asset('/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    @livewireStyles
</head>
<body>
<!-- navbar -->
<div class="navbar">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-logo">
            <a class="nav_trans_logo" href="/index.php"><img src="{{asset('/img/logo.png')}}" alt=""></a>
            <a class="Fixd_nav_logo" href=" /index.php"><img src="{{asset('/img/logo_fix.png')}}" alt=""></a>
        </div>
    </div>
    <div class="nav-btn">
        <label for="nav-check">
            <span class="span_1"></span>
            <span class="span_2"></span>
            <span class="span_3"></span>
        </label>
    </div>

    <div class="nav-links">
        <a href="{{ route('index') }}">الرئيسيه</a>
        <a href="{{ route('allCategory')  }}">التصنيفات</a>
        <a href="./Cart.php">العربه</a>
        <a href="./logIn.php">تسجيل دخول</a>
        <a href="./contact_us.php">تواصل معنا</a>
    </div>
</div>