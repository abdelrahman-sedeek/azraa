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
  
        
   






    <section class="Categorie product">
        <div class="container">
                 <div class="intro">
                     <input type="text"  id="search" name="search" placeholder="ابحث عن تصنيف">
                    {{-- <form action="{{ route('allCategory') }}" method="GET">
                        
                        <button type="submit" ><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form> --}}
                </div>
                <div class="row" id="offer-table"></div>
        <div class="row" id="main-table">
            @if ($allCategory->isEmpty())
                
                <div class="col-md-12 text-center m-5">
                    <h1>لا يوجد تصنيفات</h1>
                </div>
            @else
                @foreach ($allCategory as $product) 
                @php
                $finalName = str_replace(['-', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'], '', $product->name );
                 @endphp
                    <div class="ssaa ">
                        <div class="box">
                          
                            
                                <img src="{{ asset(''.$product->image) }}" alt="">
                              
                                <a href="{{ route('category', ['category_id' => $product->id]) }}">{{ $finalName  }}</a>
                                
                         
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
@include('home.inc.liveCart')
@include('home.inc.popUp')