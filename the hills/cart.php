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

	  <div class="cart">
	  	<div class="cart-container">


	  	<h1>Your Cart</h1>
	  	
	  	<div class="cart-item" style="padding-left: 320px; height: 30px;">

		  	<div class="cart-item-desc">
		  		<h1>Product</h1>
		  	</div>

		  	<div class="cart-item-desc">
		  		<h1>Price</h1>
		  	</div>

		  	<div class="cart-item-desc">
		  		<h1>Quantity</h1>
		  	</div>

		  	<div class="cart-item-desc">
		  		<h1>Total</h1>
		  	</div>

		</div>

	  	<hr>

	  	<div class="cart-item">

	  		<img src="img/Accessories_-2.jpg">
	  		<div class="cart-item-desc">
	  			<h2>Wireframe Bowl</h2>
	  			<h3>Black Pot Black Rack</h3>
	  			<h4>Remove</h4>
	  		</div>

	  		<div class="cart-item-desc">
	  			<h2>$29</h2>
	  		</div>



	  		<div class="cart-item-desc">

	  			<select name="qty" form="qty">
	  			  <option value="1">1</option>
	  			  <option value="2">2</option>
	  			  <option value="3">3</option>
	  			  <option value="4">4</option>
	  			</select>	  		

	  		</div>
	  		
	  		<div class="cart-item-desc">

	  			<h2>$29</h2>
	  			
	  		</div>
	  	
	  	</div>	

	  		  	<hr>

	  	<div class="cart-item">

	  		<img src="img/Accessories_-2.jpg">
	  		<div class="cart-item-desc">
	  			<h2>Wireframe Bowl</h2>
	  			<h3>Black Pot Black Rack</h3>
	  			<h4>Remove</h4>
	  		</div>

	  		<div class="cart-item-desc">
	  			<h2>$29</h2>
	  		</div>



	  		<div class="cart-item-desc">

	  			<select name="qty" form="qty">
	  			  <option value="1">1</option>
	  			  <option value="2">2</option>
	  			  <option value="3">3</option>
	  			  <option value="4">4</option>
	  			</select>	  		

	  		</div>
	  		
	  		<div class="cart-item-desc">

	  			<h2>$29</h2>
	  			
	  		</div>
	  	
	  	</div>	

	  		  	<hr>

	  	<div class="cart-item">

	  		<img src="img/Accessories_-2.jpg">
	  		<div class="cart-item-desc">
	  			<h2>Wireframe Bowl</h2>
	  			<h3>Black Pot Black Rack</h3>
	  			<h4>Remove</h4>
	  		</div>

	  		<div class="cart-item-desc">
	  			<h2>$29</h2>
	  		</div>



	  		<div class="cart-item-desc">

	  			<select name="qty" form="qty">
	  			  <option value="1">1</option>
	  			  <option value="2">2</option>
	  			  <option value="3">3</option>
	  			  <option value="4">4</option>
	  			</select>	  		

	  		</div>
	  		
	  		<div class="cart-item-desc">

	  			<h2>$29</h2>
	  			
	  		</div>
	  	
	  	</div>	

	  	
	  	</div>

	  	<div class="total">
	  		<h1> Subtotal:</h1> <h2>$ 68</h2>
	  	</div>
	  
	  	<button class="check-out"> Check Out </button>
	  	<button class="continue-shopping"> Continue Shopping</button>


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