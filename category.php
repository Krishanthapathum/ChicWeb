<?php
// if categoryID is not set, redirect back to index.php
if (!isset($_GET['categoryID'])) {
    header("Location:index.php");
}

//select all stock items belonging to selected categoryID
$stock_sql = 
            "SELECT s.stockID, s.name, s.price, c.name AS catname 
                FROM stock s JOIN category c
                ON s.categoryID=c.categoryID 
                WHERE s.categoryID=" . $_GET['categoryID'];

if ($stock_query = mysqli_query($dbconnect, $stock_sql)) {
    $stock_rs = mysqli_fetch_assoc($stock_query);
}

if(mysqli_num_rows($stock_query)==0){
    echo "Sorry, we have no items currently in stock";
} else {
    ?>
    <h1><?php echo $stock_rs['catname']; ?></h1>

    <?php do { ?>
        <div class="item">
           
            <a href="index.php?page=item&stockID=<?php echo $stock_rs['stockID']; ?>">
                
            <p><?php echo $stock_rs['name']; ?></p>
            <p>$<?php echo $stock_rs['price']; ?></p>
        </div>
    <?php
    } while ($stock_rs = mysqli_fetch_assoc($stock_query));
    ?>
    <?php
}

?>