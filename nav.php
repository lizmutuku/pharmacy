<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container">
        <a class="navbar-brand" href="#">My  Pharmacy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRESCRIPTION</a>
                </li>
                <li class="nav-item">
                    
                      <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                            <a href="cart.php">
                              <?php
                                      //count the products in the Cart
                                      $cart_item = new CartItem($db);
                                      $cart_item->user_id=1; //default to user iwth ID "1" for now
                                      $cart_count = $cart_item->count();
                                  ?>
                                  Cart <span class="badge" id="comparison-count"><?php echo $cart_count ?></span>
                            </a>
                        </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
