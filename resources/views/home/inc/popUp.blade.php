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
                    <form  id="addToCartForm">
                        
                        <ul>
                            <li class="product_Quntity">
                                <a type="button" id="up">+</a>
                                <input type="number" name='quantity' value="1" id="quantity">
                                <a type="button" id="down">-</a>
                            </li>
                        </ul>
                    
                        <input id="product_branches_id" value="" hidden name='product_id'>
                        <input id="product_id" value="" hidden name='main_pro_id'>
                    </div>
                    <p id="error-message" style="color: red;"></p>
                    <p id="add-message" style="color: green;" class="mt-3"></p>
                
                    <div class="modal-footer">
                        <button type="button" id="add-to-cart-btn" onclick="validatePopUpForm()" class="add-to-cart">اضف الي العربه <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </form>
    </div>
    </div>
    
    
    <div class="clear_js_vars" id="Login">
        <div class="" id="lost_pass"></div>
        <div class="" id="Git_Back"></div>
    </div>
    
    {{-- UPDATE MODAL --}}
 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="product_detals">
                    <h3 class="modal-title fs-5" id="product-name"></h3>

                </div>
            </div>
            <div class="modal-body">
                <div class="product_chose_container">
                    <ul class="product_chose">
                        <li class="right_side">
                            <h5 ></h5>
                            <span> قبل الخصم : <del></del> </span><br>
                            <span class='unit'> </span><br>
                            <span id="stock-update"> </span><br>
                        </li>
                        <form  action="{{ route('updateCart') }}" method="POST" id="update-cart" >
                            @csrf
                        
                            <li class="product_Quntity">
                                <label for="">الكمية:</label><br>
                                <input type="number"  class="quantity w-25"  name='quantity' value="1"  id="quantity-update">
                                
                             
                            </li>
                        </ul>
                    
                        
                        <input class="product_branches_id" value="" hidden  name='product_id'>
                        <input class="product_id"         value="" hidden   name='main_pro_id'>
                        <p id="error-message" style="color: red;"></p>   
                        <p id="add-message" style="color: green;" class="  mt-3"></p>
                
                </div> 
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">غلق</button> --}}
                <button type="submit"   id="add-to-cart-btn" onclick="validatePopUpFormUpdate()"   class="add-to-cart "> حفظ التعديلات</button>
            </div>
        </form>  
          </div>
        </div>
      </div>
 
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/js/all.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/search.js')}}"></script>
    <script src="{{asset('/js/ajax.js')}}"></script>
  

    
    <script>
      
      function validatePopUpForm() {


        let x = document.getElementById("quantity").value;
        let max = document.getElementById("quantity").max;
        console.log(x)

        let Add_to_Cart_chose_container = document.getElementById("Add_to_Cart_chose_container");

            $.ajax({
                type: 'POST',
                url: '{{ route('addToCart') }}',
                data: $('#addToCartForm').serialize(),
                success: function(response) {
                    // Handle success
                    $('#add-message').text(response.message).fadeIn(1000).delay(1000).fadeOut(500);
                    $('#error-message').text('');
                    $('#add-to-cart-btn').prop('disabled', true);
                        setTimeout(function() {
                         Add_to_Cart_chose_container.classList.remove("Show_Cart_Chose");
                        }, 2000);   
                    // Enable the button after 3 seconds
                    setTimeout(function() {
                        $('#add-to-cart-btn').prop('disabled', false);
                    }, 3000);
                },
                error: function(xhr) {
                    // Handle error
                    $('#error-message').text(xhr.responseJSON.error).fadeIn(1000).delay(1000).fadeOut(500);
                    $('#add-message').text('');
                }
            });
         }
        
            
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
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value = $(this).val();

  
        if ($value.trim() === '') {
            // If empty, hide the div
            $('#offer-table').hide();
            $('#main-table').show();
            return;
        }
        else{
            // If not empty, show the div
            $('#offer-table').show();
            $('#main-table').hide();
       
        $.ajax({
            type: 'get',
            url: '{{URL::to('search')}}',
            data: {'search': $value},
            success: function(data){
                // Show the div and update its content
                $('#offer-table').show().html(data);
                
            }
        });
        }
    });
</script>

       
    </body>
    </html>