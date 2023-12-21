@include('home.inc.head')

<section class="intro_sections">
    <div class="container">
        <h1>العروض</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="{{ route('index') }}">الرئيسيه</a> </li>
            <li> / </li>
            <li> العروض </li>
            
        </ul>
    </div>    
    </section>
    
        
   






    <section class="Categorie product">
        <div class="container">
                 <div class="intro">
                    <form action="{{ route('allOffer') }}" method="GET">
                        
                        <input type="text" name="search" placeholder="ابحث عن تصنيف">
                        <button type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
        <div class="row">
            @if ($offers->isEmpty())
                
                <div class="col-md-12 text-center m-5">
                    <h1>لا يوجد عروض</h1>
                </div>
            @else
                @foreach ($offers as $product) 
                    
                    <div class="ssaa ">
                        <div class="box item" 
                        data-product-id="{{ $product->id }}"
                        data-product-name="{{ $product->name }}"
                        data-product-image="{{ asset('' . $product->image) }}"
                        data-product-price="{{ $product->price }}"
                        data-product-discounted-price="{{ $product->discounted_price }}"
                        data-product-unit="{{ $product->unit }}"
                        data-product-discrption="{{ $product->description }}">
                          
                            
                                <img src="{{ asset(''.$product->image) }}" alt="">
                                <a href="{{ route('single_product', ['product_id' => $product->id]) }}">{{ $product->name }}</a>
                                <span> {{ $product->discounted_price }}جم بدلا من <del>{{ $product->price }}جم</del> </span>
                                <button onclick="addtoChose()"   class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                         
                        </div>
                    </div>    
                @endforeach
            
                @if ($offers->total() > 10)
                <div class="Pagination">
                {{ $offers->links('pagination::custom') }} 
                </div>
                
                @endif
            
            
            @endif

            {{-- @livewire('productfilter', [ 'category' => $category->id]) --}}







     </div>    
</div>    
</section>
@include('home.inc.footer')