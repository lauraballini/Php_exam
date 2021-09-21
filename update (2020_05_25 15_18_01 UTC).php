<?php

include ('function.php');
$conn=conn();
session_start();

$tipo=$_REQUEST["tipo"];
$user=$_REQUEST["username"];
$psw=$_REQUEST["password"];
$nome=$_REQUEST["nome"];
$cognome=$_REQUEST["cognome"];
$sql="SELECT * FROM utenti";
$ris=mysqli_query($conn,$sql);
$found=0;
if(isset($user) and isset($psw) and !empty($user) and !empty($psw)){
	while($riga=mysqli_fetch_assoc($ris)){
		if($user==$riga['Username']){
			$found=1;
		}
	}
	if($found==1){

		header('Location:registra.php?errore=duplicato');
	}
	else{
		$sql="INSERT INTO utenti(tipo,Username,Password,Nome,Cognome)VALUES('$tipo','$user','$psw','$nome','$cognome')";
		$ris=mysqli_query($conn,$sql);
		if($ris) {
			header('Location:index.php');
		}
		else {
			header('Location:registra.php');
		}
			}
}
else{
	header('Location:registra.php?errore=parametri');
}
?>