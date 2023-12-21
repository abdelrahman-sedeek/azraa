@include('home.inc.head')
<!-- S1 home -->
<section class="S1_home">
    <div class="container">
        <h1>ازرع للمنتجات</h1>
        <p>وداعا ل غلاء الاسعار اسعار الجمله توصلك لحد بيتك</p>
        <a href="./categories.php"> تسوق معنا </a>
    </div>    
    </section>
    <!-- S2 home Categories-->
    <section class="S2_home">
    <div class="container">
        <div class="top_sections">
            <h3> التصنيفات </h3>
    
            <a href="{{ route('allCategory') }}">شاهد المزيد</a>
        </div>
        <div class="owl-carousel owl-theme" id="slider_1">
           @foreach ($category as $cat )
            <div class="item">
                <a href="{{ route('category', ['category_id' => $cat->id]) }}">
                    <img src="{{ asset(''.$cat->image) }}" alt="">
                    <h3>{{ $cat->name }}</h3>
                </a>
            </div>
               
           @endforeach
    
    
           
    
    
        </div>
    </div>
    </section>
    <!-- S3 home  Best offers-->
    <section class="S4_home product">
    <div class="container">
        <div class="top_sections">
            <h3> العروض </h3>
        
            <a href="{{ route('allOffer') }}">شاهد المزيد</a>
        </div>
        <div class="owl-carousel owl-theme" id="slider_2">
        @foreach ($recentoffers as $product )
            <div class="item" 
                data-product-id="{{ $product->id }}"
                data-product-name="{{ $product->name }}"
                data-product-image="{{ asset('' . $product->image) }}"
                data-product-price="{{ $product->price }}"
                data-product-discounted-price="{{ $product->discounted_price }}"
                data-product-unit="{{ $product->unit }}" 
                data-product-discrption="{{ $product->description }}">
                <div class="box">
                    <img src="{{ asset(''.$product->image) }}" alt="">
                    <a href="{{ route('single_product',['product_id'=>$product->id]) }}">{{ $product->name }}</a>
                    <span> {{ $product->discounted_price }} جم بدلا من <del>{{ $product->price }} جم</del> </span>
                    <button onclick="addtoChose()" class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                </div>
            </div>
        @endforeach
           
        
        
            
        
        
        
        </div>
    </div>    
    </section>
    
    
    <!-- S3 home  New added-->
    <section class="S5_home S4_home product">
        <div class="container">
        <div class="top_sections">
            <h3> المضاف حديثا </h3>
        
            <a href="{{ route('recentAdded') }}">شاهد المزيد</a>
        </div>
            <div class="owl-carousel owl-theme" id="slider_3">
                
                @foreach ($recentProducts as $product )
               
                    <div class="item"   
                        data-product-id="{{ $product->id }}"
                        data-product-name="{{ $product->name }}"
                        data-product-image="{{ asset('' . $product->image) }}"
                        data-product-price="{{ $product->price }}"
                        data-product-discounted-price="{{ $product->discounted_price }}"
                        data-product-unit="{{ $product->unit }}"
                        data-product-discrption="{{ $product->description }}">
                    
                    <div class="box">
                        
                        <img src="{{ asset('' .$product->image ) }}" alt="">
                        <a href="./single_product.php">{{ $product->name }}</a>
                            <span> {{ $product->price }}جم بدلا من <del>{{ $product->discounted_price }}جم</del> </span>
                            <button onclick="addtoChose()"   class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                        </div>
                    </div>
        
                    
                @endforeach
    
               
    
    
    
            </div>
        </div>
    </section>
    @include('home.inc.footer')