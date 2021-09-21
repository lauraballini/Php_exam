<?php
session_start();
include ('function.php');
head();
headernav();
aside();

echo "<div id='colonna9'>";
echo "<br><br><br>";
echo "<div id='tab'>";         	
echo "<div id='stu'> <a href='STUDENTI.php'><strong> Studenti</strong> </a></div>";

echo "<div id='fami'><a href='FAMIGLIE.php'><strong> Famiglie </strong> </a></div>";
echo "<div id='univ'><a href='UNIVERSITA.php'> <strong> Università </strong> </a></div>";
echo "</div>";
echo "<br><br>";

echo "<h1> TASSE </h1> ";
echo "<h3> Il modello di contribuzione studentesca dell'Università degli Studi di Torino prevede:</h3> <br><br>";
echo "<ol>";
echo "<li> un contributo onnicomprensivo, il cui importo dipende dall'ISEE e dall'impegno part-time o full-time </li>";
echo "<li> esoneri e riduzioni del contributo per gli studenti con un ISEE pari o inferiore a 30.000,99 Euro </li>";
echo "<li> la suddivisione del pagamento della contribuzione in 3 rate </li>";
echo "</ol>";
echo "<br><br><br>";
echo "<p>Per saperne di più consulta il regolamento tasse:</p> <br><br><br>";
echo "<embed src='immagini/tasse.pdf' type='application/pdf' width='500' height='375'>";

echo "<p> ";
echo "Per maggiori informazioni riguardo la ristorazione, consulta <a href='RISTORAZIONE.php'> questa pagina. </a> </p>";

echo "</div>";
echo "<br><br>";
echo "</body>";
echo  "</html>";


 footer ();

?>