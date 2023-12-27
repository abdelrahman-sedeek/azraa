@include('home.inc.head')
<!-- intro section -->
<section class="intro_sections">
    <div class="container">
        <h1>العربه</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="./index.php">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="./Cart.php">العربه</a> </li>
        </ul>
    </div>
</section>


<div class="cart ">
    <div class="container">
       <?php
            $price=0;
            $discount=0;
            $total=0;
        ?>
         {{-- @if(Session::has('message'))
         <div class="alert alert-success" role="alert">
             {{ Session::get('message') }}
         </div>
         @endif --}}
         @if(!$cartItems->isEmpty())
         
        @foreach ($cartItems as $item )

            <div class="row item"  
                data-product-id="{{ $item->main_pro_id }}"
                data-product-branch-id="{{ $item->product_id }}"
                data-product-name="{{ $item->name }}"
                data-product-image="{{ asset('' . $item->image) }}"
                data-product-price="{{ $item->price }}"
                data-product-discounted-price="{{ $item->discounted_price }}"
                data-product-unit="{{ $item->unit }}"
                data-product-discrption="{{ $item->description }}"
                data-product-quantity="{{ $item->total_allowed_quantity }}"
                data-product-stock="{{ $item->stock}}"
                data-product-measurement="{{ $item->measurement}}">

            <?php
            $price += $item->price * $item->quantity;
            $discount += ($item->price - $item->discounted_price)*$item->quantity; 
            $total +=  $item->discounted_price *$item->quantity;
            $realStock=$item->stock /$item->measurement;
            $finalStock=0;
            if($realStock<=$item->total_allowed_quantity)
                {
                    $finalStock = $realStock;
                }
            else {
                $finalStock = $item->total_allowed_quantity;
            }
            ?>
                <div class="col cart_page_contant">
                        <img src="{{ asset(''.$item->image) }}" alt="">
                </div>

                <div class="col cart_page_contant">
                        <h4> {{ $item->name }}</h4>
                </div>

                <div class="col cart_page_contant">
                    <div class="Qunte">
                         
           
                        <li class="product_Quntity">
                            <form class="updateQuantityForm">
                                {{-- <input type="hidden" id="product_branches_id" name="main_pro_id" value="{{$item->main_pro_id }}"> --}}
                                <input type="hidden"id="cart_id" name="product_id" value="{{ $item->id }}">
                                <input type="hidden" id="final-stock{{ $item->id }}" name="final-stock" value="{{$finalStock }}">
                                <a type="button" onclick="up" value="{{ $item->id }} id="up{{ $item->id }}"  >+</a>
                                <input type="number"  min="1" name='quantity' value="{{ $item->quantity }}"  id="quantityCart{{$item->id}}">    
                                <a type="button" value="{{ $item->id}}" id="down" >-</a>
                                <p id="cart-message{{ $item->id }}" style="color: red;"></p> 

                            </form>
                        </li>
                    </div>
                </div>

                <div class="col cart_page_contant">
                    {{ $item->discounted_price * $item->quantity}}ج/م
                </div>
                <div class="col cart_page_contant">
                    <form style="display: inline" action="{{ route('deleteCart',['id'=>$item->id]) }}" method="POST">
                        @csrf
                       

                        <button type="submit" class=""> <i class="fa-solid fa-trash-can"></i> </button>
                    </form>
                </div>
                <div class="col cart_page_contant">
                    <button type="button" class="btn " data-item-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-pen mx-3"></i></button>

                </div>
                       


            </div>
        @endforeach
    </div>    
</div>

<section class="supTotal">
    <div class="container">
        <div class="row ">
            <div class="">
                <h3>اجمالي الحساب</h3>
                    <div class="row">
                        <div class="col cart_total_contant">
                            <form action="{{ route('addOrder') }}" method="post">
                            @csrf
                            <h4> الحساب</h4>
                            <h5>{{ $price }}ج/م</h5>
                            <input type="hidden" name="price" value="{{ $price }}">
                        </div>
                        <div class="col cart_total_contant">
                            <h4>التوصيل</h4>
                            <h5>مجانا</h5>
                        </div>
                  
                        <div class="col cart_total_contant">
                            <h4>خصم</h4>
                            <h5>{{ $discount }}ج/م</h5>
                        </div>

                        <div class="col cart_total_contant">
                            <h4>الاجمالي</h4>
                            <h5>ج/م{{ $total }}</h5>
                            <input type="hidden" name="total" value="{{ $total }}">
                        </div>
                    </div>
                <button  class="add-to-cart" >اكمل الطلب</button>
            </form>
            </div>
            @else
             
            <div class="col-md-12 text-center m-5" style="padding: 150px">
                <h1>لا يوجد منتجات</h1>
            </div>
            @endif



        </div>
    </div>

</section>
@include('home.inc.footer')   
@include('home.inc.liveCart')
@include('home.inc.popUp')