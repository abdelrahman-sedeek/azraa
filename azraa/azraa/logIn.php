<?php include './header.php';?>


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

    <form action="" class="Login_form" >
        <h3>تسجيل دخول</h3>
        <label for="">رقم الهاتف</label>
        <input type="text" placeholder="">
        <label for="">كلمه السر</label>
        <input type="password" placeholder="">
        <div class="lost_pass" id="lost_pass">
            نسيت كلمه السر <i class="fa-solid fa-lock"></i> 
               </div>
        <button class="add-to-cart">ادخل</button>    

            <a class="add-to-cart" href="./registration.php">ليس لديك حساب</a>
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





<?php include './footer.php';?> 
