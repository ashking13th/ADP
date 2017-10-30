<?php
    include('config.php');
    $center_lat = $_GET['lat'];
    $center_lng = $_GET['lng'];
    $radius = $_GET['radius'];

    $dom = new DOMDocument("1.0");
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);

    $query = $query = sprintf("SELECT shop_id, shop_name, address, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) 
    + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM shops HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",
    mysql_real_escape_string($center_lat),
    mysql_real_escape_string($center_lng),
    mysql_real_escape_string($center_lat),
    mysql_real_escape_string($radius));

    $result = mysqli_query($db, $query);

    header("Content-type: text/xml");

    while($row = mysqli_fetch_assoc($result))
    {
        $node = $dom->createElement("marker");
        $newnode = $parnode->appendChild($node);
        $newnode->setAttribute("id", $row['shop_id']);
        $newnode->setAttribute("name", $row['shop_name']);
        $newnode->setAttribute("address", $row['address']);
        $newnode->setAttribute("lat", $row['lat']);
        $newnode->setAttribute("lng", $row['lng']);
        $newnode->setAttribute("distance", $row['distance']);
    }
    echo $dom->saveXML();
?>