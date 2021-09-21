<?php

include ('function.php');
$conn=conn();
session_start();

$tipo=$_REQUEST["tipo"];
$user=$_REQUEST["Username"];
$psw=$_REQUEST["password"];
$nome=$_REQUEST["Nome"];
$cognome=$_REQUEST["Cognome"];
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

		header('Location:crea_user.php?errore=duplicato');
	}
	else{
		$sql="INSERT INTO utenti(Tipo,Username,Password,Nome,Cognome)VALUES('$tipo','$user','$psw','$nome','$cognome')";
		$ris=mysqli_query($conn,$sql);
		if($ris) {
			header('Location:admin.php?esito=ok');
		}
		else {
			header('Location:admin.php?esito=ko');
		}
	}
}
else{
	header('Location:crea_user.php?errore=parametri');
}
?>
