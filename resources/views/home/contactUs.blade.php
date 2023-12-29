@include('home.inc.head')


<section class="intro_sections">
    <div class="container">
        <h1>تواصل معنا</h1>
        <p>تواصل معني حتي ننمكن من تقديم المساعه</p>
        <ul>
            <li> <a href="{{ route('index') }}">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="{{ route('showCart') }}">الحساب</a> </li>
        </ul>
    </div>
</section>

<div class="contacts">
<div class="container">
<div class="row">

<div class="col-lg-6">
    <form action="" class="form">
        <input type="text" placeholder="الاسم">
        <input type="text" placeholder="الهاتف">
        <input type="text" placeholder="الايميل">
        <textarea name="" id="" cols="30" rows="3" placeholder="اكتب رساله"></textarea>
        <button class="add-to-cart">ارسل</button>
    </form>
</div>


<div class="col-lg-6 ">
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27627.30193392079!2d31.423464149999997!3d30.053701450000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d5c8f7a15ef%3A0x5663b29bae73c2a4!2z2YbYp9iv2Yog2YjYp9iv2Yog2K_YrNmE2Kkg2KfZhNmG2K7ZitmEINin2YTYqtis2YXYuQ!5e0!3m2!1sar!2seg!4v1702906221647!5m2!1sar!2seg"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<div class="col-lg-6">
<div class="contact_sochial">

    <img src="./img/Logo.png" alt="">

    <p>نسعى إلى الإرتقاء بمستوى الجودة و الدقة لنواكب التطور التكنولوجى و تبسيط حلول الأعمال التقنية على المستخدم</p>

    <ul class="sochial">
        <li> <a href="https://www.linkedin.com/feed/"><i class="fa-brands fa-linkedin"></i></a> </li>
        <li> <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a> </li>
        <li> <a href="https://twitter.com/?lang=ar"><i class="fa-brands fa-twitter"></i></a> </li>
        <li> <a href="https://www.facebook.com/?locale=ar_AR"><i class="fa-brands fa-facebook-f"></i></a> </li>
        <li> <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest"></i></a> </li>
        <li> <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a> </li>
        <li> <a href="https://play.google.com/store/games"><i class="fa-brands fa-google-play"></i></a> </li>
    </ul>
</div>
</div>


<div class="col-lg-6">
<div class="location">
    <ul class="all_right">
        <li class="ico_a">
            <i class="fa-solid fa-house"></i>
        </li>
        <li class="text_a">
            القاهره
        </li>
    </ul>

    <ul class="all_right">
        <li class="ico_a">
            <i class="fa-solid fa-mobile-screen"></i>
        </li>
        <li class="text_a">
            <a href="tel:01002704948">01002704948</a>
        </li>
    </ul>

    <ul class="all_right">
        <li class="ico_a">
            <i class="fa-solid fa-envelope"></i>
        </li>
        <li class="text_a">
            support@domain.com
        </li>
    </ul>

</div>    
</div>



</div>    
</div>    
</div>
    

@include('home.inc.footer')
@include('home.inc.liveCart')
@include('home.inc.popUp')