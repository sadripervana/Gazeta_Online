
<?php
	include("lidhja.php");
	session_start();
	$id = $_GET['id'];
	$q = "delete from postime where postime_id = $id ";
	mysqli_query($lidhja,$q);
    header("location:admin.php");
	
?>