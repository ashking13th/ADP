<?php
    include('session.php');
    $pid = $_POST['product_id'];
    $qty = $_POST['qtyChange'];
    $table_name = "tabl".(string)$_SESSION['shop_id'];
    echo $_SESSION['shop_id'];
    $sql = "SELECT * FROM $table_name WHERE product_id = $pid";
   // echo $sql;
    $res = mysqli_query($db, $sql);
    if($res == false) 
    {
        $sql = "INSERT INTO $table_name(product_id, qty) VALUES('$pid', '$qty')";
      //  echo $sql;
        mysqli_query($db, $sql);
    }
    else if(mysqli_num_rows($res) == 0)
    {
        $sql = "INSERT INTO $table_name(product_id, qty) VALUES('$pid', '$qty')";
      //  echo $sql;
        mysqli_query($db, $sql);
    }
    else
    {
        $sql = "UPDATE $table_name SET qty = qty + $qty WHERE product_id = $pid";
        mysqli_query($db, $sql);
       // echo $sql;
    }
    header("Location: AllProductsDisplay.php");
?>
