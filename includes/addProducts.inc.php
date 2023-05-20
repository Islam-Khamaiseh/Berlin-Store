<?php
	if (isset($_POST["submit"])) {
		$price = $_POST["price"];
		$category = $_POST["category"];
		$name = $_POST["name"];
		$description = $_POST["description"];
		require_once "dbh.inc.php";
		require_once 'functions.inc.php';
		if (emptyInputAddProduct($price, $category, $name) !== false) {
			header("location: ../addProducts.php?error=emptyinput");
			exit();
		}
		addProduct($conn, $price, $category, $name, $description);
	} 
	else {
		header("location: ../addProducts.php");
		exit();
	}