<!DOCTYPE html>
<html>
<head>
	<title>The Hill Hotel</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<link rel="stylesheet" href="styles.css">
<body>
	<div class="bg-image">
	  <div class="menu"></div>
	  <div class = "container">
	    <div class="logo"><a href="index.php"><img src="img/Group 60.png" style="width: 150px;"></a></div>
	    <div class="header">
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
	    <h1 class="tagline">Your Adventure Begins Here</h1>
	  </div>
	  <div class="booking">

	  	<div>
	  		<form>
	  			<table>
	  				<tr>
	  					<td>ARRIVAL</td>
	  					<td rowspan="2"></td>
	  					<td>DEPARTURE</td>
	  					<td rowspan="2"></td>
	  					<td>ADULTS</td>
	  					<td rowspan="2"></td>
	  					<td>CHILDREN</td>
	  					<td rowspan="2"></td>
	  					<td rowspan="2"><button><a href='book.php'> BOOK A ROOM </a></button></td>
	  				</tr>
	  				<tr>
	  					<td><input type="date" value="2019-04-20" name="arrival" class="data"></td>
	  					<td><input type="date" value="2019-04-27" name="departure" class="data"></td>
	  					<td> 
	  						<select name="adults" class="data">
							    <option value="1">1&nbsp;&nbsp;&nbsp;</option>
							    <option value="2">2&nbsp;&nbsp;&nbsp;</option>
							    <option value="3">3&nbsp;&nbsp;&nbsp;</option>
							    <option value="4">4&nbsp;&nbsp;&nbsp;</option>
							 </select>
						</td>
	  					<td>
	  						<select name="adults" class="data">
							    <option value="1">1&nbsp;&nbsp;&nbsp;</option>
							    <option value="2">2&nbsp;&nbsp;&nbsp;</option>
							    <option value="3">3&nbsp;&nbsp;&nbsp;</option>
							    <option value="4">4&nbsp;&nbsp;&nbsp;</option>
							 </select>
	  					</td>
	  				</tr>
	  			</table>
	  		</form>
	  	</div>

	  	
	  </div>
	</div>
	<div class="welcome">

		<div class="imagetwo">
			<img src="img/home.jpg">
		</div>

		<!-- link to about the Hills  -->
		<a name="about_theHills"> </a>
		<div class="messagetwo">
			<h3>Welcome to Hills</h3>
			<p>
			Roof desires to cater and provide guests with personalized hospitality. 
			
			<br><br>
			Buy and sell products on top of services found at our luxury hotel. We hope to make your stay unforgettable in the best way.

			Should you stay with us, we aim to give you an authentic experience and guarantee consistent high standards of customer service.

		</p>
		</div>
	</div>
	
	<div class="messageroom">
	<h3 style="text-align: center;">Rooms & Suites</h3>
	<p>
		At our hotel, there is a variety of rooms to choose from.
		Whether you are a casual traveler or a person demanding luxury
		wherever you go, you won’t be disappointed.
	</p>	
	</div>

	<div class="rooms">
		
		

		<div class="room-container">

			<div class="room-box">

				<div class="image-container">
					<div class="overlay">
						<div class="bookbtn"><button onclick="location.href='book.php';">Book Now</button> </div>
					</div>
					<img src="img/room1.jpg">
				</div>				


				<div><h3>Suite</h3></div>
				<div><p>$90/PER NIGHT</p></div>
			</div>


			<div class="room-box">
				<div class="image-container">
					<div class="overlay">
						<div class="bookbtn"><button onclick="location.href='book.php';">Book Now</button> </div>
					</div>
					<img src="img/room2.jpg">
				</div>				

				<div><h3>Double Room</h3></div>
				<div><p>$150/PER NIGHT</p></div>
			</div>


			<div class="room-box">

				<div class="image-container">
					<div class="overlay">
						<div class="bookbtn"><button onclick="location.href='book.php';">Book Now</button> </div>
					</div>
					<img src="img/room3.jpg">
				</div>

				<div><h3>Family Room</h3></div>
				<div><p>$120/PER NIGHT</p></div>
			</div>
			
		</div>

		<div class="room-container">

			<div class="room-box">
				<div class="image-container">
					<div class="overlay">
						<div class="bookbtn"><button onclick="location.href='book.php';">Book Now</button> </div>
					</div>
					<img src="img/room1.jpg">
				</div>
				<div><h3>Suite</h3></div>
				<div><p>$90/PER NIGHT</p></div>
			</div>
			<div class="room-box">
				<div class="image-container">
					<div class="overlay">
						<div class="bookbtn"><button onclick="location.href='book.php';">Book Now</button> </div>
					</div>
					<img src="img/room2.jpg">
				</div>				

				<div><h3>Double Room</h3></div>
				<div><p>$150/PER NIGHT</p></div>
			</div>
			<div class="room-box">
				<div class="image-container">
					<div class="overlay">
						<div class="bookbtn"><button onclick="location.href='book.php';">Book Now</button> </div>
					</div>
					<img src="img/room3.jpg">
				</div>				

				<div><h3>Family Room</h3></div>
				<div><p>$120/PER NIGHT</p></div>
			</div>
			
		</div>
