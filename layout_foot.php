   </div>
            <!-- /row -->

        </div>
        <!-- /container -->

        <!-- jQuery library -->
        <script src="libs/js/jquery.min.js"></script>
        <!-- bootstrap JavaScript -->
        <script src="libs/js/bootstrap.min.js"></script>
         <script>
$(document).ready(function(){
    // add to cart button listener
    $('.add-to-cart-form').on('submit', function(){
 
        // info is in the table / single product layout
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
 
        // redirect to add_to_cart.php, with parameter values to process the request
        window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
        return false;
    });
});
</script>
        


 
</body>
</html>