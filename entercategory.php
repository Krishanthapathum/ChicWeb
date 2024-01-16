<?php
session_start();
// check to see if user is logged in if not redirect to admin page
if (!isset($_SESSION['admin'])) {
    header("Location:index.php?page=admin");
}

// check to see if the add category form has been submitted 
if (!isset($_SESSION['addcategory']['name'])) {
    header("Location:index.php?page=admin");
}

//enter new category into database
$newcategory_sql = "INSERT INTO category (name) VALUES ('" . mysqli_real_escape_string($dbconnect, $_SESSION['addcategory']['name']) . "')";
$newcategory_query = mysqli_query($dbconnect, $newcategory_sql);
unset($_SESSION['addcategory']['name']);

?>

<h1>New category has been entered</h1>
<p><a href="index.php?page=admin">Return to admin panel</a></p>