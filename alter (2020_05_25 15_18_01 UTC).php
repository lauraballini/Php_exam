<?php
session_start();
include("function.php");
$conn=conn();
head();
if(
	!empty($_REQUEST["tipo"]) and
	!empty($_REQUEST["descrizione"]) and
	!empty($_REQUEST["proprietario"])
){
	$a=$_REQUEST["tipo"];
	$b=$_REQUEST["descrizione"];
	$c=$_REQUEST["proprietario"];
	$caso=$_SESSION["modifica"];
  $sql="UPDATE risorse SET tipo='$a',descrizione='$b',proprietario='$c'WHERE COD='$caso'";
	$ris=mysqli_query($conn,$sql);
	if($ris) {
		header('Location: ricerca.php?esito=ok');
	} else {
		header('Location: ricerca.php?esito=ko');
	}
}
else{
	header('Location: ricerca.php?esito=ko');
}
?>
