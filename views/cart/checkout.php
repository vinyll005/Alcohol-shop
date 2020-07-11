<?php require_once(ROOT.'/views/layout/header.php'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('/template/images/bg_2.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate mb-5 text-center">
				<p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i
								class="fa fa-chevron-right"></i></a></span> <span>Checkout <i
							class="fa fa-chevron-right"></i></span></p>
				<h2 class="mb-0 bread">Checkout</h2>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 ftco-animate">
				<form action="/cart/complete" method="POST" class="billing-form">
					<h3 class="mb-4 billing-heading">Billing Details</h3>
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="form-group">
								<label for="firstname">Firt Name</label>
								<input type="text" name="name" class="form-control" placeholder="" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="lastname">Last Name</label>
								<input type="text" name="last_name" class="form-control" placeholder="" required>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="streetaddress">Street Address</label>
								<input type="text" name="street" class="form-control"
									placeholder="House number and street name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="towncity">Town / City</label>
								<input type="text" name="city" class="form-control" placeholder="" required>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" name="phone" class="form-control" placeholder="" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="emailaddress">Email Address</label>
								<input type="text" name="email" class="form-control" placeholder="" required>
							</div>
						</div>
					</div>
				
				<div class="row mt-5 pt-3 d-flex">
					<div class="col-md-6 d-flex">
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Cart Total</h3>
							<p class="d-flex">
								<span>Subtotal</span>
								<span>$<?php echo Cart::getTotalPrice($products); ?></span>
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
								<span>$<?php echo Cart::getTotalPrice($products); ?></span>
							</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="cart-detail p-3 p-md-4">
							<h3 class="billing-heading mb-4">Payment Method</h3>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="payment" value="cash" class="mr-2" style="cursor: pointer;">Cash</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="payment" value="credit_card" class="mr-2" style="cursor: pointer;">Credit card</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="payment" value="paypal" class="mr-2" style="cursor: pointer;">Paypal</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
										<label><input type="checkbox" value="" class="mr-2" style="cursor: pointer;" required> I have read and
											accept the terms and conditions</label>
									</div>
								</div>
							</div>
							<p><input type="submit" class="btn btn-primary py-3 px-4" value="Place an order"></p>
						</div>
					</div>
				</div>
			</div> <!-- .col-md-8 -->
			</form><!-- END -->
		</div>
	</div>
</section>

<?php require_once(ROOT.'/views/layout/footer.php'); ?>