<!-- 		<div class="bookbtn"><button>Book A Now</button> </div>
 -->
	</div>

	<div class="awomenities">

			<div class="amenity">
			<h1>Why The Hills</h1>
			<p>The hills hotel is number one choice most attractive hotel in Africa .<br>Our services are the best and uniques </p>
		</div>
		
		<div class="amenities">

			<div class="amenitem">
				<img src="img/gym.jpg">
				<div><h3>Gym</h3></div>
				<div><p>What you think you become, what you feel, you attract. The body achieves what the mind believes </p></div>
			</div>
			<div class="amenitem">
				<img src="img/images.jpg">
				<div><h3>Restaurant</h3></div>
				<div><p>"One can not think well,love well, sleep well, if one had not dinned well come tast our meals!"</p></div>
			</div>
			<div class="amenitem">
				<img src="img/conference.jpg">
				<div><h3>Conference hall</h3></div>
				<div><p>We offer all kinds of conference and meeting halls that can acommondate large number of people. </p></div>
			</div>
			<div class="amenitem">
				<img src="img/pool.png">
				<div><h3>Swimming Pool</h3></div>
				<div><p>Our Swimming pool is state of the art. Like it has water and you can like swim in it or whatever</p></div>
			</div>
		</div>

		
	</div>

	<div class="amenity">
		<h1>Events at The Hills</h1>
		<p>Find below our activites and schedule that takes place in our hotel.<br>The hills present to you a variety of events and many more as you explore. </p>
	</div>

	<div class="events">
		<div class="event">

			<div class="event-image">
				<div class="event-date">
					<h4>13</h4>
					<h6>Apr</h6>
				</div>
				<img src="img/party.jpg">
			</div>
			
			<h3>Party Arrangement  </h3>

			<p> <i class="fa fa-ticket"></i>&nbsp;&nbsp;350 Going &nbsp;&nbsp;
				<i class="fa fa-thumb-tack"></i>&nbsp;&nbsp;187 Interested</p>

			<p>We provide amazing party assets to our customers and monitor all the necessary arrangement for the party aas reqired by our clients </p>
		</div>
		<div class="event">

			<div class="event-image">
				<div class="event-date">
					<h4>2</h4>
					<h6>May</h6>
				</div>
				<img src="img/event1.jpg">
			</div>
			
			<h3>Watching Football</h3>

			<p> <i class="fa fa-ticket"></i>&nbsp;&nbsp;123 Going &nbsp;&nbsp;
				<i class="fa fa-thumb-tack"></i>&nbsp;&nbsp;78 Interested</p>

			<p>Enternaining our customers is part of our priority, watching football, wrestling and many other sports.</p>
		</div>
		<div class="event">

			<div class="event-image">
				<div class="event-date">
					<h4>1</h4>
					<h6>June</h6>
				</div>
				<img src="img/concert3.jpg">
			</div>
			
			<h3>Concert/Show</h3>

			<p> <i class="fa fa-ticket"></i>&nbsp;&nbsp;1000 Going &nbsp;&nbsp;
				<i class="fa fa-thumb-tack"></i>&nbsp;&nbsp;679 Interested</p>

			<p>Come and enjoy our beautiful and incredible performances by both our local artists and international artitis .</p>
		</div>
	</div>

	<div class="amenity">
		<h1>The Hills Shop</h1>
		<p>Welcome to the hills shop where you find many quality and string products .<br>feel our products and come back and buy more products </p>
	</div>

<div class="shop">
	<div class="product-details">
		<h1>Sit accus antium</h1>

		<h2> $ 290 </h2>

		<br><hr><br>

		<button>Add to Cart</button> &nbsp; <i class="fa fa-heart fa-2x"></i>



		<p>"Please feel free to search and find our beutiful products on our online shopping and add to your cart, we sell quality strong products and laxiurous grocceries ."

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


	<h1 class="others">New Arrivals</h1>
	<div class="other-products">
		<div class="other">
			<img src="img/Accessories_-7.jpg">
			<h3>Sit accus antium</h3>
			<h2> $ 290 </h2>
		</div>
				<div class="other">
			<img src="img/Accessories_-8.jpg">
			<h3>Sit accus antium</h3>
			<h2> $ 290 </h2>
		</div>
				<div class="other">
			<img src="img/Accessories_-9.jpg">
			<h3>Sit accus antium</h3>
			<h2> $ 290 </h2>
		</div>
				<div class="other">
			<img src="img/Accessories_-10.jpg">
			<h3>Sit accus antium</h3>
			<h2> $ 290 </h2>
		</div>
	</div>

	<div class="more"><button onclick="location.href='shop.php';">Discover More</button></div>

</div>
	
<div class="newsletter">
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
          <li><a href="#about_theHills">ABOUT</a></li>
          <li><a href="gallery.php">GALLERY</a></li>
          <li><a href="login.php">SHOP</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" ></i></a></li>	        
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>	        
          <li><a href="#"><i class="fa fa-phone"></i></a></li>	        
        

      	</ul>
      </nav>
    </div>
  </div>

</div>

</body>
</html>