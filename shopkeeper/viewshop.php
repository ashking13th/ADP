<style>
    .inline {
    display: inline;
    }

    .link-button {
    background: none;
    border: none;
    color: blue;
    text-decoration: underline;
    cursor: pointer;
    font-size: 1em;
    font-family: serif;
    }
    .link-button:focus {
    outline: none;
    }
    .link-button:active {
    color:red;
    }
</style>

<?php
    include('session.php');
    $_SESSION['shop_id'] = NULL;
    $sql = "SELECT * FROM shops_table WHERE owner = '$login_session'";
    $result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_array($result))
    {
        echo "<form action = \"AllProductsDisplay.php\" method = \"POST\">";
        echo "<input type = \"text\" name = \"secret_field\" value = ".$row['Shop_id'].">";
        echo "<button type = \"submit\" name = \"submit_param\" value = \"submit_value\" class = \"link-button\">";
        echo $row['Shop_Name'];
        echo "</button>";
        echo "</form>";
    }
    echo "<p><a href = \"AddShop.html\">Add Shop</a></p>";
?>
