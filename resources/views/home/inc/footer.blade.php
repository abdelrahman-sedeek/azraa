<!-- footer -->
<!-- footer -->
<footer class="footer">
    <div class="container">

        <div class="top_foot">
            <div class="row">

                <div class="col-lg-4">
                    <ul class="links">
                        <h3>روابطنا</h3>
                        <li> <a href="./index.html">الرئيسيه</a> </li>
                        <li> <a href="./categories.html">التصنيفات</a> </li>
                        <li> <a href="./categories.html">المنتجات</a> </li>
                        <li> <a href="./Cart.html">العربه</a> </li>
                        <li> <a href="./contact_us.html">تواصل معنا</a> </li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <ul class="sochial">
                        <li> <a href="#"><i class="fa-brands fa-linkedin"></i></a> </li>
                        <li> <a href="#"><i class="fa-brands fa-instagram"></i></a> </li>
                        <li> <a href="#"><i class="fa-brands fa-twitter"></i></a> </li>
                        <li> <a href="#"><i class="fa-brands fa-facebook-f"></i></a> </li>
                        <li> <a href="#"><i class="fa-brands fa-pinterest"></i></a> </li>
                        <li> <a href="#"><i class="fa-brands fa-youtube"></i></a> </li>
                        <li> <a href="#"><i class="fa-brands fa-google-play"></i></a> </li>
                    </ul>
                    <h4>أزرع</h4>
                    <p>اشتري بسعر الجمله</ح>
                </div>

                <div class="col-lg-4">
                    <a href="#"><img src="./img/foot.jpg" alt=""></a>

                </div>

            </div>
        </div>


        <div class="last_foot">
            <ul>
                <li>© جميع الحقوق محفوظة الى أزرع </li>
                <li> تم التصميم بواسطه <a href="#">EgyptCode</a> </li>
            </ul>
        </div>

    </div>
</footer>

<!-- scroll up -->
<span class="scroll_up"><i class="fa-solid fa-arrow-up"></i></span>


<div class="container_all_cart_sidbar">
<div class="cart_open_tool" id="cart_open_tool">
    <i class="fa-solid fa-cart-shopping"></i>
</div>

<div class="cart_sidbar" id="cart_sidbar">

    <div class="intro_CArt">
        <h2>عربه التسوق</h2>
        <div class="" id="close_cart">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>

  


    <div class="row_In_Cart" id="cartContainer">
     
    </div>

<a class="add-to-cart mb-3 text-center" href="{{ route('showCart') }}"> عربه التسوق </a>

</div>
</div>

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
            <form  id="addToCartForm" >
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

    <button type="submit" onclick="validatePopUpForm()"  id="add-to-cart-btn"   class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
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
<script src="{{asset('/js/cart.js')}}"></script>
<script type="text/javascript">
   
    </script>

<script>
    $(document).ready(function () {
    $('#search-input').on('keyup', function () {
        var search = $(this).val();
        
        $.ajax({
            type: 'GET',
            url: '{{URL::to('/search-category')}}',
            data: { search: search 
            
            },

            success: function (data) {
                // Update the UI with the search results
                console.log('hi');
                $('#search-results').html(data.output);
            },
            error: function (error) {
                console.log( data.output);
            }
        });
    });
});

        
        
        
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
@livewireScripts
</body>
</html>