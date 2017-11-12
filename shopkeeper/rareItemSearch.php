<?php
    include('config.php');
    $pn = $_POST['product_name'];
    $sql = "SELECT product_id, product_name FROM product_table WHERE product_name LIKE '%".$pn."%'";
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result))
    {
        ?>
        <form action = "setSession.php" method = "POST">
            <input type = "hidden" name = "pid" value = <?php echo $row['product_id']; ?>>
            <button type = "submit" class = "link-button"> <?php echo $row['product_name'] ?> </button>
        </form>
        <?php
    }
?>