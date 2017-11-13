<?php
    include('config.php');
    session_start();

    $pn = $_GET['q'];
    
    $sql = "SELECT product_id, product_name FROM product_table WHERE product_name LIKE '%".$pn."%'";

    $result = mysqli_query($db, $sql);
    $message = "No search results !";

    $hint = "";
    $red = "setSession.php?pid=";

    while($row = mysqli_fetch_array($result))
    {
        $pid = $row['product_id'];
        $pn = $row['product_name'];
        $cat = ' <a href="'.$red.$pid.'"> '.$pn.'';

        if($hint == "")
        {
            $hint = $cat;
        }
        else
        {
            $hint = $hint."<br />".$cat;
        }
    }

    if($hint == "")
    {
        $hint = $message;
    }

    echo $hint;
?>
