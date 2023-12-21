@include('home.inc.head')

<div class="single_pro">
    <div class="container">
    <div class="row">
         @dd($product)
        <div class="col-lg-4">
            <img src="{{ asset(''.$product->image) }}" alt="">
        <div class="col-lg-8">
            <div class="box">
                <h3>{{ $product->name }}</h3>
                <span> {{ $product->discounted_price }}/م بدلا من <del> {{ $product->price }}جم</del> </span>
            
                    {{ $product->description }}
                
                <button onclick="addtoChose()"  class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
            </div>
        </div>
    
    
    
    </div>    
    </div>    
    </div>
@include('home.inc.footer')