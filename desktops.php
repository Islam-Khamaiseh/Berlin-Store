<?php
	include_once 'header.php';
?>

<img src="img/pc2.jpg" alt="" class="top-img" style="width: 100%; height: 700px;">
	<div class="laptops-main">
	<br> <br>
	<center>
		<h1>DESKTOPS</h1>
		</center>
	<a href="accessories.php" class="h3-1">ACCESSORIES</a>
	<a href="laptops.php" class="h3-2">LAPTOPS</a>
	<br><br>
	<?php
		$Laptop = "Laptop";
		require_once "includes/dbh.inc.php";
		$sql = "SELECT productsPrice, productsName, productsDescription FROM products WHERE productsCategory = 'Desktop' ORDER BY productsPrice DESC;";
		$result = mysqli_query($conn, $sql);
		$arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
	?>

	<?php
		foreach($arr as $item){?>
		<div class="p2">
			<p class="p-Price"><?php echo htmlspecialchars($item['productsPrice']); ?>$</p><br>
			<center>
				<a href="#" class="p1-a"><img src="img/pc11.png" alt="p1"></a>
			</center><br>
			<p class="p-Name"><?php echo htmlspecialchars($item['productsName']); ?></p><br>
			<p class="p-Description"><?php echo htmlspecialchars($item['productsDescription']); ?></p>
		</div>
		<?php
		}
	?>
</div>
<?php
	include_once 'footer.php';
?>
