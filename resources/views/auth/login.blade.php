@include('home.inc.head') 


<!-- intro section -->
<section class="intro_sections">
    <div class="container">
        <h1>تسجيل دخول</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="./index.php">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="./index.php">تسجيل دخول</a> </li>
        </ul>
    </div>
</section>

<section class="Login form" id="Login">
<div class="contaoner">
    @if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }}
    </div>
    @endif
    <form action="{{ route('loginPost') }}" method="POST" class="Login_form" >
        @csrf
        <h3>تسجيل دخول</h3>
        <label for="">رقم الهاتف</label>
        <input name="mobile" type="text" placeholder="">
        <label for="">كلمه السر</label>
        <input name="password" type="password" placeholder="">
        <div class="lost_pass" id="lost_pass">
            نسيت كلمه السر <i class="fa-solid fa-lock"></i> 
               </div>
        <button type="submit" class="add-to-cart">ادخل</button>    

            <a class="add-to-cart" href="{{ route('register') }}">ليس لديك حساب</a>
    </form>

    <form action="" class="lost_pass_form">
        <h3>تسجيل دخول</h3>
        <label for="">رقم الهاتف</label>
        <input type="text" placeholder="">
        <div class="send_pass">
            سوف نرسل لك كلمه السر<i class="fa-solid fa-lock-open"></i>
        </div>
        <button class="add-to-cart">ارسل</button>
        <button class="add-to-cart " id="Git_Back">رجوع</button>
    </form>


</div>
</section>
@include('home.inc.footer') 





