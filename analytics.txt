$sql = "";
$go = 0;
if(isset($_POST['grp'])) $go = 1;
$so = $_POST['sort'];
if($so == 1) $so = 0;
else $so = 1;

if($so == 0 && $go == 0) $sql = "SELECT product_id, qty, sold AS ts FROM table_name ORDER BY ts";
else if($so == 0 && $go == 1) $sql = "SELECT product_id, qty, SUM(sold) AS ts FROM table_name GROUP BY tag ORDER BY ts";
else if($so == 1 && $go == 0) $sql = "SELECT product_id, qty, sold AS ts FROM table_name ORDER BY ts DESC";
else $sql = "SELECT product_id, qty, SUM(sold) AS ts FROM table_name GROUP BY tag ORDER BY ts DESC";

$res = mysqli_query($db, $sql);

while($row = mysqli_fetch_array($res))
{
	$pid = $row['product_id'];
	$qty = $row['qty'];
	$sq = $row['ts'];
	$query = "SELECT product_name FROM product_table WHERE product_id = $pid";
	$res2 = mysqli_query($db, $query);
	$row2 = mysqli_fetch_array($res2);
	$pn = $row2['product_name'];
	display($pid, $pn, $qty, $sq);
}
