@include('home.inc.head')

<section class="intro_sections">
    <div class="container">
        <h1>المنتج</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="./index.php">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="./index.php">المنتج</a> </li>
        </ul>
    </div>
</section>

<div class="single_pro">
<div class="container">
<div class="row">
    
    
    <div class="col-lg-4">
        <img src="{{asset(''.$product->image)  }}" alt="">
    </div>

    <div class="col-lg-8">
        <div class="box">
            <h3>{{ $product->name }}</h3>
            <span> {{ $product->discounted_price }} ج/م بدلا من <del>{{ $product->price }} جم</del> </span>
            <p> {{ $product->description }}</p>
            <button onclick="addtoChose()"  class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
        </div>
    </div>



</div>    
</div>    
</div>




@include('home.inc.footer')