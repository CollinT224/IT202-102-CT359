<?php
session_start();
session_unset();
session_destroy();
echo "You have been logged out";
header("Location: login.php");
echo "You have been logged out";
?>
<?php 
require(__DIR__."/partials/flash.php");

?>
flash(“You have been logged out”);