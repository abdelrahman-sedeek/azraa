@include('home.inc.head')
<!-- intro section -->
<section class="intro_sections">
    <div class="container">
        <h1>التصنيفات</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="./index.php">الرئيسيه</a> </li>
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
                <a wire:click="selectSubcategory({{ $subcategory->id }})" style="cursor: pointer;">
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
                    <input type="text" placeholder="ابحث عن منتج">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
        <div class="row">
            @foreach ($products as $product) 
                
                <div class="ssaa ">
                    <div class="box">
                        <img src="{{ asset(''.$product->image) }}" alt="">
                        <a href="./single_product.php">{{ $product->name }}</a>
                        <span> {{ $product->discounted_price }}جم بدلا من <del>{{ $product->price }}جم</del> </span>
                        <button onclick="addtoChose()"  class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                    </div>
                </div>    
            @endforeach

            {{-- @livewire('productfilter', [ 'category' => $category->id]) --}}







            <div class="Pagination">
              {{ $products->links('pagination::custom') }} 
            </div>
     </div>    
</div>    
</section>







@include('home.inc.footer')