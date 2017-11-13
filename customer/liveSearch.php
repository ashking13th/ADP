<?php
    include('config.php');
    session_start();

    include('config.php');
    $pn = $_POST['product_name'];
    //$pn = "Anime";
    $sql = "SELECT product_id, product_name FROM product_table WHERE product_name LIKE '%".$pn."%'";
    $result = mysqli_query($db, $sql);
    $message = "No search results !"

    $dom = new DOMDocument("1.0");

    $hint = "";
    $red = "setSession.php?pid=";

    while($row = mysqli_fetch_array($result))
    {
        $pid = $row['product_id'];
        $cat = "<a href=".($red.$pid)."> ";

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