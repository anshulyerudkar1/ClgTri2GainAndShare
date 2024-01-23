<?php
include 'dbcon.php';
session_start();
session_destroy();
header('location:home.php');
?>

<!-- <script type="text/javascript">
	location.replace("home.php");
</script> -->