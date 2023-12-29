@include('home.inc.head')

<section class="intro_sections">
    <div class="container">
        <h1>المنتج</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="{{route('index')}}">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="#">المنتج</a> </li>
        </ul>
    </div>
</section>

<div class="single_pro">
<div class="container">
<div class="row">
    
    
    <div class="col-lg-4 ">
        <img style="max-height: 500px" src="{{asset(''.$product->image)  }}" alt="">
    </div>

    <div class="col-lg-8">
        <div class="box item" 
        data-product-id="{{ $product->product_id }}"
        data-product-branch-id="{{ $product->id }}"
        data-product-name="{{ $product->name }}"
        data-product-image="{{ asset('' . $product->image) }}"
        data-product-price="{{ $product->price }}"
        data-product-discounted-price="{{ $product->discounted_price }}"
        data-product-unit="{{ $product->unit }}"
        data-product-discrption="{{ $product->description }}"
        data-product-quantity="{{ $product->total_allowed_quantity }}"
        data-product-stock="{{ $product->stock}}"
        data-product-measurement="{{ $product->measurement}}">
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
@include('home.inc.liveCart')
@include('home.inc.popUp')