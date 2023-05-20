<?php
	include_once 'header.php';
?>

<img src="img/L.jpg" alt="" class="top-img" style="width: 100%; height: 700px;">
<div class="laptops-main">
	<br> <br>
	<center>
		<h1>LAPTOPS</h1>
	</center>
	<a href="desktops.php" class="h3-1">DESKTOPS</a>
	<a href="accessories.php" class="h3-2">ACCESSORIES</a>
	<br><br>
	<?php
		require_once "includes/dbh.inc.php";
		$sql = "SELECT productsPrice, productsName, productsDescription FROM products WHERE productsCategory = 'Laptop' ORDER BY productsPrice DESC;";
		$result = mysqli_query($conn, $sql);
		$arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
	?>

	<?php
	foreach($arr as $item){?>
		<div class="p2">
			<p class="p-Price"><?php echo htmlspecialchars($item['productsPrice']); ?>$</p><br>
			<center>
				<a href="#" class="p1-a"><img src="img/Lp1.png" alt="p1"></a>
			</center><br>
			<p class="p-Name"><?php echo htmlspecialchars($item['productsName']); ?></p><br>
			<p class="p-Description"><?php echo htmlspecialchars($item['productsDescription']); ?></p>
		</div>

	<?php
	}?>
</div>

<?php
	include_once 'footer.php';
?>
