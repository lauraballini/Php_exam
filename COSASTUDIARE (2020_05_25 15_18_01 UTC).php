<?php
session_start();
include ('function.php');
head();
headernav();
 aside();


echo "<div id='colonna7'>";
echo "<br><br><br>";
echo "<div id='tab'>";        	
 echo "<div id='stu'> <a href='STUDENTI.php'><strong> Studenti</strong> </a></div>";
echo "<div id='fami'><a href='FAMIGLIE.php'><strong> Famiglie </strong> </a></div>";
echo "<div id='univ'><a href='UNIVERSITA.php'> <strong> Università </strong> </a></div>";
echo "</div>";
echo "<br><br><br>";
echo "<p> Il Piano di Studi si articola in quattro aree disciplinari: <i>sociologia, informatica, economia e scienze giuridiche</i>.";
echo "<br><br><br>";
echo "</p>";
echo "<p id='pdf'> <embed src='immagini/pianodistudi.pdf' type='application/pdf' width='500' height='375'> </p>";
echo "<br><br>";
echo "<p> L'<strong> offerta formativa </strong> è composta da esami <i> obbligatori </i> ed esami <i> a scelta</i>, <br>
i quali andranno a solidificare il proprio percorso di studi.</p>";


echo "<br><br>";
echo "<br>";
echo "<br>";




echo "</div>";


echo "</body>";
  echo  "</html>";
  footer ();
  ?>
    