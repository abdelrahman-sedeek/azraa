$(document).ready(function() {
    // Function to handle live search
    
    $('#searchInput').on('keyup', function () {
        var searchQuery = $('#searchInput').val();
        var category_id =$('#cateogry-id-input').val();
        console.log('id'+category_id)
        console.log(searchQuery);
        function performLiveSearch() {
           
            // Make an AJAX request to the server to get live search results
            $.ajax({
                type: 'GET',
                url: '/search-category',
                data: { search: searchQuery, category_id: category_id },
                dataType: 'json',
                success: function(response) {
                    // Dynamically switch between the two sections
                    if (searchQuery) {
                        $('#all-category-products').hide();
                        displaySearchResults(response);
                        $('#search-results').show();
                    } else {
                        $('#search-results').hide();
                        $('#all-category-products').show();
                    }
                },
                error: function(error) {
                    console.log('Error performing live search:', error);
                }
            });
        }
    
        // Display search results
        function displaySearchResults(searchResults) {
            var searchResultsHtml = '';
            searchResults.forEach(function(result) {
                searchResultsHtml += `
                    <div class="box item" 
                        data-product-id="${result.product_id}"
                        data-product-name="${result.name}"
                        data-product-image="${result.image}"
                        data-product-price="${result.price}"
                        data-product-discounted-price="${result.discounted_price}"
                        data-product-unit="${result.unit}"
                        data-product-branch-id="${result.id}"
                        data-product-discrption="${result.description}"
                        data-product-quantity="${result.total_allowed_quantity}">
                        <img src="${result.image}" alt="">
                        <a href="{{ route('single_product',['product_id'=>$product->product_id]) }}">${result.name}</a>
                        <span>${result.discounted_price}جم بدلا من <del>${result.price}جم</del></span>
                        <button onclick="addtoChose()" class="add-to-cart"> اضف الي العربه <i class="fa-solid fa-cart-shopping"></i> </button>
                    </div>`;
            });
    
            $('#search-results').html(searchResultsHtml);
        }
    
        // Attach an event listener to the search input
        $('#searchInput').on('input', function() {
            performLiveSearch();
        });



    })
    
});