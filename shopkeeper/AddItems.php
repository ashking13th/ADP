<?php
    include('session.php');
    $pn = $_POST['product_name'];
    $sql = "SELECT product_id, product_name FROM product_table WHERE product_name LIKE '%".$pn."%'";
    $res = mysqli_query($db, $sql);
    if(mysqli_num_rows($res) == 0)
    {
        echo "Your search did not match any of the existing items in our database<br/>";
        echo "<p><a href = \"SuggestItem.html\">Suggest new item</a></p>";
    }
    else
    {
        while($row = mysqli_fetch_array($res))
        {
            ?>
            <form action = "updateShopRecord.php" method = "POST">
                <?php echo $row['product_name']." ";
                echo "<input type = \"hidden\" name = \"product_id\" value = \"".$row['product_id']."\"";
                ?>
                <br/>
                <input type = "number" name = "qtyChange" value = "0">
                <input type = "Submit" value = "Change!">
                <br/>
            </form>
            <?php
        }
    }
?>
