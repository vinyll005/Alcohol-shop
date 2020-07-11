<?php require_once(ROOT.'/views/layout/header.php'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('/template/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">My Cart</h2>
          </div>
        </div>
      </div>
    </section>
    <?php if(isset($products)):?>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Product</th>
						      <th>Price</th>
						      <th>Quantity</th>
						      <th>Total</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>

                            <?php foreach($products as $product) { ?>
						    <tr class="alert<?php echo $product['id']; ?>" role="alert">
						    	<td>
						    		<div class="img" style="background-image: url(/template/images/products/<?php echo $product['id']; ?>.jpg);"></div>
						    	</td>
						      <td>
						      	<div class="email">
                                      <span><?php echo $product['name']; ?></span>
                                      <span></span>
						      	</div>
						      </td>
						      <td>$<?php echo $product['price']; ?></td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input data-id=<?php echo $product['id']; ?> type="text" name="quantity" class="quantity form-control input-number" min="1" max="99" value="<?php echo $productsInCart[$product['id']]; ?>" min="1" max="100">
				          	</div>
				          </td>
				          <td class="product-cost<?php echo $product['id']; ?>">$<?php echo $product['price'] * $productsInCart[$product['id']]; ?></td>
						      <td>
						      	<button data-id=<?php echo $product['id']; ?> type="button" class="close delete-product" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
                            </tr>
                            <?php } ?>
						  </tbody>
						</table>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span class="total-money">$<?php echo Cart::getTotalPrice($products); ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span class="total-money">$<?php echo Cart::getTotalPrice($products); ?></span>
    					</p>
    				</div>
    				<p class="text-center"><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
    	</div>
    </section>
                            <?php else: ?>
                                <h1 style = "padding:10% 25%;">Your cart is empty for now, come on and change it!</h1>
                            <?php endif; ?>
<?php require_once(ROOT.'/views/layout/footer.php'); ?>