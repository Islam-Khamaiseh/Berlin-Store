<?php
	include_once 'header.php';
?>

<img src="img/b1.png" alt="" class="top-img" style="width: 100%; position: absolute; z-index: -1; top:-170px;">
<section class="signup-form">
	<h2>Log In</h2>
	<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			else if ($_GET["error"] == "wronglogin") {
				echo "<p>Wrong login!</p>";
			}
			else if ($_GET["error"] == "none") {
				echo "<p style='color:green;'>You have signed up!</p>";
			}
		}
	?>
	<div class="signup-form-form">
		<form action="includes/login.inc.php" method="post">
			<input type="text" name="uid" placeholder="Username/Email...">
			<input type="password" name="pwd" placeholder="Password...">
			<button type="submit" name="submit">Log in</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
