<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>The Hills</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Merriweather|Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">

<body>

	<div class="bg-image" style="background-image: url('img/Group 64.jpg');">
	  <div class="menu"></div>
	  	  
		<div class="cartbar">
                <a href="index.php"> <img src="img/Group 70.png"> </a>
	  	<div class="search"><input type="search" name="search" placeholder=" Search Products"> <button><i class="fa fa-search"></i></button> </div>
	  	<div class="cartbtn"><button onclick="location.href='cart.php';"> <i class="fa fa-shopping-cart"></i> &nbsp;&nbsp;&nbsp; My Cart</button></div>
			
			<div class="tooltip">
			<div class="userbtn"><button onclick="location.href='shop.php';"> <i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp; My Account</button></div>
            <span class="tooltiptext"><a href="#">Product</a></span>    
            <span class="tooltiptext2"><a href="shop.php?logout='1'">Logout</a></span>        
      	</div>

	  </div>
	  <div class="category-title" style="float: left; left: 35%; position: absolute; font-size: 18px; font-weight: normal; margin: 80px 0 100px 0;">
	  Home › Accessories › Wooden Alarm Clock - Cube</div> 

	  <div class="shop">
	  	<div class="product-details">
	  		<h1>Wooden Alarm Clock - Cube</h1>

	  		<h2> $ 290 </h2>

	  		<br><hr><br>

	  		<button class="buy-now"> Buy Now </button>
	  		<button class="add-cart"> Add to Cart</button>
	  		<button class="contact-seller" onclick="location.href='checkout.php';"> Contact Seller </button>
	  		<button class="add-wishlist"> + Add to Wishlist  </button>




	  		<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

	  .</p>

	  	</div>
	  	<div class="thumbnails">
	  		<img src="img/Accessories_-2.jpg">
	  		<img src="img/Accessories_-3.jpg">
	  		<img src="img/Accessories_-4.jpg">
	  		<img src="img/Accessories_-5.jpg">
	  	</div>
	  	<div class="product">
	  		<img src="img/Accessories_-1.jpg">
	  	</div>

	  </div>

	  <div class="category-title" style="float: left; left: 40%;"> Similar Products </div>


	  <div class="shop">
	  	<div class="other-products">

	  		<div class="other">
	  			<img src="img/Accessories_-9.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 390 </h2>
	  		</div>
	  		<div class="other">
	  			<img src="img/Accessories_-10.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 480 </h2>
	  		</div>
	  		<div class="other">
	  			<img src="img/Accessories_-7.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 500 </h2>
	  		</div>
	  		<div class="other">
	  			<img src="img/Accessories_-8.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 250 </h2>
	  		</div>
	  	</div>


	  </div>


	<div class="newsletter" style="position: relative;">
		<h1>Subscribe</h1>
		<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore"</p>
		<input type="email" name="subscriber" placeholder="Your Email Address">
		<button>Subscribe</button>
	</div>


	<div>
	  <div style="background-color: black;">
	   	<div class="footer">
	      <nav>
	        <ul>
						<li><a href="index.php#about_theHills">ABOUT</a></li>
	          <li><a href="gallery.php">GALLERY</a></li>
	          <li><a href="login.php">SHOP</a></li>
	          <li><a href="contactUs.php">CONTACT</a></li>
	          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	          <li><a href="#"><i class="fa fa-twitter" ></i></a></li>	        
	          <li><a href="#"><i class="fa fa-instagram"></i></a></li>	        
	          <li><a href="#"><i class="fa fa-phone"></i></a></li>	        
	        

	      	</ul>
	      </nav>
	    </div>
	  </div>

	  </div>

		</div>


</body>
</html>