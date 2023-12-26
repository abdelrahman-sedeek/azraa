$(document).ready(function() {
  
    var data;
   
    function getData(){
       
        $.ajax({
            type: 'GET',
            url: 'show-cart-ajax', 
            dataType: 'json',
            success: function(response) {
            
                data=response;
              
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    
        
        function displayData(data) {
           
            response.forEach(function(data) {
                // Create a new row for each item
                $('#cartContainer').append(
                    '<div class="container">' +
                        '<div class="row sm_style">' +
                            '<hr>' +
                            // Update the content of the new row with item data
                            '<div class="col box_row_cart">' +
                            '<a href="#" class="delete-item" data-item-id="' + data.id + '"><i class="fa-solid fa-trash-can mx-3"></i></a>' +
                            '<a value=" '+data.id+' href=""><i class="fa-solid fa-pen"></i></a>' +
                            '</div>' +
                            '<div class="col box_row_cart">' +
                                '<h5 class="product-name">' + data.name + '</h5>' +
                            '</div>' +
                            '<div class="col ">' +
                                '<div class="Qunte">' +
                                    // '<button>+</button>' +
                                    '<h6 class="quantityCard m-auto ">' + data.quantity + '</h6>' +
                                    // '<button class="">-</button>' +
                                '</div>' +
                                '<hr>' +
                                '<h6 class="total_CArt product-price ">' + data.price + '</h6>' +
                            '</div>' +
                            '<div class=" col ">' +
                                '<img class="product-image" src="' + data.image + '" alt="">' +
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
                displayData(data)
                console.log('Item deleted successfully');
               
                $('#cartContainer').empty();
               
            },
            error: function(error) {
                console.error('Error deleting item:', error);
            }
        });
    }
    
   
    
   
    
    /** start of delete one product  */
    $('.delete-item').click(function(event) {
        event.preventDefault();
        var itemId = $(this).val();
        console.log(itemId);
      
    });

    getData();
});