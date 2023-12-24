var quantityElement = document.getElementById('quantity');
var currentQuantity = parseInt(quantityElement.innerText);
var quantityElement = document.getElementById('quantity');
realStock=''
var addButton = document.getElementById('add-to-cart-btn');
var errorMessage = document.getElementById('error-message');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   
$(document).ready(function () {
           
    // Attach a click event handler to each product item
    $('.item').click(function () {
        // Retrieve product details  data attributes
        var productId = $(this).data('product-id');
        var productBranchId =  $(this).data('product-branch-id')
        var productName = $(this).data('product-name');
        var productImage = $(this).data('product-image');
        var productPrice = $(this).data('product-price');
        var productDiscountedPrice = $(this).data('product-discounted-price');
        var productUnit = $(this).data('product-unit');
        var productDiscrption = $(this).data('product-discrption');
        var alowedQuantity= $(this).data('product-quantity');
        var stock= $(this).data('product-stock');
        var measurement= $(this).data('product-measurement');
        updatePopupCard(productId,productBranchId, productName, productImage, productPrice, productDiscountedPrice, productUnit,productDiscrption,stock,measurement,alowedQuantity);
        // updateQuantity( stock);
       
        
    });

    // Function to update the pop-up card with product details
    function updatePopupCard(productId,productBranchId, name, image, price, discountedPrice,unit,productDiscrption,stock,measurement,alowedQuantity) {
        
        $('.product_detals h3').text(name);
        $('.product_detals img').attr('src', image);
        $('.discription').text(productDiscrption);
        $('.right_side h5').text('بعد الخصم: ' + discountedPrice);
        $('.right_side span del').text(price);
        $('#unit').text('الوحدة: ' + unit);
        $('#product_id').val(productId);
        $('#product_branches_id').val(productBranchId);
      
        var finalStock;
        finalStock =stock / measurement;
        // console.log('finalstock',measurement);
        
        console.log('alowedQuantity',alowedQuantity);
        
        if(finalStock<alowedQuantity){
            console.log('finalStock',finalStock);
            $('#quantity').attr('max',finalStock)
            realStock= finalStock 
        }
        else{
            $('#quantity').attr('max',alowedQuantity)
            realStock= alowedQuantity
        }
        $('#stock').text('المتاح: '+realStock);
        $('.popup-card').show();

    }

});



    function validatePopUpForm() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        console.log(csrfToken)
        var data = {
            quantity: $('#quantity').val(),
            main_pro_id: $('#product_id').val(),
            product_id: $('#product_branches_id').val(),
            // Add other data if needed
        };

        let x = document.getElementById("quantity").value;
        let max = document.getElementById("quantity").max;
        var message='';
        if (x > max) {
            message ='المخزون غير كافي '
            document.getElementById("error-message").innerHTML = message;
        console.log(data)
        }
        else
        {
            
                $('#addToCartForm').submit(function(e) {
                    e.preventDefault(); // Prevent the default form submission
            
                    console.log(data);
                    $.ajax({
                        type: 'POST',
                        url: 'add-to-cart',
                        data: data,
                    
                        success: function(response) {
                            $('#add-message')
                            .removeClass('alert-danger')  
                            .addClass('alert-success')  
                            .text(response)      
                            .fadeIn(1000)        
                            .delay(5000)                
                            .fadeOut(1000);   
                            $('#add-to-cart-btn').prop('disabled', true);

                            // Set a timeout to enable the button after 5 seconds
                            setTimeout(function () {
                                $('#add-to-cart-btn').prop('disabled', false);
                            }, 5000);
                        },
                        error: function(errorThrown) {
                            console.error('Error:', errorThrown);
                            console.log(data)
                        

                        }
    
                    });
                 });
        }


}
 
// update quantity
$(document).ready(function () {
    var cartId =$('#cart_id').val();
    var originalQuantity = $('#quantity').val();
    var allowedStock = $('#final-stock'+cartId).val();
    
    $('#up'+cartId).on('click', function (e) {
        console,log(cartId);
        e.preventDefault();
        updateQuantity(1);
    });

    $('#down'+cartId).on('click', function (e) {
        e.preventDefault();
        updateQuantity(-1);
    });

    // Your JavaScript code
    function updateQuantity(increment) {
        var currentQuantity = parseInt($(`#quantityCart`+cartId).val());
        console.log(currentQuantity);
        var newQuantity = currentQuantity + increment;

        // Ensure the quantity doesn't go below 1
        newQuantity = Math.max(1, newQuantity);

        // Update the input field with the new quantity
        
       var finalQuantity= $(`#quantityCart`+cartId).val(newQuantity);
        // Check if the value has changed
        if (newQuantity !== originalQuantity) {
            if(allowedStock<newQuantity){
                var errorMessage = 'المخزون غير كافي';
            $('#cart-message'+cartId).text(errorMessage).fadeIn(1000).delay(3000);
            }
            else{
                $('#cart-message'+cartId).fadeOut(100).delay(100);
                originalQuantity = newQuantity;
                sendUpdateRequest(finalQuantity,cartId);
            }
            
        }
        else
        {
            $('#cart-message'+cartId).fadeOut().delay(50);
        }
    }

    function sendUpdateRequest(finalQuantity,card_id) {
        var formData = {
            quantity: finalQuantity,
            id:card_id,
           
          
        };

        $.ajax({
            type: 'POST',
            url: 'update-cart', 
            data: formData,
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                // Handle error response
                console.error(error);
            }
        });
    }
});

// $('#down').on('click', function(){
//     value=$(this).val()
//     console.log(value)
    
//     var formData = {
//         // quantity: finalQuantity,
//         id:value,
       
      
//     };

//     $.ajax({
//         type: 'POST',
//         url: 'update-cart', 
//         data: formData,
//         success: function (response) {
//             console.log(response);
//         },
//         error: function (error) {
//             // Handle error response
//             console.error(error);
//         }
//     });
    


// })


// show cart


    