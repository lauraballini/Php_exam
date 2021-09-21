<?php
session_start();
include('function.php');
head();
headernav();
aside();





echo "<div id='colonna4'>";
echo "<br><br><br><br>";
 echo  "<div id='tab'> ";        	
echo  "<div id='stu'> <a href='STUDENTI.php'><strong> Studenti</strong> </a></div>";


echo "<div id='fami'><a href='FAMIGLIE.php'><strong> Famiglie </strong> </a></div>";

 
echo "<div id='univ'><a href='UNIVERSITA.php'> <strong> Università </strong> </a></div>";
echo "</div>";
echo "<br><br><br><br>";
echo "<div id='boxuniversità'>";
	    
         echo   "<h1> <strong> Benvenuto! </strong> </h1><br/>";
          echo    "L’Italia attualmente ha un ruolo molto importante nell’ambito dell’istruzione superiore europea. Nel presente, così come nel passato, può far forza su una forte struttura che permette di offrire agli studenti un’ottima formazione.";
        echo   "Studiare in Italia dà anche la possibilità di venire a contatto con l’immensa cultura di questo paese. <br/><br/>  ICT UNITO  è un utile e pratico strumento di informazione per gli studenti che desiderano frequentare in Italia un corso universitario all'avanguardia.";
             
        echo "<br><br><br>";
      echo "Ti starai sicuramente domandando perché scegliere la nostra università, giusto?
        <br><br>
        Ecco a te <strong> dieci </strong> buone ragioni del perchè farlo: 
<br><br>
<ol>
               <li> E' una grande università; <br> </li> 
               <li>  E' un ateneo prestigioso; <br> <li>
               <li>  Ha un'ampia <a href='COSASTUDIARE.php'> offerta formativa </a>; <br></li> 
                <li> Garantisce il <a href='http://www.edisu.piemonte.it/'> diritto allo studio </a> ;<br></li> 
                <li> Investe nella ricerca e crea innovazione;<br></li> 
               <li> Offre un ambiente internazionale; <br></li> 
                <li> Prepara le basi per il tuo lavoro futuro; <br></li> 
               <li> Ti accompagna nel tuo <a href='COSASTUDIARE.php'> percorso di studi </a> ;<br></li> 
                <li> Ti fa vivere in una <a href='DOVESTUDIARE.php'> città universitaria </a>;<br></li> 
                <li>Valorizza il territorio. </li>
</ol> <br>
<p> Per maggiori informazioni sul corso consulta la sezione <a href='FAMIGLIE.php'> guida di orientamento </a>.
<br><br>
			 </p>
<video class='video' controls>
<source src='immagini/video2.mp4' type='video/mp4'>
<source src='immagini/video1.ogg' type='video/ogg'>
Il browser non supporta il Tag video.
</video>
	</div>

</div>

<br><br>";



echo "</body>";

echo "</html>";
footer();
?>
    