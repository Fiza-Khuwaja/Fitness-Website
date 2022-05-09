<?php

session_start();

//if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
//{
//    header("location: login.php");
//}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Personalized Fitness</title>
	<link rel="stylesheet" href="css/services.css">

</head>
<body>
	<header class="navbar">
		<img class="logo" src="imgs/gym-shoes.png">
		<span>Personalized Fitness</span>
		<nav>
			<ul class="navlist">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="services.php" class="active"	>Services</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<?php
            		if(isset($_SESSION['username'])){
                	echo '<li><a href="profile.php">'.$_SESSION['username'].'</a></li>';
                	echo '<li><a href="logout.php">Logout</a></li>';
            		}
            		else{
                	echo "<li><a href='login.php'><button>Login</button></a></li>";        
            		}
          		?>
			</ul>
		</nav>
	</header>

	<div class="container">
		<div class="upper">

			<h1 class="" >It's  Workout time . Let's go</h1> 
		</div>
		<div class="lower">

			<h1 class="" >We are ready to make you fit </h1>
		</div>
  </div>

  <div id="bmi">
	<h2> Can't decide which plan to choose ? Try our BMI calculator and Know which plan is best suited for you</h2>
</div>

<div id="bmi1">

	<button class="bmi"><a href="bmi.html">BMI</a></button>
</div>
  

<div id="services">
	<div class="box">
		<img src="imgs/fat_loss.jpg" alt="">
		<h2 class="secondary center"> Weight Loss</h2>
		<div>
			<h3 class="center">This program is best suited for pepole just starting to Workout and wish to lose Weight and can be done from comfort of your home </h3>
		</div>
<br>
		<div>
			<h4>Difficulty Level : Beginner</h4>
		</div>
<br>
<div>
	<h4>
		Requirments - No prior Fitness knowledge is required 
	</h4> 
</div>
<br>
<div>

	<h4>
		Equipments - No Equipments required 
	</h4>
</div>
			<button class="btn"><a href="weightLoss.html">Join Now </a> </button>
	</div>


	<div class="box">
		<img src="imgs/stay_fit.jpg" alt="">
		<h2 class="secondary center"> Stay Fit</h2>
		<div>
			<h3 class="center">This program is best suited for pepole who wish to just stay fit but can't go to a gym and prefer working at home  </h3>
		</div>
<br>
		<div>
			<h4>Difficulty Level : Intermediate</h4>
		</div>
<br>
<div>
	<h4>
		Requirments - Prior Fitness knowledge is required
	</h4> 
</div>
<br>
<div>

	<h4>
		Equipments - Just a pair of dumbbells
	</h4>
</div>

			<button class="btn"><a href="stayFit.html"> Join Now</a> </button>
	</div>
	<div class="box">
		<img src='imgs/muscle_gain.jpg' alt="">
		<h2 class="secondary center">Built Muscles</h2>
		<div>
			<h3 class="center">This program is best suited for pepole who have been working out and wish to gain Muscles but are unable to hit a gym  </h3>
		</div>
<br>
		<div>
			<h4>Difficulty Level : Intermediate to Advanced</h4>
		</div>
<br>
<div>
	<h4>
		Requirments - Fitness knowledge is required  
	</h4> 
</div>
<br>
<div>

	<h4>
		Equipments - Pair of dumbbells , Pullup bar and Dips bar  
	</h4>
</div>

			<button class="btn"><a href="muscleGain.html"> Join Now</a></button>
	</div>
</body>
</html>