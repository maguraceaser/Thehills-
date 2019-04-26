<?php include('server.php') ?>

<!DOCTYPE html>
<html>
    <style> 
    *{ margin: 0px; padding:0px;}
    #main{border:1px solid black; width: 700px; height:500px; margin: 24px auto;}
    #message_area{width:98%; border:1px solid blue; height:440px;}
    </style>
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

	  <!-- <div class="checkout">

	  	<div class="checkout-info">
	  		<h3>First Name</h3>
	  		<input type="firstname" name="firstname">

	  		<h3>First Name</h3>
	  		<input type="firstname" name="firstname">

	  		<h3>First Name</h3>
	  		<input type="firstname" name="firstname">
	  		
          </div> -->
        <div id="main">
        <div id="message_area">
        <?Php

            $query1 = "SELECT * FROM thehillshotel.message"; 
            $result = mysqli_query($db, $query1);
            while($row = mysqli_fetch_assoc($result)){
                $message = $row['message_text'];
                $user_name = $row['username'];
                echo '<h4 style = "color: red">'.$user_name.'</h4>';
                echo '<p>'.$message.'</p>';
            }

            // The user logging in can send a message 
            if (isset($_POST['submit_message'])) {
                $message = mysqli_real_escape_string($db, $_POST['message']);
            

                $query = "INSERT INTO thehillshotel.message (message_text, username) 
                VALUES('$message', '{$_SESSION['username']}')";
                // $results = mysqli_query($db, $query);
                if (mysqli_query($db, $query)) {
                    echo '<h4 style = "color: red">'.$_SESSION['username'].'</h4>';
                    echo '<p>'.$message.'</p>';}
            }
        ?>
        </div>
    
    <!-- form  is in the main div-->
    <form method="post" action="checkout.php">
	  <!-- <div class="book">		
			
			<div class="booking-info"> -->

			<!-- <h1>Street Address </h1> -->
			<input type="text" name="message" style="width:370px; height:40px;" placeholder="Type your message here">
			<!-- </div> -->

			<button name="submit_message">message</button>
        <!-- </div> -->

		<!-- </div> -->


	</form>

	  	
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