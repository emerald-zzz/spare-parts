<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Auto Spare</title>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet" />

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

<!-- Custom stylesheet -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <!-- TOP HEADER -->
      <div id="top-header">
        <div class="container">
          <ul class="header-links pull-left">
			
				<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
				<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
				<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
				<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
			
		   
          </ul>
         
          
        </div>
      </div>
      <!-- /TOP HEADER -->

      <!-- MAIN HEADER -->
      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo"> </a>
              </div>
            </div>
            <!-- /LOGO -->

            <!-- FILTER PANEL -->
            <div class="col-md-6 collapse" id="filterPanel">
              <div class="header-filter">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="modelSelect">Model:</label>
                      <select class="form-control" id="modelSelect">
                        <option value="">Select Model</option>
                        <!-- Populate with model options -->
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="brandSelect">Brand:</label>
                      <select class="form-control" id="brandSelect">
                        <option value="">Select Brand</option>
                        <!-- Populate with brand options -->
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="familySelect">Family:</label>
                      <select class="form-control" id="familySelect">
                        <option value="">Select Family</option>
                        <!-- Populate with family options -->
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="typeSelect">Type:</label>
                      <select class="form-control" id="typeSelect">
                        <option value="">Select Type</option>
                        <!-- Populate with type options -->
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    Apply Filters
                  </button>
                </form>
              </div>
            </div>
            <!-- /FILTER PANEL -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
              <div class="header-ctn">
                <!-- Wishlist -->
                <div>
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                    <span>Your Wishlist</span>
                    <div class="qty">2</div>
                  </a>
                </div>
                <!-- /Wishlist -->

                <!-- Cart -->
                <div class="dropdown">
                  <a
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    aria-expanded="true"
                  >
                    <i class="fa fa-shopping-cart"></i>
                    <span>Your Cart</span>
                    <div class="qty">3</div>
                  </a>
                  <div class="cart-dropdown">
                    <div class="cart-list">
                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./img/product01.jpg" alt="" />
                        </div>
                        <div class="product-body">
                          <h3 class="product-name">
                            <a href="#">product name goes here</a>
                          </h3>
                          <h4 class="product-price">
                            <span class="qty">1x</span>$980.00
                          </h4>
                        </div>
                        <button class="delete">
                          <i class="fa fa-close"></i>
                        </button>
                      </div>

                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./img/product02.jpg" alt="" />
                        </div>
                        <div class="product-body">
                          <h3 class="product-name">
                            <a href="#">product name goes here</a>
                          </h3>
                          <h4 class="product-price">
                            <span class="qty">3x</span>$980.00
                          </h4>
                        </div>
                        <button class="delete">
                          <i class="fa fa-close"></i>
                        </button>
                      </div>
                    </div>
                    <div class="cart-summary">
                      <small>3 Item(s) selected</small>
                      <h5>SUBTOTAL: $2940.00</h5>
                    </div>
                    <div class="cart-btns">
                      <a href="#">View Cart</a>
                      <a href="#"
                        >Checkout <i class="fa fa-arrow-circle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- /Cart -->

                <!-- Filter Button (as an anchor) -->
    <div>
		<a href="#" id="filterButton" data-toggle="collapse" data-target="#filterPanel">
		  <i class="fa fa-filter"></i>
		  <p>Filter</p>
		</a>
	  </div>
	  <!-- /Filter Button (as an anchor) -->
                <!-- Menu Toogle -->
                <div class="menu-toggle">
                  <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
      <!-- container -->
      <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
          <!-- NAV -->
          <ul class="main-nav nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Hot Deals</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Engine Parts</a></li>
            <li><a href="#">Transmission Parts</a></li>
            <li><a href="#">Brake System Parts</a></li>
            <li><a href="#">Suspension Parts</a></li>
          </ul>
          <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/product03.jpg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Engine Parts<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/product04.jpg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Suspension Parts<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/product03.jpg" alt="" />
              </div>
              <div class="shop-body">
                <h3>Brake System Parts<br />Collection</h3>
                <a href="#" class="cta-btn"
                  >Shop now <i class="fa fa-arrow-circle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- /shop -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">New Products</h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                  <li class="active">
                    <a data-toggle="tab" href="#tab2">Engine Parts</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tab2">Transmission Parts</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tab2">Brake System Parts</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tab2">Suspension Parts</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick" data-nav="#slick-nav-1">
                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product01.jpg" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product02.jpg" alt="" />
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product03.jpg" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating"></div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product04.jpg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product05.jpg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">Top selling</h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                  <li class="active">
                    <a data-toggle="tab" href="#tab2">Engine Parts</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tab2">Transmission Parts</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tab2">Brake System Parts</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tab2">Suspension Parts</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab2" class="tab-pane fade in active">
                  <div class="products-slick" data-nav="#slick-nav-2">
                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product06.jpg" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product07.jpg" alt="" />
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product08.jpg" alt="" />
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating"></div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product09.jpg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/product01.jpg" alt="" />
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category</p>
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          $980.00 <del class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist">
                            <i class="fa fa-heart-o"></i
                            ><span class="tooltipp">add to wishlist</span>
                          </button>
                          <button class="add-to-compare">
                            <i class="fa fa-exchange"></i
                            ><span class="tooltipp">add to compare</span>
                          </button>
                          <button class="quick-view">
                            <i class="fa fa-eye"></i
                            ><span class="tooltipp">quick view</span>
                          </button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                      </div>
                    </div>
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-2" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-3" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-3">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product07.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product08.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product09.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product01.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product02.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product03.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-4" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-4">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product04.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product05.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product06.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product07.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product08.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product09.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="clearfix visible-sm visible-xs"></div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-5" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-5">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product01.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product02.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product03.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product04.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product05.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/product06.jpg" alt="" />
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name">
                      <a href="#">product name goes here</a>
                    </h3>
                    <h4 class="product-price">
                      $980.00 <del class="product-old-price">$990.00</del>
                    </h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <div class="newsletter">
              <p>Sign Up for the <strong>NEWSLETTER</strong></p>
              <form>
                <input
                  class="input"
                  type="email"
                  placeholder="Enter Your Email"
                />
                <button class="newsletter-btn">
                  <i class="fa fa-envelope"></i> Subscribe
                </button>
              </form>
              <ul class="newsletter-follow">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
    <footer id="footer">
      <div class="section">
        <div class="container">
          <div class="row">
            <!-- About Spare Parts -->
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <!-- About Spare Parts content -->
                <h3 class="footer-title">About Spare Parts</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul class="footer-links">
                  <li>
                    <a href="#"
                      ><i class="fa fa-map-marker"></i>1734 Spare Parts
                      Avenue</a
                    >
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-envelope-o"></i>spareparts@email.com</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <!-- Spare Parts Categories -->
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <!-- Spare Parts Categories content -->
                <h3 class="footer-title">Spare Parts Categories</h3>
                <ul class="footer-links">
                  <li><a href="#">Engine Parts</a></li>
                  <li><a href="#">Transmission Parts</a></li>
                  <li><a href="#">Brake System Parts</a></li>
                  <li><a href="#">Suspension Parts</a></li>
                  <li><a href="#">Body and Exterior Parts</a></li>
                </ul>
              </div>
            </div>

            <!-- Clearfix for extra small devices -->
            <div class="clearfix visible-xs"></div>

            <!-- Information and Service in a new row -->

            <!-- Information -->
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <!-- Information content -->
                <h3 class="footer-title">Information</h3>
                <ul class="footer-links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Orders and Returns</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </div>
            </div>

            <!-- Service -->
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Service</h3>
                <ul class="footer-links">
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">View Cart</a></li>
                  <li><a href="#">Wishlist</a></li>
                  <li><a href="#">Track My Order</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
              </div>
            </div>

            <!-- /Information and Service row -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /top footer -->

      <!-- bottom footer -->
      <div id="bottom-footer" class="section">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12 text-center">
              <span class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | This template is made with
                <i class="fa fa-heart-o" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </span>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->
<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Slick -->
<script src="{{ asset('js/slick.min.js') }}"></script>

<!-- nouislider -->
<script src="{{ asset('js/nouislider.min.js') }}"></script>

<!-- jQuery Zoom -->
<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>

<!-- Custom script -->
<script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
