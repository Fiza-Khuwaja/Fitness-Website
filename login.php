<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: profile.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password, email, phone FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $email, $phone);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["email"] = $email;
                            $_SESSION["phone"] = $phone;

                            //Redirect user to welcome page
                            header("location: profile.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Fitness Login </title>
	<link rel="stylesheet" type="text/css" href="css/form1.css">
</head>
<body>
	<img src="imgs/workout3.jpg">
	<div class="center">
		<h1>Login</h1>
		<form action="" method="POST">
			<div class="txt_field">
				<input type="text" name="username" required>
				<span></span>
				<label>Username</label>
			</div>
			<div class="txt_field">
				<input type="password" name="password" required>
				<span></span>
				<label>Password</label>
			</div>
			<div class="pass">Forget Password?</div>
			<input type="submit" value="Login" href="index.html">
			<div class="signup_link">
				Not a Member?<a href="signup.php">Signup</a>
			</div>
		</form>
	</div>
</body>
</html>