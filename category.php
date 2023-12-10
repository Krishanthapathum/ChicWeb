<?php
// if categoryID is not set, redirect back to index.php
if (!isset($_GET['categoryID'])) {
    header("Location:index.php");
}

//select all stock items belonging to selected category
?>