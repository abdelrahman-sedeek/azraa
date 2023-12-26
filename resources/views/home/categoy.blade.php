@include('home.inc.head')
<!-- intro section -->
<section class="intro_sections">
    <div class="container">
        <h1>التصنيفات</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="{{ route('index') }}">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="./index.php">{{ $category->name }}</a> </li>
        </ul>
    </div>    
    </section>
    <section class="S2_home">
        <div class="container">
        <div class="top_sections">
            <h3> التصنيفات الفرعيه </h3>
        
            
        </div>
    @if ( $subcategories!=null)
    <div class="owl-carousel owl-theme" id="slider_1">
        @foreach ($subcategories as $subcategory)
            <div class="item">
                <a  style="cursor: pointer;" href="{{ route('subcategory', ['category_id'=>$category->id,'subcategory_id' => $subcategory->id]) }}">
                    <img src="{{ asset($subcategory->image) }}" alt="">
                    <h3>{{ $subcategory->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>


       



    </div>
    @endif
            
        </div>
    </section>






    <section class="Categorie product">
        <div class="container">
                 <div class="intro">
                    <form method="GET">
                        <input  id="search-input"  type="text" name="search" placeholder="ابحث عن منتج">
                        <input hidden id='cateogry-id-input'value="{{ $category->id }}" >
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>

                
            <div class="row" id="all-category-products">
                @if ($products->isEmpty())
                    
                    <div class="col-md-12 text-center m-5">
                        <h1>لا يوجد عروض</h1>
                    </div>
                @else
                    @foreach ($products as $product) 
                        
                    <div class="ssaa ">
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
                            
                                
                                    <img src="{{ asset(''.$product->image) }}" alt="">
                                    <a href="{{ route('single_product',['product_id'=>$product->product_id]) }}">{{ $product->name }}</a>
                                    <span> {{ $product->discounted_price }}جم بدلا من <del>{{ $product->price }}جم</del> </span>
                                    <button onclick="addtoChose()"   class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                            
                            </div>
                         </div>
                    @endforeach
                @endif
                {{-- <div id="search-results"></div> --}}
                    @if ($products->total() > 10)
                    <div class="Pagination">
                    {{ $products->links('pagination::custom') }} 
                    </div>
                    
                    @endif
                
                {{-- @livewire('productfilter', [ 'category' => $category->id]) --}}

        </div>    
    </div>    
</section>







@include('home.inc.footer')
@include('home.inc.liveCart')
@include('home.inc.popUp')