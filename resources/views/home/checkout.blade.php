@include('home.inc.head')



<section class="intro_sections">
    <div class="container">
        <h1>الحساب</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="./index.php">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="./Checkout.php">الحساب</a> </li>
        </ul>
    </div>
</section>

<div class="checkout">
<div class="container">
<div class="row">
<div class="checkout_box_container">
<div class="checkout_box">
    <h3>الدفع و عنوان الشحن</h3>
    <div class="">
        <select class="form-select mb-4" aria-label="Default select example">
            <option value="1">القاهره</option>
            <option value="2">الجيزه</option>
            <option value="3">الفيوم</option>
            <option value="3">المعادي</option>
            <option value="3">القليوبيه</option>
            <option value="3">شبرا</option>

        </select>
        <div class="mb-4">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="الاسم الاول"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="الاسم الثاني"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="العنوان" aria-describedby="emailHelp">
        </div>

        <div class="mb-4">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="رقم للتواصل" aria-describedby="emailHelp">
        </div>

        <div class="mb-4">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="رقم ثاني للتواصل" aria-describedby="emailHelp">
        </div>


        <button class=" add-to-cart  mb-4">تاكيد</button>

    </div>
</div>
</div>

  
</div>   
</div>

</div>


@include('home.inc.footer')
