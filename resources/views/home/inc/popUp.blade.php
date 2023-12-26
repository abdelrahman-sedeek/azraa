<div class="Add_to_Cart_chose_container" id="Add_to_Cart_chose_container">
    <div class="Add_to_Cart_chose">
        <div class="close_chose" id="close_chose">
            <i class="fa-solid fa-xmark"></i>
        </div>    
    
        <div class="box">
            <div class="product_detals">
                <h3></h3>
                
                <div class="droduct_d_img">
                <img src="" alt="">
                <ul class="discription">
                   
                </ul>
                </div>
            </div>
    
        <div class="product_chose_container">
            <ul class="product_chose">
                <li class="right_side">
                    <h5></h5>
                    <span> قبل الخصم : <del></del> </span>
                    <span id='unit'> </span>
                    <span id="stock"> </span>
                </li>
                <form  action="{{ route('addToCart') }}" method="POST" id="addToCartForm" >
                    @csrf
                
                    <li class="product_Quntity">
                        <a type="button" id="up"  >+</a>
                        <input type="number"    name='quantity' value="1"  id="quantity">
                        
                        <a type="button" id="down" >-</a>
                    </li>
                </ul>
               
                
                <input id="product_branches_id" value="" hidden  name='product_id'>
                <input id="product_id"         value="" hidden   name='main_pro_id'>
                <p id="error-message" style="color: red;"></p>   
                <p id="add-message" style="color: green;" class="  mt-3"></p>
        
            </div>   
            
    
        <button type="submit"   id="add-to-cart-btn" onclick="validatePopUpForm()"   class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
        </form>
        </div>
    </div>
    </div>
    
    
    <div class="clear_js_vars" id="Login">
        <div class="" id="lost_pass"></div>
        <div class="" id="Git_Back"></div>
    </div>
    
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/all.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/search.js')}}"></script>
    <script src="{{asset('/js/ajax.js')}}"></script>
    {{-- <script src="{{asset('/js/cart.js')}}"></script> --}}
    <script type="text/javascript"></script>
    
    <script>
    //     $(document).ready(function () {
    //     $('#search-input').on('keyup', function () {
    //         var search = $(this).val();
            
    //         $.ajax({
    //             type: 'GET',
    //             url: '{{URL::to('/search-category')}}',
    //             data: { search: search 
                
    //             },
    
    //             success: function (data) {
    //                 // Update the UI with the search results
    //                 console.log('hi');
    //                 $('#search-results').html(data.output);
    //             },
    //             error: function (error) {
    //                 console.log( data.output);
    //             }
    //         });
    //     });
    // });
    
            
            
            
    $(document).ready(function(){
        $("#up").on('click', function(){
            var quantityElement = $("#quantity");
            quantityElement.val(parseInt(quantityElement.val()) + 1);
        });
    
        $("#down").on('click', function(){
            var quantityElement = $("#quantity");
            var currentValue = parseInt(quantityElement.val());
    
            // Check if the current value is greater than 1 before decreasing it
            if (currentValue > 1) {
                quantityElement.val(currentValue - 1);
            }
        });
    });
    
    </script>
    
    </body>
    </html>