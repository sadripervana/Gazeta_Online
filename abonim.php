<?php 
if(isset($_POST['abonim'])){
	include "lidhja.php";
	$email = $_POST['email'];

	$query = "INSERT INTO abonim (email) VALUES ('$email')";
	mysqli_query($lidhja,$query);
	header("location:admin.php");
}