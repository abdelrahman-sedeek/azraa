@include('home.inc.head') 


<!-- intro section -->
<section class="intro_sections">
    <div class="container">
        <h1>تسجيل حساب</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="./index.php">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="./index.php">تسجيل حساب</a> </li>
        </ul>
    </div>
</section>

<section class="Login form" id="Login">
    <div class="contaoner">

        <form action="{{ route('registerPost') }}" method="post" class="Login_form">
            @csrf
            <h3>أنشاء حساب</h3>
                    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <label for="">رقم الهاتف</label>
            <input name="mobile" type="text" placeholder="">
            <label  for="">كلمه السر</label>
            <input name="password" type="password" placeholder="">
            <button class="add-to-cart">ارسل</button>
            <a href="{{ route('login') }}" type="submit"  class="add-to-cart" >تسجيل دخول</a>
        </form>

    </div>
</section>



@include('home.inc.footer')