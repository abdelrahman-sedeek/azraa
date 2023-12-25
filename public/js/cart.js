$(document).ready(function() {
  
//   GetData
   
    function getData(){
        $.ajax({
            type: 'GET',
            url: 'show-cart-ajax', 
            dataType: 'json',
            success: function(response) {
            
                displayData(response);
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    
        
        function displayData(response) {
           
            response.forEach(function(item) {
                // Create a new row for each item
                $('#cartContainer').append(
                    '<div class="container">' +
                        '<div class="row sm_style">' +
                            '<hr>' +
                            // Update the content of the new row with item data
                            '<div class="col box_row_cart">' +
                            '<a href="#" class="delete-item" data-item-id="' + item.id + '"><i class="fa-solid fa-trash-can mx-3"></i></a>' +
                            '<a value=" '+item.id+' href=""><i class="fa-solid fa-pen"></i></a>' +
                            '</div>' +
                            '<div class="col box_row_cart">' +
                                '<h5 class="product-name">' + item.name + '</h5>' +
                            '</div>' +
                            '<div class="col ">' +
                                '<div class="Qunte">' +
                                    // '<button>+</button>' +
                                    '<h6 class="quantityCard m-auto ">' + item.quantity + '</h6>' +
                                    // '<button class="">-</button>' +
                                '</div>' +
                                '<hr>' +
                                '<h6 class="total_CArt product-price ">' + item.price + '</h6>' +
                            '</div>' +
                            '<div class=" col ">' +
                                '<img class="product-image" src="' + item.image + '" alt="">' +
                            '</div>' +
                            '<hr>' +
                        '</div>' +
                    '</div>'
                );
            });
            $('.delete-item').click(function(event) {
                event.preventDefault();
                var itemId = $(this).data('item-id');
                console.log(itemId);
                deleteItem(itemId);
            });
        }
    }

    function deleteItem(itemId) {
        $.ajax({
            type: 'POST',
            url: 'delete-cart-ajax/'+itemId,
            data: { id: itemId }, 
            success: function(response) {
                
                console.log('Item deleted successfully');
               
                $('#cartContainer').empty();
                getData();
            },
            error: function(error) {
                console.error('Error deleting item:', error);
            }
        });
    }
    
    getData()
    $('#addToCartForm').submit(function(event) {
        event.preventDefault();
        $('#cartContainer').empty();
        getData();
    });

    
    /** start of delete one product  */
    $('.delete-item').click(function(event) {
        event.preventDefault();
        var itemId = $(this).val();
        console.log(itemId);
      
    });

 
});