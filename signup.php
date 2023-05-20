<?php
  include_once 'header.php';
?>
	<img src="img/b1.png" alt="" class="top-img" style="width: 100%; position: absolute; z-index: -1; top:-170px;">
	<section class="signup-form">
  		<h2>Sign Up</h2>
		<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				else if ($_GET["error"] == "invaliduid") {
					echo "<p>Choose a proper username!</p>";
				}
				else if ($_GET["error"] == "invalidemail") {
					echo "<p>Choose a proper email!</p>";
				}
				else if ($_GET["error"] == "passwordsdontmatch") {
					echo "<p>Passwords doesn't match!</p>";
				}
				else if ($_GET["error"] == "stmtfailed") {
					echo "<p>Something went wrong!</p>";
				}
				else if ($_GET["error"] == "usernametaken") {
					echo "<p>Username already taken!</p>";
				}

			}
  		?>
		<div class="signup-form-form">
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="name" placeholder="Full name...">
				<input type="text" name="email" placeholder="Email...">
				<input type="text" name="uid" placeholder="Username...">
				<input type="password" name="pwd" placeholder="Password...">
				<input type="password" name="pwdrepeat" placeholder="Repeat password...">
				<button type="submit" name="submit">Sign up</button>
			</form>
	  </div>
</section>

<?php
  include_once 'footer.php';
?>
