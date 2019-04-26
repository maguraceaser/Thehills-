<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Local Shop Sign-Up</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Merriweather|Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">

<body>

	<div class="bg-image" style="background-image: url('img/Group 64.jpg');">
	  <div class="menu"></div>
	  <div class = "container" style="height: 50vh;">
	    <div class="logo"><a href="index.php"><img src="img/Group 60.png" style="width: 150px;"></a></div>
	    <div class="header">
	      <nav>
	        <ul>
						<li><a href="index.php#about_theHills">ABOUT</a></li>
	          <li><a href="gallery.php">GALLERY</a></li>
	          <li><a href="shop.php">SHOP</a></li>
	          <li><a href="contactUs.php">CONTACT</a></li>
	          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	          <li><a href="#"><i class="fa fa-twitter" ></i></a></li>	        
	          <li><a href="#"><i class="fa fa-instagram"></i></a></li>	        
	          <li><a href="#"><i class="fa fa-phone"></i></a></li>	        
	        

	      	</ul>
	      </nav>
	    </div>
	    <h1 class="tagline" style="font-size: 50px; top: 20vh;">Local Shop Sing Up</h1>
	  </div>


	<form method="post" action="localShop_sign_up.php">
	  <div class="book">
		<?php include('errors.php'); ?>
		
			<div class="booking-info">

			<h1>First Name</h1>
			<input type="text" name="fname" placeholder="Ex: John" value="<?php echo $fname; ?>">
			</div>

			<div class="booking-info">

			<h1>Last Name</h1>
			<input type="text" name="lname" placeholder="(Optional)" value="<?php echo $lname; ?>">
			</div>

			<div class="booking-info">

			<h1>User Name</h1>
			<input type="text" name="username" placeholder="Ex: john" value="<?php echo $username; ?>">
			</div>

			<div class="booking-info">

			<h1>Password</h1>
			<input type="password" name="password" placeholder="Ex: doe">
			</div>

			<div class="booking-info">

			<h1>Origin Country</h1>
			<input type="text" name="orgnCountry" placeholder="Ex: Ghana">
			</div>

			<div class="booking-info">

			<h1>Street Address </h1>
			<input type="text" name="saddress" placeholder="Ex: Av - 7thStreet "value="<?php echo $saddress; ?>">
			</div>

			<div class="more" style="position: absolute; margin-top: 585px; margin-left: 25%; width: 200px; height: 200px;">
			<button name="reg_shop">Sign Up</button>
          <br>
					<p> <a href="login.php">Sign In</a><br> 
					Sign up: <a href="hotelClient_sign_up.php">Hotel Client</a> </p>
        </div>

		</div>


	</form>


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
	          <li><a href="shop.php">SHOP</a></li>
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