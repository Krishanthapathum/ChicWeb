<?php
session_start();
// check to see if user is logged in if not redirect to admin page
if (!isset($_SESSION['admin'])) {
    header("Location:index.php?page=admin");
}

// check to see if the add category form has been submitted
if (!isset($_POST['submit'])) {
    header("Location:index.php?page=admin");
}

// set addcategory session
$_SESSION['addcategory']['name'] = $_POST['name'];

?>
<h1>Confirm category name</h1>
<p>You entered: <?php echo $_POST['name']; ?></p>
<p><a href="index.php?page=entercategory">Correct, continue</a> | <a href="index.php?page=addcategory">Oops! go Back</a></p>  