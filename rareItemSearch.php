<?php
    include('config.php');
    $id = $_POST['product_id'];
    $query = $query = sprintf("SELECT shop_id, shop_name, address, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) 
    + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM shops HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",
    mysql_real_escape_string($center_lat),
    mysql_real_escape_string($center_lng),
    mysql_real_escape_string($center_lat),
    mysql_real_escape_string($radius));

    $result = mysqli_query($db, $query);

    while($row = mysqli_fetch_array($result))
    {
        $sid = $row['shop_id'];
        $table_name = "tabl".$sid;
        $sql = "SELECT * FROM $table_name WHERE product_id = $id";
        $res2 = mysqli_query($db, $sql);
        if($res2 == false)
        {

        }
        else if(mysqli_num_rows($res2) == 0)
        {

        }
        else
        {
            
        }
    }
?>