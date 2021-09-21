<?php

session_start();

include('function.php');
$conn=conn();
head();
echo"<html lang='it'>";
  if (!isset ($_SESSION["admin"]) or $_SESSION["admin"]!=1){
  header('Location: index.php');
  }
	head();
	echo"<body>
		<div id='container'>";
			headernav();
			echo"<div id='colonna2'>";
			if(isset($_REQUEST["esito"])) {
				$messaggio="L'operazione ";
				if($_REQUEST["esito"] == "ok") {
					$messaggio .= "è andata a buon fine.";
				} else {
					$messaggio .= "non è andata a buon fine.";
				}
				echo"<CENTER> $messaggio </CENTER><br><br>";
			}

			$sql="SELECT *FROM utenti";
			$ris=mysqli_query($conn,$sql);
?>
		<table>
		<tr>
			<td>
				Nome
			</td>
			<td>
				Cognome
			</td>
			<td>
				Username
			</td>
			<td>
				Tipo
			</td>
		</tr>
		<?php
while($riga=mysqli_fetch_assoc($ris))
{
		$a=$riga["Nome"];
		$b=$riga["Cognome"];
		$c=$riga["Username"];
		$d=$riga["tipo"];
		echo"<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td>";
			echo"<td>
				<form action='cancella_user.php' method='POST'>
					<input type='hidden' name='elimina' value='$c'>
					<input type='submit' value='elimina'>
				</form>
			</td></tr>";
}
echo"</table>";
	if (isset ($_SESSION["admin"]) and $_SESSION["admin"]==1){
	echo"<br> <center> <form action='crea_user.php' method='POST'>
	<input type='submit' value='aggiungi'>
</form></center>";
}
echo"</div>";
footer();
echo "</div></body></html>";
?>