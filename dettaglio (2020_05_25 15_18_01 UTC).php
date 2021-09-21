<?php


session_start();

include('function.php');
$conn=conn();
echo"<html lang='it'>";
	head();
	echo"<body>
		<div id='container'>";
    headernav();
  		echo"<div id='colonna2'>";
	$a=$_REQUEST["dettaglio"];
	$_SESSION["dettaglio"]=$a;
	$sql="SELECT *FROM risorse WHERE COD='$a'";
	$ris=mysqli_query($conn,$sql);
	$riga=mysqli_fetch_assoc($ris);

  echo "$riga[COD], $riga[tipo], $riga[descrizione], $riga[proprietario]";

	echo"<form action='ricerca.php' method='post'>
							<input type='submit' value='Indietro'>
					</form>";
	echo"</div>";
		footer();
		echo"</div></body>
		</html>";
 ?>