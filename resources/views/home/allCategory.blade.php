@include('home.inc.head')

<section class="intro_sections">
    <div class="container">
        <h1>التصنيفات</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="{{ route('index') }}">الرئيسيه</a> </li>
            <li> / </li>
            <li> التصنيفات </li>
            
        </ul>
    </div>    
    </section>
    <
        
   






    <section class="Categorie product">
        <div class="container">
                 <div class="intro">
                    <form action="{{ route('allCategory') }}" method="GET">
                        
                        <input type="text" name="search" placeholder="ابحث عن تصنيف">
                        <button type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
        <div class="row">
            @if ($allCategory->isEmpty())
                
                <div class="col-md-12 text-center m-5">
                    <h1>لا يوجد تصنيفات</h1>
                </div>
            @else
                @foreach ($allCategory as $product) 
                    
                    <div class="ssaa ">
                        <div class="box">
                          
                            
                                <img src="{{ asset(''.$product->image) }}" alt="">
                                <a href="{{ route('category', ['category_id' => $product->id]) }}">{{ $product->name }}</a>
                                
                         
                        </div>
                    </div>    
                @endforeach
            
                @if ($allCategory->total() > 10)
                <div class="Pagination">
                {{ $allCategory->links('pagination::custom') }} 
                </div>
                
                @endif
            
            
            @endif

            {{-- @livewire('productfilter', [ 'category' => $category->id]) --}}







     </div>    
</div>    
</section>


@include('home.inc.footer')