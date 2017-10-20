<?php
	include('config.php');
	session_start();
	
	$uid = $_POST['user_id'];
	$password = $_POST['pass'];
	
	$sql = "SELECT User-id FROM Users WHERE User-id = '$uid' AND Password = '$password'";
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$count = mysqli_num_rows($result);
	
	if($count == 1)
	{
		$_SESSION['login_user'] = $uid;
		
		header("location: welcome.php");
	}
	else
	{
		header("location: ShopkeeperLogin.php");
	}
	
?>