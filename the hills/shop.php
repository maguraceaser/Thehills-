<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>
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
	  <!-- 	  <div class = "container" style="height: 25vh;">
	  	    <div class="logo"><a href="#"><img src="img/Group 60.png" style="width: 150px;"></a></div>
	  	    <div class="header">
	  	      <nav>
	  	        <ul>
	  	          <li><a href="#">ABOUT</a></li>
	  	          <li><a href="#">ROOMS</a></li>
	  	          <li><a href="#">SHOP</a></li>
	  	          <li><a href="#">CONTACT</a></li>
	  	          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	  	          <li><a href="#"><i class="fa fa-twitter" ></i></a></li>	        
	  	          <li><a href="#"><i class="fa fa-instagram"></i></a></li>	        
	  	          <li><a href="#"><i class="fa fa-phone"></i></a></li>	        
	  	        

	  	      	</ul>
	  	      </nav>
	  	    </div>
	  	  </div> -->
	  	  
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
	  
	  <div class="category-title1">Accesories</div>

	  <div class="parameters">
	  <nav>
		<div class="category-title" style="float: right; left: 65%; position: absolute; font-size: 18px; font-weight: normal;">Sort By :</div> 

	    <ul>
	      <li>
			<form action="/action_page.php">

			<select name="sort">
		    <option value="volvo">Featured</option>
		    <option value="saab">Price High-Low</option>
		    <option value="fiat">Price Low-High</option>
		    <option value="audi">Newest Arrivals</option>
		  </select>
		  <br><br>

		</form>
		</li>

	  	</ul>
	  </nav>

	    	<div class="category-title" style="float: right; left: 33%; position: absolute; font-size: 18px; font-weight: normal;">Browse by :</div> 


	     <ul style="float: right; right: 40%; margin-top: 83px; position: absolute;">
	        <li>
	  		<form action="/action_page.php">

	  		<select name="sort">
	  	    <option value="volvo">Accessories</option>
	  	    <option value="saab">Fashion</option>
	  	    <option value="fiat">Electronics</option>
	  	    <option value="audi">Memorabilia</option>
	  	  </select>
	  	  <br><br>

	  	</form>
	  	</li>

	    	</ul>
	  </div>

<!-- prodcuts to buy -->
	  <div class="shop">
	  	<div class="other-products">
	  		<div class="other">
					<a href="product.php">
						<img src="img/Accessories_-1.jpg">
					</a>
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 290 </h2>
				</div>
				<div class="other">
	  			<img src="img/Accessories_-8.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 250 </h2>
	  		</div>
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
	  			<img src="img/Accessories_-11.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 690 </h2>
	  		</div>
	  				<div class="other">
	  			<img src="img/Accessories_-3.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 290 </h2>
	  		</div>
	  				<div class="other">
	  			<img src="img/Accessories_-2.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 410 </h2>
	  		</div>
	  		<div class="other">
	  			<img src="img/Accessories_-5.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 290 </h2>
	  		</div>
	  				<div class="other">
	  			<img src="img/Accessories_-6.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 390 </h2>
	  		</div>
	  				<div class="other">
	  			<img src="img/Accessories_-9.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 190 </h2>
	  		</div>
	  				<div class="other">
	  			<img src="img/Accessories_-10.jpg">
	  			<h3>Sit accus antium</h3>
	  			<h2> $ 50 </h2>
	  		</div>
	  	</div>

	  	<div class="more"><button>Discover More</button></div>

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