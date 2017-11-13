<?php
	include('session.php');
	if(!isset($_SESSION['shop_id'])) $_SESSION['shop_id'] = $_POST['secret_field'];
	if(!isset($_SESSION['shop_id']))
	{
		echo "Shop id not found!";
	}
	else
	{
		$table_name = "tabl";
		$table_name .= (string)$_SESSION['shop_id'];
		$sql = "SELECT * FROM $table_name WHERE 1";
		$result = mysqli_query($db, $sql);
		if($result == false) 
		{
			echo "No rows found<br/>";
		}
		else
		{
			echo "<table>";
			while($row = mysqli_fetch_array($result))
			{
				$sql2 = "SELECT product_name FROM Product_Table WHERE product_id = ".$row['product_id'];
				$result2 = mysqli_query($db, $sql2);
				$row2 = mysqli_fetch_array($result2);
				$pn = $row2['product_name'];
				echo "<tr><td>".$pn."</td><td>".$row['qty']."</td></tr>";
			}
			echo "</table>";
		}
	}
	//echo $_SESSION['shop_id'];
?>
<p><a href = "AddItems0.php">Add Items</a></p>
