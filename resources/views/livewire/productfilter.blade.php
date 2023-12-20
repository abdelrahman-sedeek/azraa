
<div>
    
    <div class="ssaa ">
                    @foreach ($products as $product) 
                    <div class="box">
                        <img src="{{ asset(''.$product->image) }}" alt="">
                        <a href="./single_product.php">{{ $product->name }}</a>
                        <span> {{ $product->discounted_price }}جم بدلا من <del>{{ $product->price }}جم</del> </span>
                        <button onclick="addtoChose()"  class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                    </div>
                    
                    @endforeach
                
                </div>    
         {{ $products->links('pagination::custom') }} 
</div>


         

