<?php
	session_start();
	include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Berlin Store</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		
		<nav>
			<a href="index.php"><img src="img/Berlin-Store.png" alt="Berlin Store logo"></a>
			<div class="div-main-menu">
				<ul class="main-menu">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="products.php">Products</a>
					</li>
					<li>
						<a href="aboutus.php">About Us</a>
					</li>
					<li>
						<a href="contactus.php">Contact us</a>
					</li>
				</ul>
			</div>
			<div class="div-sub-menu">
				<ul class="sub-menu">
					<?php
						if (isset($_SESSION["useruid"])) {
							if($_SESSION["useruid"]=="admin"){
								echo "<li><a href='addProducts.php'>Add product</a></li>";
								echo "<li><a href='profile.php'>".$_SESSION["useruid"]."</a></li>";
								echo "<li><a href='logout.php'>Logout</a></li>";
							}
							else{
								echo "<li><a href='profile.php'>".$_SESSION["useruid"]."</a></li>";
								echo "<li><a href='logout.php'>Logout</a></li>";
							}
						}
						else {
							echo "<li><a href='signup.php'>Sign up</a></li>";
							echo "<li><a href='login.php'>Log in</a></li>";
						}
					?>
				</ul>
			</div>

		</nav>
		
		<div class="f-main">
		<div class="s-main">
