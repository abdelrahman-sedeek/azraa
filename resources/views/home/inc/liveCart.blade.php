<div class="container_all_cart_sidbar">
    <div class="cart_open_tool" id="cart_open_tool">
        <i class="fa-solid fa-cart-shopping"></i>
    </div>

    <div class="cart_sidbar" id="cart_sidbar">

        <div class="intro_CArt">
            <h2>عربه التسوق</h2>
            <div class="" id="close_cart">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>

    @foreach ($cartItems as $product )
    
        <div class="row_In_Cart" id="cartContainer">
            <div class="container">
                <div class="row sm_style">
                    <hr>
                    <div class="col box_row_cart">
                        <form action="{{ route('deleteCart',['id'=>$product->id]) }}" method="post">
                            @csrf
                            <button  type="submit" class="delete-item btn" data-item-id="{{ $product->id }}"><i class="fa-solid fa-trash-can mx-3"></i></button>
                        </form>
                                
                    </div>

                    <div class="col box_row_cart">
                        <h5>{{ $product->name }}</h5>
                    </div>
                    <div class="col ">
                        <div class="Qunte">
                            
                            <h6> الكمية: {{ $product->quantity }} </h6>
                        
                        </div>
                        <hr>
                        <h6 class="total_CArt">{{ $product->discounted_price }}ج/م</h6>
                    </div>

                    <div class=" col ">
                        <img src="{{ asset(''.$product->image) }}" alt="">
                    </div>


                    <hr>
                </div>
            </div>
        </div>
    @endforeach

    <a class="add-to-cart mb-3 text-center" href="{{ route('showCart') }}"> عربه التسوق </a>

</div>
</div>