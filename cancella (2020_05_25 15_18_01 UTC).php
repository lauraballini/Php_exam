<?php

	session_start();
	
	include('function.php');
	$conn=conn();
	$a=$_REQUEST["elimina"];
	$sql="DELETE FROM risorse WHERE COD='$a'";
	$ris=mysqli_query($conn,$sql);
	if($ris) {
		header('Location:ricerca.php?esito=ok');
	}
	else {
		header('Location:ricerca.php?esito=ko');
	}
?>
