<?php
	include_once 'header.php';
?>

<img src="img/b1.png" alt="" class="top-img" style="width: 100%; position: absolute; z-index: -1; top:-170px;">
<section class="signup-form">
	<h2>Add Product</h2>
	<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields</p>";
			}
			else if ($_GET["error"] == "stmtfailed") {
				echo "<p>Something went wrong!</p>";
			}
			else if ($_GET["error"] == "none") {
				echo "<p style='color: green;'>You have add the product</p>";
			}
		}
	?>
	<div class="signup-form-form">
		<form action="includes/addProducts.inc.php" method="post">
			<center>
				<select name="category">
					<option>Laptop</option>
					<option>Desktop</option>
					<option>Accessories</option>
				</select>
			</center>
			<input type="text" name="name" placeholder="Product name...">
			<input type="text" name="description" placeholder="Product description...">
			<input type="number" name="price" placeholder="Product price...">
			<button type="submit" name="submit">Add</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
