<footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Liquor <span>Store</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">My Accounts</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Catalog</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Term &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Link</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
		
	            <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="/template/js/jquery.min.js"></script>
  <script src="/template/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/template/js/popper.min.js"></script>
  <script src="/template/js/bootstrap.min.js"></script>
  <script src="/template/js/jquery.easing.1.3.js"></script>
  <script src="/template/js/jquery.waypoints.min.js"></script>
  <script src="/template/js/jquery.stellar.min.js"></script>
  <script src="/template/js/owl.carousel.min.js"></script>
  <script src="/template/js/jquery.magnific-popup.min.js"></script>
  <script src="/template/js/jquery.animateNumber.min.js"></script>
  <script src="/template/js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <script src="/template/js/google-map.js"></script>
  <script src="/template/js/main.js"></script>

  <script>
  
    $(document).ready(function()    {
        $('.add-to-cart').click(function() {
            event.preventDefault();
            var id = $(this).attr('data-id');
            console.log(id);
            $.post("/cart/add/"+id, {}, function(data)   {
                console.log(data);
                $('#cart-count').html(data);
            });
            return false;
        });

        $('.delete-product').click(function() {
            event.preventDefault();
            var id = $(this).attr('data-id');
            var el = $('.alert'+id);
            $.post("/cart/delete/"+id, {}, function(data)    {
                $(el).remove();
            });
            $.post("/cart/update/", {}, function(data)   {
                $('#cart-count').html(data);
            });
            $.post("/cart/total/", {}, function(data)   {
                $('.total-money').html(data);
            });
            return false;
        });

        $('.quantity').change(function()    {
            event.preventDefault();
            var id = $(this).attr('data-id');
            var quantity = $(this).val(); 
            var cost = $('.product-cost'+id);
            
            $.post("/cart/quant/"+id+"/"+quantity, {}, function(data)   {
                cost.html(data);
            });
            $.post("/cart/update/", {}, function(data)   {
                $('#cart-count').html(data);
            });
            $.post("/cart/total/", {}, function(data)   {
                $('.total-money').html(data);
            });
            return false;
        });
    });

  </script>
    
  </body>
</html>