<?php
//rederect back to index.php if no stockID has been 
if (!isset($_GET['stockID'])) {
    header("Location:index.php");
}

//select all stock items belonging to selected categoryID
$item_sql =
    "SELECT * FROM stock WHERE stockID=" . $_GET['stockID'];
    // echo $stock_sql;
if ($item_query = mysqli_query($dbconnect, $item_sql)) {
    $item_rs = mysqli_fetch_assoc($item_query);
?>

<h1><?php echo $item_rs['name']; ?></h1>
<p>$<?php echo $item_rs['price']; ?></p>
<p><?php echo $item_rs['description']; ?></p>

<?php
}
            // "SELECT s.stockID, s.name, s.price, c.name AS catname 
            //     FROM stock s JOIN category c
            //     ON s.categoryID=c.categoryID 
            //     WHERE s.stockID=" . $_GET['stockID'];
?>