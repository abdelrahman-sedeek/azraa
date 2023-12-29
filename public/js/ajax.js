var quantityElement = document.getElementById('quantity');
var currentQuantity = parseInt(quantityElement.innerText);
var quantityElement = document.getElementById('quantity');
var realStock;
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
        var CartId= $(this).data('cart-id');
        updatePopupCard(productId,productBranchId, productName, productImage, productPrice, productDiscountedPrice, productUnit,productDiscrption,stock,measurement,alowedQuantity);
        // updateQuantity( stock);
        updatePreviousModal(productId, productBranchId, productName, productImage, productPrice, productDiscountedPrice, productUnit, productDiscrption, stock, measurement, alowedQuantity,CartId);
        
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
        console.log('stock',stock);
        
        console.log('alowedQuantity',alowedQuantity);
        
        if(finalStock<=alowedQuantity){
            console.log('finalStock',finalStock);
           
            realStock= finalStock 
        }
        else{
           
            realStock= alowedQuantity
        }
        $('#quantity').attr('max',realStock)
        $('#stock').text('المتاح: '+realStock);
        $('.popup-card').show();

    }

    function updatePreviousModal(productId, productBranchId, name, image, price, discountedPrice, unit, productDiscrption, stock, measurement, alowedQuantity,CartId) {

        $('.product_detals h3').text(name);
        $('.right_side h5').text('بعد الخصم:'+ discountedPrice);
        $('.right_side span del').text(price);
        $('.unit').text('الوحدة:'+ unit);
        $('.product_id').val(productId);
        $('.product_branches_id').val(productBranchId);
       
        var finalStock;
        finalStock =stock / measurement;
        
        console.log('alowedQuantity',alowedQuantity);
        
        if(finalStock<=alowedQuantity){
            console.log('finalStock',finalStock);
           
            realStock= finalStock 
        }
        else{
           
            realStock= alowedQuantity
        }
        $('#quantity-update').attr('max',realStock)
        $('#stock-update').text('المتاح: '+realStock);
    }

});
function dispalyMessage(message){
    $('#error-message').text(message).fadeIn(1000).delay(1000).fadeOut(500);
    setTimeout(function () {
        $('#add-to-cart-btn').prop('disabled', false);
    }, 1000);
    
};
function validatePopUpForm() {


    let x = document.getElementById("quantity").value;
    let max = document.getElementById("quantity").max;
    console.log(max)
    
    message ='المخزون غير كافي '
    if (x > max) {
        dispalyMessage(message);
      
    }
    else{

        $.ajax({
            type: 'POST',
            url: 'add-to-cart',
            data: $('#addToCartForm').serialize(),
            success: function(response) {
                // Handle success
                $('#add-message').text(response.message).fadeIn(1000).delay(1000).fadeOut(500);
                $('#error-message').text('');
                $('#add-to-cart-btn').prop('disabled', true);
    
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
}

function validatePopUpFormUpdate(){
    let x = document.getElementById("quantity-update").value;
    let max = document.getElementById("quantity-update").max;
    console.log(max)
    
    message ='المخزون غير كافي '
    if (x > max) {
        dispalyMessage(message);
      
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

    
    function updateQuantity(increment) {
        var currentQuantity = parseInt($(`#quantityCart`+cartId).val());
        console.log(currentQuantity);
        var newQuantity = currentQuantity + increment;

     
        newQuantity = Math.max(1, newQuantity);

         
       var finalQuantity= $(`#quantityCart`+cartId).val(newQuantity);
        // Check if the value has changed
        if (newQuantity !== originalQuantity) {
            if(allowedStock<newQuantity){
                var errorMessage = 'المخزون غير كافي';
            $('#cart-message'+cartId).text(errorMessage).fadeIn(1000).delay(1000);
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


    