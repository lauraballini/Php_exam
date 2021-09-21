<?php
session_start();
include('function.php');
head();
headernav();
aside();


echo "<div id='colonna6'>";
echo "<br><br><br>";
echo "<div id='tab'>";       	
 echo "<div id='stu'> <a href='STUDENTI.php'><strong> Studenti</strong> </a></div>";

echo "<div id='fami'><a href='FAMIGLIE.php'><strong> Famiglie </strong> </a></div>";
echo "<div id='univ'><a href='UNIVERSITA.php'> <strong> Università </strong> </a></div>";
echo "</div>";
echo "<br><br>";
echo "<div id='boxfamiglia'>";
echo "<h1 id='famigliaa'> Innovazione sociale, Comunicazione e <br> <br> nuove Tecnologie </h1>
<h2> La Laurea che ti apre al futuro </h2>
<p> La nuova Laurea dell'Università degli Studi di Torino, avviata nell'Anno Accademico 2016-2017,
 integra <br> le scienze economiche, sociali e giuridiche con 
 l'informatica e le tecnologie in un unico percorso interdisciplinare <br> da cui nasceranno: <br><br><br> 
<ol> 
<li> i progettisti della comunicazione d'impresa e della comunicazione sociale <br></li> 
<li> i progettisti di applicazioni ICT <br></li> 
<li> i comunicatori che meglio sapranno coniugare le esigenze della società e <br>
delle organizzazioni con la tecnologia digitale e il Web. </li> 
</ol>


<h3> Guida di orientamento: </h3> <br>
<ol>
<li> CORSO A NUMERO APERTO (è previsto un test di accertamento dei requisiti minimi)<br></li>
<li> TITOLO DI STUDIO RICHIESTO: Diploma di Istruzione Secondaria Superiore <br> o di altro titolo di studio estero riconosciuto idoneo<br></li>
<li> DURATA: 3 anni<br></li>
<li> CREDITI FORMATIVI UNIVERSITARI (CFU): 180 <br></li>
<li> FREQUENZA: facoltativa (eccetto per il laboratorio di scrittura che è a frequenza obbligatoria) <br></li>
<li> TIROCINIO: facoltativo<br> </li> 
<li> TITOLO DI STUDIO RILASCIATO: Laurea <br></li> 
</ol>

</div>
</div>";





echo "</body>";
   echo "</html>";
   footer();
    ?>