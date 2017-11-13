<?php
	include('config.php');
	$name = $_POST['sname'];
	$addr = $_POST['addr'];
	$latX = $_POST['latX'];
	$latY = $_POST['latY'];
	$sid = mysqli_num_rows(mysqli_query("SELECT * FROM shops_table"));
	$query = "INSERT INTO emp(shop_id, shop_name, addr, latX, latY) VALUES('$sid', '$name', '$addr', '$latX', '$latY')";
	mysqli_query($db, $query);
	header("Location:ShopkeeperLogin.html");
?>
