@include('home.inc.head')
<section class="intro_sections">
    <div class="container">
        <h1>التصنيفات</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="{{ route('index') }}">الرئيسيه</a> </li>
            <li> / </li>
            @php
                    $finalName = str_replace(['-', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'], '', $category->name );
            @endphp
            <li> <a href="{{ route('category',['category_id'=>$category->id]) }}">{{ $finalName }}</a> </li>
            
            <li> / </li>
            <li> <a href="#">{{ $subcategory->name }}</a> </li>
        </ul>
    </div>    
    </section>
    <section class="S2_home">
        <div class="container">
        
   
            
        </div>
    </section>






    <section class="Categorie product">
        <div class="container">
                 <div class="intro">
                    <input   id="search"  type="text" name="search" placeholder="ابحث عن منتج">
                  
                </div>
                <div class="row" id="offer-table"></div>
        <div class="row" id="main-table">
            @if ($products->isEmpty())
                
                <div class="col-md-12 text-center m-5">
                    <h1>لا يوجد منتجات</h1>
                </div>
            @else
                @foreach ($products as $product) 
                    
                    <div class="ssaa ">
                        <div class="box item"
                        d data-product-id="{{ $product->product_id }}"
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
                        
                            <img src="{{ asset(''.$product->image) }}" alt="">
                            <a href="{{ route('single_product',['product_id'=>$product->product_id]) }}">{{ $product->name }}</a>
                            <span> {{ $product->discounted_price }}جم بدلا من <del>{{ $product->price }}جم</del> </span>
                            <button onclick="addtoChose()"   class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                        </div>
                    </div>    
                    {{-- @dd(count($products)); --}}
                @endforeach
                    @if ($products->total() > 10)
                        <div class="Pagination">
                        {{ $products->links('pagination::custom') }} 
                        </div>
                        
                    @endif
            
            
            @endif

            {{-- @livewire('productfilter', [ 'category' => $category->id]) --}}







     </div>    
</div>    
</section>
@include('home.inc.footer')
@include('home.inc.liveCart')
@include('home.inc.popUp')