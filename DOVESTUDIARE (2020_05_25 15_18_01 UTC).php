<?php 
session_start();
include ('function.php');
head();
 headernav();
 aside();


 echo "<div id='colonna5'>";
 echo "<br><br><br><br>";
   echo "<div id='tab'> ";        	
 echo "<div id='stu'> <a href='STUDENTI.php'><strong> Studenti</strong> </a></div>";


echo "<div id='fami'><a href='FAMIGLIE.php'><strong> Famiglie </strong> </a></div>";

 
echo "<div id='univ'><a href='UNIVERSITA.php'> <strong> Università </strong> </a></div>";
echo "</div>";
echo "<br><br><br>";
echo "<p id='textdove'>";
echo "L'Università di Torino è un'organizzazione complessa e multilocalizzata <br>con sedi dislocate nella città di Torino e prima cintura urbana. ";

 echo "<br><br>";

echo "Di seguito è riportato l'elenco dei principali poli territoriali. <br><br>";

echo "<embed src='immagini/sedi.pdf' type='application/pdf' width='500' height='375'>";
echo "<br><br>";
echo "<strong> TORINO NORD </strong><br>";
echo "Campus Luigi Einaudi (CLE)<br>";
echo "Complesso 'Pier della Francesca'<br>
<strong> TORINO CENTRO </strong> ><br>
Palazzo del Rettorato<br>
Palazzo Badini Confalonieri<br>
Palazzo Lionello Venturi<br>
Palazzo Campana<br>
Palazzo Nuovo<br>
Ex Caserma Podgora (Dipartimento di Scienze della Vita e Biologia dei Sistemi)<br>
<strong> TORINO SUD </strong> ><br>
Scuola di Management ed Economia<br>
Scuola Scienze della Natura<br>
Scuola di Biotecnologie<br>
Scuola di Medicina Molinette<br>
Dental School<br>
Centro dell'Innovazione<br>
<strong> GRUGLIASCO </strong>(TO)<br>
Campus universitario di Grugliasco<br>
<strong> ORBASSANO </strong> (TO)<br>
Scuola di Medicina San Luigi<br>

</p>

 </div>



";



echo "</body>";

  echo   "</html>";
 footer();
  ?>
    