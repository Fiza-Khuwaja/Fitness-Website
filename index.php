<?php
require_once "config.php";

$name_feed = $phone_feed = $email_feed = $msg_feed = "";
$con_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST['name_feed'])) || empty(trim($_POST['phone_feed']))|| empty(trim($_POST['email_feed'])) || empty(trim($_POST['msg_feed'])))
    {
        $err = "Please enter name ,phone, email and your message ";
    }
    else{
        $name_feed = trim($_POST['name_feed']);
        $phone_feed = trim($_POST['phone_feed']);
        $email_feed = trim($_POST['email_feed']);
        $msg_feed = trim($_POST['msg_feed']);
        
    }
if(empty($err))
{
  $sql = "INSERT INTO feedback (name_feed, phone_feed, email_feed, message_feed) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssss", $param_name_feed, $param_phone_feed, $param_email_feed, $param_msg_feed);

        // Set these parameters
        $param_name_feed = $name_feed;
        $param_phone_feed = $phone_feed;
        $param_email_feed = $email_feed;
        $param_msg_feed = $msg_feed;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            echo "We will contact you soon! Thank you for contacting us.";
            header("location: index.php");
        }
        else{
            echo "Something went wrong...";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

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
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<header class="navbar">
		<img class="logo" src="imgs/gym-shoes.png">
		<span>Personalized Fitness</span>
		<nav>
			<ul class="navlist">
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="about.php" >About</a></li>
				<li><a href="services.php">Services</a></li>
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
	<section class="background firstSection">	
		<div class="box-main">

			<div class="join">
				<p class="text-big">Join our Personalized training program today.</p>
				<div>
					<?php
					if(isset($_SESSION['loggedin'])){
						echo '<button class="btn"><a href="services.php">JOIN NOW</a> </button>';
					}
					else
					{
						echo '<button class="btn"><a href="signup.php">Become a Member</a> </button>';
					}
					?>
					<!--<button class="btn"><a href="signup.php">Become a Member</a> </button>-->
				</div>
			</div>
		</div>
	</section>
	<section class="Section">
		<div class="left">
			<img src="imgs/workout.jpg">
		</div>
		<div class="right">
			<p class="text-big"><em>"Each new day is a new opportunity to improve yourself. Take it and make the most of it."</em></p>
		</div>
	</section>
	<section class="Section reverse">
		<div class="left">
			<img src="imgs/peanut.jpeg">
		</div>
		<div class="right">
			<p class="text-big"><em>"Peanut Butter Whole-Wheat Sandwich:30 minutes befor workout have 2 slices of bread with 2 spoons"</em></p>
		</div>
	</section>
	<section class="Section">
		<div class="left">
			<img src="imgs/workout1.jpg">
		</div>
		<div class="right">
			<p class="text-big"><em>"Your body is a reflection of your lifestyle."</em></p>
		</div>
	</section>
	<section class="services">
		<div></div>
		<div></div>
		<div></div>
	</section>
	<section id="contact">
		<h1 class="text-center">Your Feedback</h1>
		<form action="" method="post" class="form">
			<input type="text" class="form-input" name="name_feed" id="name" placeholder="Enter Your Name" required>
			<input type="text" class="form-input"id="phone" name="phone_feed" placeholder="Enter Your Phone no">
			<input type="email" class="form-input"id="email" name="email_feed" placeholder="Enter Your Email" required>
			<textarea class="form-input" id="comment" name="msg_feed" cols="30" rows="10" placeholder="Type your Feedback."></textarea>
			<button class="btn btn-mid">Submit</button>
		</form>
	</section>
	<footer>
		<p class="text-footer">Copyright &copy;2027 www.personalizedfitness.com - All right reserved.</p>
	</footer>
	<!--<script src=resp.js></script> -->     
</body>
</html>