
    <!-- Default CSS -->
    

    </head>


<body class="home">
    <div class="page-wrapper">
        <!-- <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1> -->
        <!-- Start of Header -->
        <header class="header">
            <!-- <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Great Sales..</p>
                    </div>
                    <div class="header-right">
                        
                        <a href="<?php echo base_url(); ?>Menus/contact" class="d-lg-show">Contact Us</a>
                        <span class="divider d-lg-show"></span>
                        <a href="<?php echo base_url(); ?>Menus/becomesupplier" class="d-lg-show">Become A Supplier</a>
                         <a href="<?php echo base_url(); ?>Menus/my_account" class="d-lg-show">My Account</a> 
                        
                    </div>
                </div>
            </div> -->
            <!-- End of Header Top -->
            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="<?php echo base_url(); ?>" class="logo ml-lg-0">
                            <img src="<?php echo base_url(); ?>assets/images/great_logo.png" alt="logo" style="height: 78px; margin-left: 60px;" />
                        </a>
                        <form method="get" action="#"
                            class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="5">Furniture</option>
                                    <option value="6">Shoes</option>
                                    <option value="7">Sports</option>
                                    <option value="8">Games</option>
                                    <option value="9">Computers</option>
                                    <option value="10">Electronics</option>
                                    <option value="11">Kitchen</option>
                                    <option value="12">Clothing</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search in..."
                                required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                            </div>
                        </div>
                        <a class="signup d-xs-show" href="compare.html">
                            <i class="w-icon-account"></i>
                            <span class="compare-label d-lg-show">Sign In</span>
                        </a>

                         <!-- <a class="wishlist label-down link d-xs-show" href="wishlist.html">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                       
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <span class="cart-count">2</span>
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Beige knittedelas<br>tic
                                                runner shoes</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$25.68</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="<?php echo base_url(); ?>assets/images/cart/product-1.jpg" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Blue utility
                                                pina<br>fore
                                                denim dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$32.99</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="<?php echo base_url(); ?>assets/images/cart/product-2.jpg" alt="product" width="84"
                                                    height="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border show" data-visible="true">
                                <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <?php 
                                            foreach($categories as $cat){

                                                $subcategories = $this->Category_model->getSubCategories($cat['category_id']);


                                        ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>Menus/category">
                                                <?php echo $cat['category_name'] ?>
                                            </a>

                                            <?php
                                                if(!empty($subcategories)){
                                            ?>
                                            <ul class="megamenu">
                                                <li>
                                                   
                                                    <ul>
                                                        <?php 
                                                            foreach($subcategories as $sbcat){
                                                        ?>
                                                        <li><a href="<?php echo base_url(); ?>Menus/product"><?php echo $sbcat['subcategory_name'] ?></a>
                                                        </li>
                                                        <?php } ?>
                                                      
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                            <?php } ?>
                                        </li>
                                        <?php } ?>
                                        
                                       
                                        <li>
                                            <a href="shop-banner-sidebar.html"
                                                class="font-weight-bold text-primary text-uppercase ls-25">
                                                View All Categories<i class="w-icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li class="active">
                                        <a href="<?php echo base_url(); ?>">Home</a>
                                    </li>
                                   
                                    <li>
                                        <a href="<?php echo base_url(); ?>Menus/supplier">Supplier</a>
                                       <!--  <ul>
                                            <li>
                                                <a href="vendor-dokan-store-list.html">Store Listing</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="vendor-dokan-store.html">Vendor Store</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>Menus/about_us">About Us</a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url(); ?>Menus/FAQ">Faq</a>
                                    </li>
                                    <!-- <li> -->
                                        <!-- <a class="d-lg-show">More</a> -->
                                         <!-- <ul> -->
                                            <!-- <li><a href="<?php echo base_url(); ?>Menus/becomesupplier">Become A Supplier</a></li> -->
                                            <!-- <li><a href="<?php echo base_url(); ?>Menus/FAQ">FAQs</a></li> -->
                                            <!-- <li><a href="error-404.html">Error 404</a></li> -->
                                            <!-- <li><a href="coming-soon.html">Coming Soon</a></li> -->
                                            <!-- <li><a href="wishlist.html">Wishlist</a></li> -->
                                            <!-- <li><a href="<?php echo base_url(); ?>Menus/cart">Cart</a></li> -->
                                            <!-- <li><a href="<?php echo base_url(); ?>Menus/checkout">Checkout</a></li> -->
                                            <!-- <li><a href="compare.html">Compare</a></li> -->
                                        <!-- </ul> -->
                                    <!-- </li> -->
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <a href="#" class="d-xl-show"><i class="w-icon-truck mr-1"></i>Become A Supplier</a>
                            <!-- <a href="#"><i class="w-icon-sale"></i>Daily Deals</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->