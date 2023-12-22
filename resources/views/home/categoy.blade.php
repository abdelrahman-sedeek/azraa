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
                  
                        <input id="search-input" type="text" name="search" placeholder="ابحث عن منتج">
                        {{-- <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> --}}
                 
                </div>
        <div class="row">
            <div id="search-results"></div>
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