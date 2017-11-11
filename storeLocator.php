<?php
    include('config.php');
    $center_lat = $_GET['lat'];
    $center_lng = $_GET['lng'];
    $radius = $_GET['radius'];

    $dom = new DOMDocument("1.0");
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);

    $query = "SELECT Shop_id, Shop_Name, addr, lat, lng, ( 3959 * acos( cos( radians('$center_lat') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('$center_lng') ) 
    + sin( radians('$center_lat') ) * sin( radians( lat ) ) ) ) AS distance FROM shops_table HAVING distance < '$radius' ORDER BY distance LIMIT 0 , 20";
   // echo $query;
    $result = mysqli_query($db, $query);
   // echo mysqli_num_rows($result);

    header("Content-type: text/xml");

    while($row = mysqli_fetch_assoc($result))
    {
        $node = $dom->createElement("marker");
        $newnode = $parnode->appendChild($node);
        $newnode->setAttribute("id", $row['Shop_id']);
        $newnode->setAttribute("name", $row['Shop_Name']);
        $newnode->setAttribute("address", $row['addr']);
        $newnode->setAttribute("lat", $row['lat']);
        $newnode->setAttribute("lng", $row['lng']);
        $newnode->setAttribute("distance", $row['distance']);
    }
    echo $dom->saveXML();
    //storelocator.php?lat=-33.863276&lng=151.107977&radius=11
?>
