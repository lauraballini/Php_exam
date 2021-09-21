<?php
session_start();
include('function.php');
head();
headernav();
aside();

echo"<br><br><br><br><br>";
echo "<div id='colonna10'>";

echo "<div id='tab'>";      	
echo "<div id='stu'> <a href='STUDENTI.php'><strong> Studenti</strong> </a></div>";

echo "<div id='fami'><a href='FAMIGLIE.php'><strong> Famiglie </strong> </a></div>";
echo "<div id='univ'><a href='UNIVERSITA.php'> <strong> Università </strong> </a></div>";
echo "</div>";


echo "<br><br>";
echo "<p> Aiuta a migliorare il nostro sito rispondendo a queste domande, ci vorranno solo 5 minuti! </p>";



echo "<form action='mailto:someone@example.com' method='post' enctype='text/plain'>

 Sesso: <br>
	<input type='radio' name='sesso' value='maschio'/> maschio <br>
	<input type='radio' name='sesso' value='femmina'/>femmina
<br><br><br>

Età: <br>
		<input type='radio' name='età' value='anni1'/> 18 anni <br>
		<input type='radio' name='età' value='anni2'/> 18-39 anni <br>
		<input type='radio' name='età' value='anni3'/> 40-59 anni <br>
		<input type='radio' name='età' value='anni4'/> 60 anni <br>
        <br><br><br>

 Il nostro sito è un sito di gestione e condivisione di dati per affrontare <br> la vita universitaria improntato su un sito come studenti.it, hai mai utilizzato un sito simile? 
	<input type='radio' name='sitisimili' value='si'/>	sì <br>
	<input type='radio' name='sitisimili' value='no'/>	no <br>

<br><br><br>
 Trovi che i caratteri utilizzati siano leggibili?<br> 
	<input type='radio' name='caratteri' value='no'/> no  <br>
	<input type='radio' name='caratteri' value='poco'/> poco <br>
	<input type='radio' name='caratteri' value='abbastanza'/> abbastanza <br>
	<input type='radio' name='caratteri' value='si'/>	sì <br>
<br><br><br>
 Trovi che le immagini utilizzate siano ben scelte?<br>
	<input type='radio' name='immagini' value='no'/> no <br>
	<input type='radio' name='immagini' value='poco'/> poco <br>
	<input type='radio' name='immagini' value='abbastanza'/>	abbastanza <br>
	<input type='radio' name='immagini' value='si'/> sì <br>
<br><br><br>
I contenuti del sito sono esposti chiaramente? <br>
	<input type='radio' name='contenuti' value='no'/>	no <br>
	<input type='radio' name='contenuti' value='poco'/>	poco <br>
	<input type='radio' name='contenuti' value='abbastanza'/>	abbastanza <br>
	<input type='radio' name='contenuti' value='si'/>	sì <br>
<br><br><br>
Il sito nel complesso è sembrato facile da usare? <br>
	<input type='radio' name='gestione' value='no'/>	no <br>
	<input type='radio' name='gestione' value='poco'/>	poco <br>
	<input type='radio' name='gestione' value='abbastanza'/>	abbastanza <br>
	<input type='radio' name='gestione' value='si'/>	sì <br>
<br><br><br>

 Quali aspetti del sito ti sono piaciuti maggiormente? <br>
	<input type='checkbox' name='aspetti' value='usabilità'/>	usabilità <br>
	<input type='checkbox' name='aspetti' value='semplicità'/>	semplicità <br>
	<input type='checkbox' name='aspetti' value='efficienza'/>	efficienza <br>
<br><br><br>
Quali aspetti del sito non ti sono piaciuti affatto?<br> 
	<input type='checkbox' name='aspetti' value='disfunzionale'/>	disfunzionale <br>
	<input type='checkbox' name='aseptti' value='incomprensibile'/>	incomprensibile <br>
	<input type='checkbox' name='aspetti' value='incoerente'/>	incoerente <br>
	<input type='checkbox' name='aspetti' value='complesso'/>	complesso <br>
 <br><br><br>
Lo scopo del sito è chiaro? <br>
	<input type='radio' name='scopo' value='no'/>	no  <br>
	<input type='radio' name='scopo' value='poco'/>	poco <br>
	<input type='radio' name='scopo' value='abbastanza'/>	abbastanza <br>
	<input type='radio' name='scopo' value='si'/>	 sì <br>
<br><br><br>
 Le informazioni all'interno del sito sono facilmente reperibili?<br> 
	<input type='radio' name='informazioni' value='no'/>	no <br>
	<input type='radio' name='informazioni' value='poco'/>	poco <br>
	<input type='radio' name='informazioni' value='abbastanza'/>	abbastanza <br>
	<input type='radio' name='informazioni' value='si'/>	sì <br>
<br><br><br>
 Il sito ha soddisfatto le tue ricerche?  <br> 
	<input type='radio' name='ricerche' value='no'/>	no <br>
	<input type='radio' name='ricerche' value='poco'/>	poco <br>
	<input type='radio' name='ricerche' value='abbastanza'/>	abbastanza <br>
	<input type='radio' name='ricerche' value='si'/>	sì <br>
<br>
	<input type='submit' value='Invia'>
</form>";




  echo" </div>";


echo "</body>";
echo "</html>";
    
footer();
?>