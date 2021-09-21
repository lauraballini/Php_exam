<?php

	session_start();
	
	include('function.php');
	$conn=conn();
	$a=$_REQUEST["elimina"];
	$sql="DELETE FROM utenti WHERE Username='$a'";
	$ris=mysqli_query($conn,$sql);
	if($ris) {
		header('Location:admin.php?esito=ok');
	}
	else {
		header('Location:admin.php?esito=ko');
	}
?>
