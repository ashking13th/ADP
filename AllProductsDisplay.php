<?php
	include('config.php');
	if(!isset($_SESSION['shop_id']))
	{
		echo "Shop id not found!";
	}
	else
	{
		$table_name = "Table" + (string)$_SESSION['shop_id'];
		$sql = "SELECT * FROM '$table_name' WHERE 1";
		$result = mysqli_query($db, $sql);
		
		echo "<table>";
		while($row = mysql_fetch_array($result))
		{
			$sql2 = "SELECT Name FROM Product_Table WHERE product_id = ".$row['product_id'];
			$result2 = mysqli_query($db, $sql2);
			$row2 = mysql_fetch_array($result2);
			$pn = $row2['Name'];
			echo "<tr><td>".$pn."</td><tf>".$row['Qty']."</td><td>".$row['price']."</td></tr>";
		}
		echo "</table";
	}
?>