<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/template/css/animate.css">
    
    <link rel="stylesheet" href="/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/template/css/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    
    <link rel="stylesheet" href="/template/css/flaticon.css">
    <link rel="stylesheet" href="/template/css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">Liquor <span>store</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	<span class="flaticon-shopping-bag"></span>
          	<div id="cart-count" class="d-flex justify-content-center align-items-center"><small><?php echo Cart::countProductsInCart(); ?></small></div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
		  <?php foreach($headerProducts as $product){ ?>
				    <div class="dropdown-item d-flex align-items-start" href="#">
				    	<div class="img" style="background-image: url(/template/images/products/<?php echo $product['id']; ?>.jpg);"></div>
				    	<div class="text pl-3">
				    		<h4><?php echo $product['name']; ?></h4>
				    		<p class="mb-0"><a href="/products/<?php echo $product['id']; ?>" class="price">$<?php echo $product['price']; ?></a><span class="quantity ml-3">Quantity: <?php echo $_SESSION['productsInCart'][$product['id']]; ?></span></p>
				    	</div>
				    </div>
		  <?php } ?>
				    <a class="dropdown-item text-center btn-link d-block w-100" href="/cart">
				    	View All
				    	<span class="ion-ios-arrow-round-forward"></span>
				    </a>
				  </div>
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="/products" class="nav-link">Products</a></li>
	          <li class="nav-item"><a href="/cart" class="nav-link">Cart</a></li>
	          <li class="nav-item"><a href="/contacts" class="nav-link">Contacts</a></li>
	        </ul>
	      </div>
	    </div>
      </nav>
      