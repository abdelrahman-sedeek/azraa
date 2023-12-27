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
    
        <div class="row_In_Cart item " id="cartContainer"
                        data-product-id="{{ $product->main_pro_id }}"
                        data-product-branch-id="{{ $product->product_id }}"
                        data-product-name="{{ $product->name }}"
                        data-product-image="{{ asset('' . $product->image) }}"
                        data-product-price="{{ $product->price }}"
                        data-product-discounted-price="{{ $product->discounted_price }}"
                        data-product-unit="{{ $product->unit }}"
                        data-product-discrption="{{ $product->description }}"
                        data-product-quantity="{{ $product->total_allowed_quantity }}"
                        data-product-stock="{{ $product->stock}}"
                        data-product-measurement="{{ $product->measurement}}"
                        data-cart-id="{{ $product->id }}" >
            <div class="container">
                <div class="row sm_style">
                    <hr>
                    <div class="col box_row_cart">
                        <form action="{{ route('deleteCart',['id'=>$product->id]) }}" method="post">
                            @csrf
                            <button  type="submit" class="delete-item btn" data-item-id="{{ $product->id }}"><i class="fa-solid fa-trash-can "></i></button>
                        </form>
                         {{-- <button onclick="addtoChose()"   class=" btn" data-item-id="{{ $product->id }}"><i class="fas fa-pen mx-3"></i></button> --}}
                         <button type="button" class="btn " data-item-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-pen mx-3"></i></button>
                                
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